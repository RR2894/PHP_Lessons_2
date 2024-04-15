<?php include 'db.php';

if(isset($_POST['submit'])) {
    // echo "Data received";
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    echo $user . " " . $pass;
}

// validate form
if ($user && $pass) {
    echo $user . " " . $pass;
} else {
    echo 'Username and password fields cannot be blank';
}

$host = 'db';

// database user name

$dbname = 'loginapp';
$dbuser = 'root';
$dbpass = 'lionPass';

// Check mysql connection status

$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully";
}

// Create records inside database

$query = "INSERT INTO users(username, password)";
$query .= "VALUES('$user', '$pass')";
$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

if(!$result) {
    die('Reading db records failed');
}

while($row = mysqli_fetch_assoc($result)) {
    print_r($row);
}
?>
    <pre>
    <?php
    print_r($row);        
?>



<form action="login.php" method="post"> 
    <label for="username">Username</label>
    <input type="text" name="username">
        <label for="password">Password</label>
    <input type="password" name="password">
    <input type="submit" name="submit" value="Submit">
</form>