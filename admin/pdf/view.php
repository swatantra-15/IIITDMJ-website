<?php
$dbh = new PDO("mysql:host=localhost;dbname=iiitdmj", "root", "");
$id = isset($_GET['id']) ? $_GET['id'] : "";
$stat = $dbh->prepare("SELECT * FROM news_events WHERE id=?");
$stat->bindParam(1, $id);
$stat->execute();
$row = $stat->fetch();
header('Content-Type:' . $row['type_of']);
echo $row['pdf'];
