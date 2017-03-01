<?php
include 'fungsi/db.php';
$id = $_GET['id'];
$sql = "DELETE FROM artikel WHERE id = '$id'";
$query = mysqli_query($db,$sql);
if ($query) {
  header('location:home.php');
}else{
  echo "gagal";
}

 ?>
