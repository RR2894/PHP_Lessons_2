<?php
include 'phpDir/src/Booksite-refactored/db.php';

$action = isset($_POST['submit']) ? 'Add' : (isset($_POST['update']) ? 'Update' : (isset($_POST['delete']) && isset($_POST['id']) && is_numeric($_POST['id']) ? 'Delete' : 'Invalid'));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = array_map('trim', $_POST);

    if ($action == 'Add') {
        $fields = ['title', 'author', 'publishing_year', 'genre', 'description'];
        $stmt = (!array_diff($fields, array_keys($data))) ?
            ($conn->prepare("INSERT INTO books(title, author, publishing_year, genre, description) VALUES (?, ?, ?, ?, ?)")) : null;
        isset($stmt) && $stmt->bind_param("ssiss", ...array_values($data));
    } elseif ($action == 'Update') {
        $fields = ['id', 'title', 'description', 'author', 'publishing_year', 'genre'];
        $stmt = (!array_diff($fields, array_keys($data)) && is_numeric($data['id'])) ?
            ($conn->prepare("UPDATE books SET title = ?, description = ?, author = ?, publishing_year = ?, genre = ? WHERE id = ?")) : null;
        isset($stmt) && $stmt->bind_param("sssisi", $data['title'], $data['description'], $data['author'], $data['publishing_year'], $data['genre'], $data['id']);
    } elseif ($action == 'Delete') {
        $stmt = (isset($_POST['id']) && is_numeric($_POST['id'])) ?
            ($conn->prepare("DELETE FROM books WHERE id = ?")) : null;
        isset($stmt) && $stmt->bind_param("i", $_POST['id']);
    }

    if (isset($stmt) && $stmt->execute()) {
        echo "Book $action successful!";
    } elseif (isset($stmt)) {
        echo "Error $action book: " . $stmt->error;
    }
}

$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Management</title>
    <style>
        body {
            margin-left: 20px;
            padding: 10px;
            background-color: lavender;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h2><?php echo ($action == 'Update') ? 'Edit Book Information' : 'Add New Book'; ?></h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <?php echo ($action == 'Update') ? "<input type='hidden' name='id' value='{$_POST['id']}'>" : ""; ?>
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="<?php echo $_POST['title'] ?? ''; ?>"><br>
        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" value="<?php echo $_POST['author'] ?? ''; ?>"><br>
        <label for="publishing_year">Publishing Year:</label><br>
        <input type="text" id="publishing_year" name="publishing_year" value="<?php echo $_POST['publishing_year'] ?? ''; ?>"><br>
        <label for="genre">Genre:</label><br>
        <input type="text" id="genre" name="genre" value="<?php echo $_POST['genre'] ?? ''; ?>"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"><?php echo $_POST['description'] ?? ''; ?></textarea><br><br>
        <input type="submit" name="<?php echo strtolower($action); ?>" value="<?php echo $action; ?> Book">
    </form>