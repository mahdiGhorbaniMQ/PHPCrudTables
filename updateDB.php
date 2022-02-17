<?php
$dbTableValues = $_REQUEST["dbTableValues"];

$con = mysqli_connect("localhost", "root", "", "ajaxdb");
if (mysqli_connect_errno()) {
    exit;
}

echo mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)".$dbTableValues);

mysqli_close($con);