<?php
$dbName = $_REQUEST["dbName"];
$dbTable = $_REQUEST["dbTable"];

$con = mysqli_connect("localhost", "root", "" , $dbName);
if (mysqli_connect_errno()) {
    exit;
}
$req="CREATE TABLE ".$dbTable;

// Execute query
if (mysqli_query($con,$req)){
    echo true;
}
else {
    echo false;
}
?>