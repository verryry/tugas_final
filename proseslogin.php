<?php
  session_start();
  require_once("fungsi/db.php");
  $username = $_POST['username'];
  $pass = $_POST['password'];
  $sql = "SELECT*FROM login WHERE username = '$username'";
  $query = $db->query($sql);
  $hasil = $query->fetch_assoc();
  if ($query->num_rows == 0) {
    echo "<div align='center'>Username belum terdaftar! <a href='login.php'>Back</a></div>";
  }else {
    if ($pass <> $hasil['password']) {
      echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
    }else {
      $_SESSION['username'] = $hasil['username'];
      header('location: home.php');
    }
  }
?>