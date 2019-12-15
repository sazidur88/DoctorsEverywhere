<link rel="stylesheet" type="text/css" href="index.css">
<?php
include_once 'conn.php';
if(isset($post['upload'])){
}
$dphone = mysqli_real_escape_string($conn,$_POST['dphone']);



$temp = 0;
echo "<h1>Searching For Phone : $dphone<h1>";










$sql = "select * from appoinment where dphone='$dphone';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

echo "<table>";
echo "<tr>";
echo "<th>" . "
date" ."</th>"."<th>" . "time" ."</th>" . "<th>" . "area" ."</th>";
echo "<th>" . "serial "."</th>"."<th>"."dphone" ;

echo "<tr>";
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['date'] . " </td>";
    echo "<td>" .$row['time'] . " </td>";
    echo "<td>" .$row['area'] . " </td>";
    echo "<td>" .$row['serial'] . " </td>";
    echo "<td>" .$row['dphone'] . " </td>";
    echo "</tr>";
  }
  echo "</table>";
}


?>


