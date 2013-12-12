<?php
    // initialize
    include_once('../../common/init.php');

    if(!isset($_SESSION['s_id'])) {
        header("Location: $BASE_URL"."pages/auth/login.php");
        die();
    }
	
	/*$service = Zend_Gdata_Calendar::AUTH_SERVICE_NAME;
	// Parameters for ClientAuth authentication
	$user = "antoniogrcs@gmail.com";
	$pass = "desportivismos";
 
	// Create an authenticated HTTP client
	$client = Zend_Gdata_ClientLogin::getHttpClient($user, $pass, $service);
 
	// Create an instance of the Calendar service
	$service = new Zend_Gdata_Calendar($client);
	
	// Create a new entry using the calendar service's magic factory method
	$event= $service->newEventEntry();
	 
	// Populate the event with the desired information
	// Note that each attribute is crated as an instance of a matching class
	$event->title = $service->newTitle("My Event");
	$event->where = array($service->newWhere("Mountain View, California"));
	$event->content =
		$service->newContent(" This is my awesome event. RSVP required.");
	 
	// Set the date using RFC 3339 format.
	$startDate = "2014-01-20";
	$startTime = "14:00";
	$endDate = "2014-01-20";
	$endTime = "16:00";
	$tzOffset = "-08";
	 
	$when = $service->newWhen();
	$when->startTime = "{$startDate}T{$startTime}:00.000{$tzOffset}:00";
	$when->endTime = "{$endDate}T{$endTime}:00.000{$tzOffset}:00";
	$event->when = array($when);
	 
	// Upload the event to the calendar server
	// A copy of the event as it is recorded on the server is returned
	$newEvent = $service->insertEvent($event);*/

    // display smarty template
    $smarty->display('calendar.tpl');
?>
