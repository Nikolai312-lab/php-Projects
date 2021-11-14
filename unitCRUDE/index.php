<?php
include 'includes/header.php';
//1
$read_query = "SELECT * FROM `units` WHERE `date_deleted` is NULL";

$result = mysqli_query($conn, $read_query);


if (mysqli_num_rows($result) > 0) {
  ?>
  <table border="1" style="margin-left: 50px">
    <tr>
      <td>#</td>
      <td>units</td>
      <td>***</td>
      <td>soft delete</td>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?= $row['unit_id']?></td>
        <td><?= $row['unit_names']?></td>
        <td><a href ="update.php?id=<?= $row['unit_id']?>">UPDATE</a></td>
        <td><a href ="soft_delete.php?id=<?= $row['unit_id']?>">SOFT DELETE</a></td>
      </tr>
      <?php
    }
    ?>
  </table>
  <a href="recycle_bin.php" style="color: black;"><input type="submit" name="" value="Recycle"></af>
  <?php
}else {
  die('Query failed!'. mysqli_error($conn));
}
?>
<?php
include 'includes/footer.php'
?>
