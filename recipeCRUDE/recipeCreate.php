<?php
include 'includes/header.php'
?>
<form action="" method="post">
  <p>Enter recipe!</p>
  <input type="text" name="recipe_name"  required> <br>
  <p>Enter Description!</p>
  <input type="text" name="recipe_descr" required > <br>
  <p>Enter prep time!</p>
  <input type="number" name="prep_time"  required > <br>
  <p>Add date!</p>
  <input type="date" name="date_added"  required > <br>
  <input type="submit" name="submit" value="save" >
</form>

<?php
//var_dump($_POST['unit_name']);
//1

  if( isset($_POST['recipe_name'])){
    $recipe_name = $_POST['recipe_name'];
  }
  if( isset($_POST['recipe_descr'])){
    $recipe_descr = $_POST['recipe_descr'];
  }
  if( isset($_POST['prep_time'])){
    $prep_time = $_POST['prep_time'];
  }
  if( isset($_POST['date_added'])){
    $date_added = $_POST['date_added'];
  }
if ($recipe_name&&$recipe_descr&&$prep_time) {
  $insert_query = "INSERT INTO `repcipe`(`recipe_name`, `recipe_descr`, `prep_time`, `date_added`) VALUES ('". $recipe_name ."','". $recipe_descr ."','". $prep_time ."', '". $date_added ."')";

  $result = mysqli_query($conn, $insert_query);

  //if ($result) {
  //  echo "Record creatted successfully";

  //}else {
  //  die('Query failed!'. mysqli_error($conn));
  //}
  if ($result) {
    header('Location: recipeTable.php');
  }//else {
  //  die('Cration failed' . mysqli_error($conn));
  //}
}else {
  echo "Provide text in the boxes!";
}
//2 insert_query



//3


//var_dump($result);




include 'includes/footer.php'
?>
