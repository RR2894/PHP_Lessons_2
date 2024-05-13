<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'], $_POST['title'], $_POST['description'], $_POST['author'], $_POST['publishing_year'], $_POST['genre']) && is_numeric($_POST['id'])) {
        $book_id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $author = $_POST['author'];
        $publishing_year = $_POST['publishing_year'];
        $genre = $_POST['genre'];


        $stmt = $conn->prepare("UPDATE books SET title = ?, description = ?, author = ?, publishing_year = ?, genre = ? WHERE id = ?");


        $stmt->bind_param("sssisi", $title, $description, $author, $publishing_year, $genre, $book_id);


        if ($stmt->execute()) {
            echo "Book updated successfully";
        } else {
            echo "Error updating book: " . $stmt->error;
        }


        $stmt->close();
    } else {
        echo "Invalid or incomplete book details";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
    <style>
        body {
            margin-left: 20px;
            padding: 10px;
            background-color: lavender;
        }
    </style>
</head>

<body>
    <h2>Update Book</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="id">Book ID:</label><br>
        <input type="text" id="id" name="id" value=""><br><br>
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br><br>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author"><br><br>
        <label for="publishing_year">Publishing Year:</label><br>
        <input type="text" id="publishing_year" name="publishing_year"><br><br>
        <label for="genre">Genre:</label><br>
        <input type="text" id="genre" name="genre"><br><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br><br>
        <input type="submit" value="Update Book">
    </form>
</body>

</html>