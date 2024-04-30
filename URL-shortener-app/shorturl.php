<?php include 'DBConnect.php';
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// URL to the Unelma.IO API
$url = 'https://unelma.io/api/v1/link';
// Access token for the Unelma.IO API
$accessToken = '23|kMZ06RnzWdzrztLFn8SgGgRnFHUNEfXT61XCQKPe4dbf15ad';

// Collect the long URL from the form input
$longUrl = $_POST['longUrl'];

// Prepare the data to be sent in the POST request
$data = [
"type" => "direct",
"password" => null,
"active" => true,
"expires_at" => "2024-05-06",
"activates_at" => "2024-03-25",
"utm" => "utm_source=google&utm_medium=banner",
"domain_id" => null,
"long_url" => $longUrl
];

// Initialize cURL session
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
'accept: application/json',
'Content-Type: application/json',
'Authorization: Bearer ' . $accessToken,
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Execute the POST request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
  echo 'Error:' . curl_error($ch);
  } else {
  // Decode the response
  $responseDecoded = json_decode($response, true);
  // Check if the 'link' key and 'short_url' subkey exist before trying to access it
  if (isset($responseDecoded['link']) && isset($responseDecoded['link']['short_url'])) {
  // Output the shortened URL
  echo 'Shortened URL: <a href="' . $responseDecoded['link']['short_url'] . '">' . $responseDecoded['link']['short_url'] . '</a>';
  } else {
  // Handle the case where 'short_url' key doesn't exist
  echo 'The key "short_url" does not exist in the response.';
  }
  }

// Close cURL session
curl_close($ch);

// If there was an error, display it
/* if (isset($error_msg)) {
  echo "Error: " . $error_msg;
  } else {
  // Decode the response
  $responseDecoded = json_decode($response, true);
  // Convert the PHP array back into a JSON string
  $jsonResponse = json_encode($responseDecoded, JSON_PRETTY_PRINT);
  // Display the JSON string
  echo "<pre>" . $jsonResponse . "</pre>";
  }
  */
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>URL Shortener</title>
</head>

<body>
  <form method="post">
    <label for="longUrl">Enter URL to shorten:</label>
    <input type="text" id="longUrl" name="longUrl" required>
    <button type="submit">Shorten URL</button>
  </form>
</body>

</html>