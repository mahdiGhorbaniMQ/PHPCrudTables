<?php
$dbName = $_REQUEST["dbName"];


$con = mysqli_connect("localhost", "root", "", $dbName);
if (mysqli_connect_errno()) {
    exit;
}