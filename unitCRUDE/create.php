<?php
  include 'includes/header.php'
 ?>
 <form method="post">
   <p>Enter unit name!</p>
   <input type="text" name="unit_name" > <br>
   <input type="submit" name="submit" value="save">
 </form>

 <?php
 //var_dump($_POST['unit_name']);
//1

if( isset($_POST['unit_name'])){
	$unit_name = $_POST['unit_name'];
}
//2 insert_query
$insert_query = "INSERT INTO `units`( `unit_names`) VALUES ('". $unit_name ."')";


//3
$result = mysqli_query($conn, $insert_query);

var_dump($result);
if ($result) {
  echo "Record creatted successfully";
}else {
  die('Query failed!'. mysqli_error($conn));
}
   include 'includes/footer.php'
  ?>
