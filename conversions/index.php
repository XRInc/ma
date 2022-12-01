<?php

require __DIR__ . '/vendor/autoload.php';

// Imports used by the TestHttpClient class
include_once __DIR__ .'/webHttpClient.php';
include_once __DIR__ .'/eventsApi.php';

if (file_exists('../includes/configure.php')) {
    include('../includes/configure.php');
} else {
    die('../includes/configure.php not found');
}
require(DIR_FS_CATALOG_INCLUDES . 'database_tables.php');
require(DIR_FS_CATALOG_INIT_INCLUDES . 'init_database.php');
//引用优惠券方法
require(DIR_FS_CATALOG_FUNCTIONS . 'facebook.php');

//像素代码
$pixel_id = get_facebook_param('pixel_id');
//访问令牌
$access_token = get_facebook_param('facebook_token');

$email = $_POST['email'];
$sourceUrl = $_POST['url'];
$price = $_POST['price'];
$name = $_POST['name'];
$event_id = $_POST['event_id'];
$eventsApi = new EventsApi($pixel_id,$access_token,$sourceUrl,$email,$price,$name,$event_id);
$eventsApi->run();
?>