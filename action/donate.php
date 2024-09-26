<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require __DIR__ . '/phpmailer/src/Exception.php';
require __DIR__ . '/phpmailer/src/PHPMailer.php';
require __DIR__ . '/phpmailer/src/SMTP.php';



// initialize a client url which we will use to send the reference to the paystack server for verification
$curl = curl_init();
// set options for the curl session insluding the url, headers, timeout, etc
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/{$_GET['reference']}",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_test_b185f885fd9f2d0e2cf8f9f2bfe16dafbd472556", // replace with your private key on paystack  
        "Cache-Control: no-cache",
    ),
));

// get the response and store
$response = curl_exec($curl);
// if there are any errors
$err = curl_error($curl);
// close the session
curl_close($curl);

// convert the response to PHP object
$decodedResponse = json_decode($response);

$reference = $_GET['reference'];
// convert the response to PHP object
if (isset($decodedResponse->data->status) && $decodedResponse->data->status === 'success') {
    $response = array('success' => true, 'message' => 'Thank you so much for your generous donation');
    
}else{
    $response = array('success' => false, 'message' => 'Payment failed');
}

echo json_encode($response);
?>
