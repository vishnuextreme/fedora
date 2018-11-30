<?php

$method = $_SERVER['REQUEST_METHOD'];
If($method=="POST")
{
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);
	$text = $json->result->parameters->text;
	switch($text)
	{
		case 'hi':
		$speech = "Hi,Nice to Meet you";
		break;
		default:
		$speech = "Oops";
		break;
	}
	
	
	$response = new \stdClass();
	$response->speech = "";
	$response->displayText = "";
	$response->source = "webhook";
	echo json_encode($response);
} else
{
	echo "Method not allowed"
}

?>
