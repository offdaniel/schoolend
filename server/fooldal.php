<?php
require_once 'db.php';
$sql="SELECT * FROM `gepek`";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>