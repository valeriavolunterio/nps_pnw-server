<?php
// URL of your JSON file hosted on a server
$jsonFileUrl = '../api/data.json';

// Read JSON file content
$jsonData = file_get_contents($jsonFileUrl);

// URL of your Express API endpoint
$apiUrl = 'http://127.0.0.1:3000/api/data';

// Initialize cURL session
$ch = curl_init($apiUrl);

// Set the request method to POST
curl_setopt($ch, CURLOPT_POST, 1);

// Set the request payload to the JSON data read from the file
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

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
echo $response;
?>
