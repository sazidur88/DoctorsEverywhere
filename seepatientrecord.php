
<link rel="stylesheet" type="text/css" href="index.css">
<!DOCTYPE html>
<?php
include_once 'conn.php';
$sql = "select * from patientpastrecord;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
echo "<table>";
echo "<tr>";
echo "<th>" . "ID" ."</th>"."<th>" . "DISEASE" ."</th>" . "<th>" . "PREVIOUS DOCTOR" ."</th>";
echo "<th>" . "PREVIOUS MEDICINE";

echo "<tr>";
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['pid'] . " </td>";
    echo "<td>" .$row['disease'] . " </td>";
    echo "<td>" .$row['previousdoctor'] . " </td>";
    echo "<td>" .$row['previousmedicine'] . " </td>";
    echo "</tr>";
  }
  echo "</table>";
}
?>

