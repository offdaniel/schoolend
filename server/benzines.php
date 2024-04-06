<?php
require_once 'db.php';
$sql = "SELECT * FROM `gepek` WHERE(gepek.kategoria = 3);";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>