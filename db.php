<?php
$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) { die("Błąd bazy"); }
$conn->query("CREATE TABLE IF NOT EXISTS wpisy (id INT AUTO_INCREMENT PRIMARY KEY, tresc TEXT)");
if (isset($_POST['submit'])) {
    $txt = $_POST['entry'];
    $stmt = $conn->prepare("INSERT INTO wpisy (tresc) VALUES (?)");
    $stmt->bind_param("s", $txt);
    $stmt->execute();
}
$res = $conn->query("SELECT * FROM wpisy ORDER BY id DESC");
while ($row = $res->fetch_assoc()) {
    echo "<div style='padding:10px; border-bottom:1px solid #eee;'>#".$row['id']." - ".$row['tresc']."</div>";
}
$conn->close();
?>
