<?php
include 'db.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Books</title>
</head>
<body>
    <h2>List of Books</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Publishing Year</th>
            <th>Genre</th>
            <th>Description</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["title"] . "</td>";
                echo "<td>" . $row["author"] . "</td>";
                echo "<td>" . $row["publishing_year"] . "</td>";
                echo "<td>" . $row["genre"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No books found</td></tr>";
        }
        ?>
    </table>
</body>
</html>