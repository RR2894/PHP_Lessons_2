<php?

if (isset($_POST['submit'])) {

$user = $_POST['username'];

$pass = $_POST['password'];


// Check if the username and password are not empty

if (!empty($user) && !empty($pass)) {

// Prepare an INSERT statement with placeholders

$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");

// Bind the variables to the prepared statement as strings

$stmt->bind_param("ss", $user, $pass);

// Execute the prepared statement and check the result

if ($stmt->execute()) {

// Redirect to the same page to prevent form resubmission

header("Location: " . $_SERVER["PHP_SELF"]);

exit; // Make sure to stop the script execution after the redirect

} else {

// Handle errors during execution

die('Query insertion failed');

}

// Close the prepared statement

$stmt->close();

} else {

// The username or password is empty

// Display an error message

echo 'Username and password cannot be empty.';

}

}

?>