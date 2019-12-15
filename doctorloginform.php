<link rel="stylesheet" type="text/css" href="index.css">
<!DOCTYPE html>
<html lang="en" >
<head>  
</head>

<body>

  <?php
$sql = "select * from mobie;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    $image = $row['email'];
  }
}
?>
          <form action = "doctorlogin.php" method = "post">
          
            REGISTRATION ID:<br>
            <input type="text" name="regid ">
            <br>
          
          <button type="submit" name="submit" class="button button-block"/>SIGN UP</button>
          
          </form>

</body>
</html>
