<?php
$con = new mysqli("localhost","root", "","schoolend");

if (!$con) {
    echo "hibás kapcsolat". mysqli_connect_error();
}
?>