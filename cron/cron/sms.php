<?php
//Code developed by Suryakamesh
//Software Engineer
//+91 8109569492


//SMS api details
require_once "vendor/autoload.php";
$basic  = new \Nexmo\Client\Credentials\Basic('60561860', 'T04ssQK7E5jCRFbS');
$client = new \Nexmo\Client($basic);

//Database Connection
function connect(){
	$host = "localhost";
	$dbuser ="root";
	$dbpass = "";
	$db = "fresh_db";
	$con = mysqli_connect($host,$dbuser,$dbpass,$db);
	return $con;
}

//Get due date
function getDueDate(){
$con = connect();
$query = "SELECT c.id AS tenant_id,CONCAT(c.fname,' ',c.lname) AS tenant_name, b.price AS rent_amount,b.status,c.phone_no, b.created_at AS booking_date, DATE(DATE_ADD(b.created_at, INTERVAL 1 MONTH ) - INTERVAL  3 DAY)   AS due_date 
FROM booking_billings a 
LEFT JOIN bookings b ON a.booking_id=b.id 
LEFT JOIN users c ON b.tenant_id=c.id 
WHERE b.status='active'";
$sql = mysqli_query($con,$query);

		while($row = mysqli_fetch_assoc($sql)){
			$data[]  = $row;
		}
	for ($i=0; $i < sizeof($data); $i++) { 
		echo $message = "Dear ".$data[$i]['tenant_name'].", Please be reminded that your due date for the rental fee is on ".$data[$i]['due_date']." with the amount of ".$data[$i]['rent_amount']." pesos.\n";	


		//sendSMS($mobile,$message) // Commented for testing
	}	

}


//Trigger SMS 
function sendSMS($mobile,$message){
		try {
		    $message = $client->message()->send([
		        'to' => '+639774572206',
		        'from' => 'FROM NEXMO',
		        'text' => $message
		    ]);
		    $response = $message->getResponseData();

		    if($response['messages'][0]['status'] == 0) {
		        echo "The message was sent successfully\n";
		    } else {
		        echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
		    }
		} catch (Exception $e) {
		    echo "The message was not sent. Error: " . $e->getMessage() . "\n";
		}
}


//Calling functions
getDueDate();
?>