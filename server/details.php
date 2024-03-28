<?php
require_once 'db.php';
extract($_GET);
$sql = "SELECT * FROM `gepek` WHERE gepek.id='{$id}' ";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>