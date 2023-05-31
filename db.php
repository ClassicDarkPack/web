<?php
$con = new mysqli('localhost', 'carsma_dark
', 'pack', 'carmagazine');
$con->query("set names utf8");
if ($con->connect_error) {
    exit($con->connect_error);
}
?>