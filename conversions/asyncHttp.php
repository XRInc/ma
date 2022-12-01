<?php
require __DIR__ . '/vendor/autoload.php';
use FacebookAds\Api;
use FacebookAds\Object\ServerSide\CustomData;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\EventRequest;
use FacebookAds\Object\ServerSide\EventRequestAsync;
use FacebookAds\Object\ServerSide\UserData;
use FacebookAds\Object\ServerSide\ActionSource;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise;

$pixel_id = '1885369368304354';
$access_token = 'EAArarkoEWIEBAKih0QzjLHhQSwagJ2R1TNtCfwNwgpvWMGCFAMkBPb9iu9cK44MfO5xWnXXA2eKIZCpFy6cOBJ0iTHenAdsAtwFilWPK4ViddWKTiU8ICqyhk9EjybLYaRRxvG8v0vqjWKtQEUZAn9bQExg4Az8gVR7KwCodnxXhgQ7I6w';

if (empty($pixel_id) || empty($access_token)) {
    throw new Exception('Missing required test config. Got pixel_id: "' . $pixel_id . '", access_token: "' . $access_token . '"');
}

Api::init(null, null, $access_token, false);

function create_events($num) {
    $user_data = (new UserData())
        ->setEmail('joe' . $num . '@eg.com')
        ->setClientIpAddress($_SERVER['REMOTE_ADDR'])
        ->setClientUserAgent($_SERVER['HTTP_USER_AGENT']);

    $custom_data = (new CustomData())
        ->setCurrency('usd')
        ->setValue(123.59);

    $event = (new Event())
        ->setEventName('Purchase')
        ->setEventTime(time())
        ->setEventSourceUrl('https://www.onpinker.com/')
        ->setUserData($user_data)
        ->setCustomData($custom_data)
        ->setActionSource(ActionSource::WEBSITE);

    return array($event);
}

function create_async_request($pixel_id, $num) {
    $async_request = (new EventRequestAsync($pixel_id))
        ->setEvents(create_events($num));
    return $async_request->execute()
        ->then(
            null,
            function (RequestException $e) {
                print(
                    "Error!!!\n" .
                    $e->getMessage() . "\n" .
                    $e->getRequest()->getMethod() . "\n"
                );
            }
        );
}


// Async request:
$promise = create_async_request($pixel_id, 2);

print("Request 1 state: " . $promise->getState() . "\n");
print("Async request - OK.\n");


// Async request with wait:
$promise = create_async_request($pixel_id, 3);

$response2 = $promise->wait();
print("Request 2: " . $response2->getBody() . "\n");
print("Async request with wait - OK.\n");


// Multiple async requests:
$promises = [
    "Request 3" => create_async_request($pixel_id, 4),
    "Request 4" => create_async_request($pixel_id, 5),
];

$response3 = Promise\unwrap($promises);
foreach ($response3 as $request_name => $response) {
    print($request_name . ": " . $response->getBody()."\n");
}
print("Async - Multiple async requests OK.\n");