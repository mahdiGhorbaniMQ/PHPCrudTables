<?php
$dbName = $_REQUEST["dbName"];

$con = mysqli_connect("localhost", "root", "");
if (mysqli_connect_errno()) {
    exit;
}
$req="CREATE DATABASE ".$dbName;
if (mysqli_query($con,$req)){
    echo true;
}
else {
    echo false;
}