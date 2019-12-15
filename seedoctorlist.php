<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';
$sql = "select dname,dsex,dspecialist,dphone,daddress from doctor;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
echo "<table>";
echo "<tr>";
echo "<th>" . "NAME" ."</th>"."<th>" . "SEX" ."</th>" . "<th>" . "SPECIALIST" ."</th>";
echo "<th>" . "DOCTOR PHONE"."</th>"."<th>"."DOCTOR ADDRESS"."</th>" ;

echo "</tr>";
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['dname'] . " </td>";
    echo "<td>" .$row['dsex'] . " </td>";
    echo "<td>" .$row['dspecialist'] . " </td>";
    echo "<td>" .$row['dphone'] . " </td>";
    echo "<td>" .$row['daddress'] . " </td>";
    echo "</tr>";
  }
  echo "</table>";
}
?>