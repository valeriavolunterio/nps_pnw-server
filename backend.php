<?php
// URL of your JSON file hosted on a server
$jsonFileUrl = './assets/users.json';

// Read JSON file content
$jsonData = file_get_contents($jsonFileUrl);

// // If you need to decode JSON data
// // $decodedData = json_decode($jsonData, true);

// // Example data to send to Express API
// $dataToSend = array(
//     'key1' => 'value1',
//     'key2' => 'value2'
// );

// // Convert data to JSON format
// $jsonDataToSend = json_encode($dataToSend);

// URL of your Express API endpoint
$apiUrl = './app.js';

// Initialize cURL session
$ch = curl_init($apiUrl);

// Set the request method to POST
curl_setopt($ch, CURLOPT_POST, 1);

// Set the request payload
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataToSend);

// Set the Content-Type header to JSON
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

// Return the response instead of outputting it directly
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($ch);

// Check for errors
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Handle API response
// echo $response;
?>
