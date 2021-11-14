<?php
include 'includes/header.php';
$unit_id = $_GET['id'];

$read_query = "SELECT * FROM units WHERE unit_id =". $unit_id;

$result = mysqli_query($conn, $read_query);
if ($result) {
  $row = mysqli_fetch_assoc($result);
  var_dump($row);
}
?>
<form action="" method="post">
  <p>Update unit name!</p>
  <input type="text" name="unit_name" value="<?=$row['unit_names']?>" > <br>
  <input type="hidden" name="unit_id" value="<?=$row['unit_id']?>">
  <input type="submit" name="submit" value="save">
</form>

<?php
if (!empty($_POST) ) {
  $unit_name = $_POST['unit_name'];
  $unit_id = $_POST['unit_id'];

  $update_query  = "UPDATE `units` SET `unit_names`='". $unit_name ."' WHERE `unit_id` =".$unit_id;
  //var_dump($update_query);
  $update_res = mysqli_query($conn, $update_query);

  if (!$update_res) {
    die('Update failed!' . mysqli_error($conn));
  }else {
    header("Location: index.php
    ");
    echo "Update successfully!";
  }
}
include 'includes/footer.php'
?>
