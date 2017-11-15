<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 13/11/2017
 * Time: 09:18
 */

require_once(__DIR__ . '/../autoload.php');

$user_api = new Swagger\Client\Api\UserApi();
$device_api= new Swagger\Client\Api\DeviceApi();
$credentials = new \Swagger\Client\Model\Credentials([
    "username"=>"", //enter username here
    "password"=>"" // enter password
]);

$token = null; // the access token, default ttl is 2 weeks
$userId = null;

// Login
try {
    $result = $user_api->userLogin($credentials);
    $token = $result->getId(); // store the token
    //use the token for all further requests
    $user_api->getApiClient()->getConfig()->addDefaultHeader("Authorization", $token);
    $userId = $result->getUserId(); // store the users id

} catch (Exception $e) {
    echo 'Problem logging in ', $e->getMessage(), PHP_EOL;
    die();
}

//Get devices on the account:
$devices = [];
try {
    $devices = $user_api->userPrototypeGetDevices($userId);
} catch (Exception $e) {
    echo 'Failed to get devices ', $e->getMessage(), PHP_EOL;
    die();
}

// Setup the time period we are interested in
$earliestTime = new DateTime( "2017-01-01 15:00:00", new DateTimeZone("America/Los_Angeles"));
$latestTime = new DateTime( "2018-01-01 15:00:00", new DateTimeZone("America/Los_Angeles"));

// we could also set the earliest and latest times to be relative to current time
//$earliestTime = (new DateTime())->sub(new DateInterval("P2D")); - substract 2 days (P2D) from the current time
//$latestTime = new DateTime(); // NOW


// Set up the filter for the points we want
$point_filter = (object)[
    "where" => [
        "and" => [ // get last 2 days of data. note timestamp is Unix timestamp in milliseconds
            ["timestamp" => ["gt" => $earliestTime->getTimestamp()*1000]], // from 2 days ago
            ["timestamp" => ["lt" => $latestTime->getTimestamp()*1000]] // to now
        ]
    ],
    "order" => "timestamp DESC", // order the points in reverse order (newest first)
    //"limit" => 5 // limit to the last (newest) 5 points
];

// Get the points
foreach($devices as $device){
    try {
        $points = $device_api->devicePrototypeGetPoints($device->getId(), $point_filter);
        echo '<h3>Points for device '. $device->getName().'</h3>';
        foreach($points as $point){
            if($point->getLocationType() !== 'invalid' && $point->getLocation()) {
                $date = $point->getTimestamp();
                $date->setTimezone(new DateTimeZone("America/Los_Angeles")); // localise the timestamp
                echo '<b>'. $date->format('Y-m-d H:i:s') . ':</b> [' . $point->getLocation()->getLat() . ',' . $point->getLocation()->getLng() . ']';
                if ($point->getAddress()) echo ' - ' . $point->getAddress();
                // $point->getSpeed ... , see lib/Model/Datapoint.php
                echo "<br>";
            }
        }
    } catch (Exception $e) {
        echo 'Failed to get points for device '. $device->getName(), $e->getMessage(), PHP_EOL;
    }
}


?>