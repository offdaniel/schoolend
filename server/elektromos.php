<?php
require_once 'db.php';
$sql = "SELECT * FROM `gepek` WHERE(gepek.kategoria = 1);";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>