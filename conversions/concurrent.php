<?php
require __DIR__ . '/vendor/autoload.php';
use FacebookAds\Api;
use FacebookAds\Object\ServerSide\BatchProcessor;
use FacebookAds\Object\ServerSide\CustomData;
use FacebookAds\Object\ServerSide\Event;
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

$api = Api::init(null, null, $access_token, false);

function create_event($i) {
    $user_data = (new UserData())
        ->setEmail('joe' . $i . '@eg.com')
        ->setClientIpAddress($_SERVER['REMOTE_ADDR'])
        ->setClientUserAgent($_SERVER['HTTP_USER_AGENT']);

    $custom_data = (new CustomData())
        ->setCurrency('usd')
        ->setValue(123.45);

    return (new Event())
        ->setEventName('Purchase')
        ->setEventTime(time())
        ->setEventSourceUrl('https://www.onpinker.com/' . $i)
        ->setUserData($user_data)
        ->setCustomData($custom_data)
        ->setActionSource(ActionSource::WEBSITE);
}

function create_events($num) {
    $events = [];

    for ($i = 0; $i < $num; $i++) {
        $events[] = create_event($i);
    }

    return $events;
}

function create_async_requests($pixel_id, $num) {
    $requests = [];

    for ($i = 0; $i < $num; $i++) {
        $requests[] = (new EventRequestAsync($pixel_id))
            ->setUploadTag('test-tag-2')
            ->setEvents([create_event($i)]);
    }

    return $requests;
}

function run($pixel_id) {
    print("Started CONVERSIONS_API_EVENT_CREATE_BATCH...\n");
    $batch_processor = new BatchProcessor($pixel_id, 2, 2);

    // processEvents
    $events = create_events(11);
    $batch_processor->processEvents(array('upload_tag' => 'test-tag-1'), $events);

    // processEventRequests
    $requests = create_async_requests($pixel_id, 5);
    $batch_processor->processEventRequests($requests);

    // processEventsGenerator
    $process_events_generator = $batch_processor->processEventsGenerator(array('upload_tag' => 'test-tag-1'), $events);
    foreach ($process_events_generator as $promises) {
        try {
            Promise\unwrap($promises);
        } catch (RequestException $e) {
            print('RequestException: ' . $e->getResponse()->getBody()->getContents() . "\n");
            throw $e;
        } catch (\Exception $e) {
            print("Exception:\n");
            print_r($e);
            throw $e;
        }
    }

    // processEventRequestsGenerator
    $requests = create_async_requests($pixel_id, 5);
    $process_event_requests_generator = $batch_processor->processEventRequestsGenerator($requests);
    foreach ($process_event_requests_generator as $promises) {
        try {
            Promise\unwrap($promises);
        } catch (RequestException $e) {
            print('RequestException: ' . $e->getResponse()->getBody()->getContents() . "\n");
            throw $e;
        } catch (\Exception $e) {
            print("Exception:\n");
            print_r($e);
            throw $e;
        }
    }
    print("Finished CONVERSIONS_API_EVENT_CREATE_BATCH with no errors.\n");
}

run($pixel_id);