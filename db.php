<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    echo "Błąd połączenia";
}

$conn->query("CREATE TABLE IF NOT EXISTS dane (id INT AUTO_INCREMENT PRIMARY KEY, info VARCHAR(255))");

if (isset($_POST['submit'])) {
    $text = $_POST['entry'];
    $sql = "INSERT INTO dane (info) VALUES ('$text')";
    $conn->query($sql);
}

$res = $conn->query("SELECT * FROM dane ORDER BY id DESC");
while ($row = $res->fetch_assoc()) {
    echo "<div>#" . $row['id'] . " - " . $row['info'] . "</div>";
}

$conn->close();
?>
