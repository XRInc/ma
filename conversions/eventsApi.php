<?php
use FacebookAds\Api;
use FacebookAds\Object\ServerSide\CustomData;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\EventRequest;
use FacebookAds\Object\ServerSide\EventRequestAsync;
use FacebookAds\Object\ServerSide\HttpServiceClientConfig;
use FacebookAds\Object\ServerSide\UserData;
use FacebookAds\Object\ServerSide\ActionSource;
class EventsApi {


    //当前地址
    protected $_SourceUrl;
    protected $_pixel_id;
    protected $_access_token;
    protected $_email;
    protected $_price;
    protected $_name;
    protected $_event_id;

    protected $_userdata;
    protected $_custom_data;
    protected $_request;
    protected $_event;


    const unit = 'USD';
    /**
     * EventsApi constructor.
     */
    public function __construct($pixel_id,$access_token,$sourceUrl,$email,$price,$name,$event_id)
    {
        //获取当前地址
        $this->_SourceUrl = $sourceUrl;
        $this->_pixel_id = $pixel_id;
        $this->_access_token = $access_token;
        $this->_email = $email;
        $this->_price = $price;
        $this->_name = $name;
        $this->_event_id = $event_id;
        if (empty($this->_pixel_id) || empty($this->_access_token)) {
            throw new Exception('Missing required test config. Got pixel_id: "' . $this->_pixel_id . '", access_token: "' . $this->_access_token . '"');
        }
    }

    /**
     * 发送网络请求
     */
    public function run() {
        Api::init(null, null, $this->_access_token, false);
        $request = $this->getEventRequest();
        $request->setHttpClient(new WebHttpClient());
        $response = $request->execute();
        print("Response: " . $response->getBody() . "\n");
    }

    /**
     * @param $pixel_id
     * @param $num
     * @param $SourceUrl
     * @return mixed
     */
    function getEventRequest() {
        $this->_userdata = new UserData();
        $this->_custom_data =new CustomData();
        $this->_request = new EventRequest($this->_pixel_id);
        $this->_event = new Event();
        $this->_userdata->setEmail($this->_email)->setClientIpAddress($_SERVER['REMOTE_ADDR'])->setClientUserAgent($_SERVER['HTTP_USER_AGENT']);
        $this->_custom_data->setCurrency(self::unit)->setValue($this->_price);
        $this->_event->setEventName($this->_name)->setEventTime(time())->setEventId($this->_event_id)->setEventSourceUrl($this->_SourceUrl)->setUserData($this->_userdata)->setCustomData($this->_custom_data)->setActionSource(ActionSource::WEBSITE);
        $this->_request->setEvents(array($this->_event));
        return $this->_request;
    }

}
