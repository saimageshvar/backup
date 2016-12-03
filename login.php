<?php
	session_start();
	$emailId = sanitizeParams($_POST['email']);
	$password = sanitizeParams($_POST['password']);
	
	$url = 'http://52.39.93.59:8080/web/api/login';
	$params =  json_encode(array(
	"emailId" => $emailId, 
	"password" => $password
	));
	$ch = curl_init( $url );
	curl_setopt( $ch, CURLOPT_POST, 1);
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $params);
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt( $ch, CURLOPT_HEADER, 0);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
	
	$response = curl_exec( $ch );
	if (curl_getinfo($ch, CURLINFO_HTTP_CODE) == 200)
	{
		$_SESSION['user'] = json_decode($response, true);
		$_SESSION['login'] = "success";
		
	}
	else
	{
		$_SESSION['login'] = "failure";
	}
	
	
	
	print_r($_SESSION['user']);
	
	header("Location: index.php");
	
	function sanitizeParams($param)
	{
		$param = strip_tags(trim($param));
		if (isset($param) && empty($param) != 1)
		{
			return $param;	
		}
		else
		{
			$_SESSION['login'] = "failure";
			header("Location: index.php");
		}
	}
	
	
	
?>