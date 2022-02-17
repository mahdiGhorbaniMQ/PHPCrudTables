<?php
$mysqli_link = mysqli_connect("localhost", "root", "", "mahdi");

if (mysqli_connect_errno())
{
    printf("MySQL connection failed with the error: %s", mysqli_connect_error());
    exit;
}


$result = mysqli_query($mysqli_link,"SELECT * FROM Persons2");

echo "<table border='1'>
 <tr>
 <th>Firstname</th>
 <th>Lastname</th>
 </tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($mysqli_link);

?>
