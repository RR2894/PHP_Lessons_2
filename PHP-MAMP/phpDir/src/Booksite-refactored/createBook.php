<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['publishing_year'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];

    if (!empty($title) && !empty($author) && !empty($year) && !empty($genre) && !empty($description)) {

        $stmt = $conn->prepare("INSERT INTO books(title, author, publishing_year, genre, description) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $title, $author, $year, $genre, $description);

        if ($stmt->execute()) {

            header("Location: listBook.php");
            exit();
        } else {
            die("Query insertion failed: " . $stmt->error);
        }
        $stmt->close();
    } else {
        echo "Book data cannot be empty.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <style>
        body {
            margin-left: 20px;
            padding: 10px;
            background-color: lavender;
        }
    </style>
</head>
<body>
    <h2>Add New Book</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author"><br>
        <label for="publishing_year">Publishing Year:</label><br>
        <input type="text" id="publishing_year" name="publishing_year"><br>
        <label for="genre">Genre:</label><br>
        <input type="text" id="genre" name="genre"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br><br>
        <input type="submit" name="submit" value="Add Book">
    </form>
</body>
</html>