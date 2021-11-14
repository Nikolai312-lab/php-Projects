<?php
include 'includes/header.php';
//1
$read_query = "SELECT * FROM `repcipe` WHERE 1";

$result = mysqli_query($conn, $read_query);


if (mysqli_num_rows($result) > 0) {
  ?>
  <table border="1" style="margin-left: 50px">
    <tr>
      <td>#</td>
      <td>Name</td>
      <td>Description</td>
      <td>prep time</td>
      <td>Date added</td>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?= $row['recipe_id']?></td>
        <td><?= $row['recipe_name']?></td>
        <td><?= $row['recipe_descr']?></td>
        <td><?= $row['prep_time']?></td>
        <td><?= $row['date_added']?></td>
      </tr>
      <?php
    }
    ?>
  </table>
    <a href="recipeCreate.php" style="color: black;"><button>Create</button></a>
  <?php
}else {
  die('Query failed!'. mysqli_error($conn));
}
?>
<?php
include 'includes/footer.php'
?>
