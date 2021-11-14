<?php
include 'includes/header.php';
$recipe_id = $_GET['id'];

$read_query = "SELECT * FROM `recipe` WHERE `recipe_id` =". $recipe_id;

$result = mysqli_query($conn, $read_query);
if ($result) {
  $row = mysqli_fetch_assoc($result);
  var_dump($row);
}
?>
<form action="" method="post">
  <p>Update unit name!</p>
  <input type="text" name="recipe_name" value="<?=$row['recipe_names']?>" > <br>
  <input type="text" name="recipe_descr" value="<?=$row['recipe_descr']?>" > <br>
  <input type="number" name="prep_time" value="<?=$row['prep_time']?>" > <br>
  <input type="hidden" name="recipe_id" value="<?=$row['recipe_id']?>">
  <input type="submit" name="submit" value="save">
</form>

<?php
if (!empty($_POST) ) {
  $recipe_name = $_POST['recipe_name'];
  $recipe_descr = $_POST['recipe_descr'];
  $prep_time = $_POST['prep_time'];
  $recipe_id = $_POST['recipe_id'];

  $update_query  = "UPDATE `repcipe` SET `recipe_name`='". $recipe_name"' WHERE `recipe_id`=".$recipe_id;

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
