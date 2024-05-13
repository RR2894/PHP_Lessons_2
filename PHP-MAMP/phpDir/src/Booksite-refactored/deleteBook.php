<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $book_id = $_POST['id'];

        $sql = "DELETE FROM books WHERE id = ?";

        if ($stmt = $conn->prepare($sql)) {

            $stmt->bind_param("i", $book_id);

            if ($stmt->execute()) {
              echo "Book deleted successfully";
            } else {
                echo "Error deleting book: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    } else {
        echo "Invalid book ID: " . $_POST['id'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Book</title>
    <style>
        body {
            margin-left: 20px;
            padding: 10px;
            background-color: lavender;
        }
    </style>
</head>

<body>
    <h2>Delete Book</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="id">Book ID:</label><br>
        <input type="text" id="id" name="id" value=""><br><br>
        <input type="submit" value="Delete Book">
    </form>
</body>