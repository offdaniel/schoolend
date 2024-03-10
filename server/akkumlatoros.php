<?php
require_once 'db.php';
$sql = "SELECT gepek.id, gepek.nev, gepek.kategoria, gepek.kaukcio, gepek.berles, gepek.leiras, gepek.kep FROM `gepek` WHERE(gepek.kategoria = 2);";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());

?>