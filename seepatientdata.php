<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';
$sql = "select * from patient;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
echo "<table>";
echo "<tr>";
echo "<th>" . "PATIENT ID" ."</th>"."<th>" . "PATIENT NAME" ."</th>" . "<th>" . "PATIENT AGE" ."</th>";
echo "<th>" . "PATIENT SEX" ."<th>" . "PATIENT PHONE" ."</th>" . "<th>" . "PATIENT ADDRESS" ."</th>";
echo "<tr>";
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['pid'] . " </td>";
    echo "<td>" .$row['pname'] . " </td>";
    echo "<td>" .$row['page'] . " </td>";
    echo "<td>" .$row['psex'] . " </td>";
    echo "<td>" .$row['pphone'] . " </td>";
    echo "<td>" .$row['paddress'] . " </td>";
    echo "</tr>";
  }
  echo "</table>";
}
?>

        