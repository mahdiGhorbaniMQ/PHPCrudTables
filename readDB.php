<?php
$con = mysqli_connect("localhost", "root", "", "ajaxdb");
if (mysqli_connect_errno()) {
    exit;
}

$result = mysqli_query($con,"SELECT * FROM persons");
$outp='{"records":[';
while($row = mysqli_fetch_array($result)){
    if($outp!=='{"records":['){$outp .=',';}
    $outp .= '{"PID":"'.$row['PID'].'",';
    $outp .= '"FirstName":"'.$row['FirstName'].'",';
    $outp .= '"lastName":"'.$row['LastName'].'",';
    $outp .= '"Age":"'.$row['Age'].'"}';
}
$outp .=']}';
echo $outp;

mysqli_close($con);
?>




