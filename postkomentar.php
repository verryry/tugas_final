<?php
session_start();
require_once 'fungsi/db.php';
require_once 'fungsi/blog.php';


	if (isset($_POST['submit'])) {
		$id_artikel = $_POST['id_artikel'];
		$komentator = $_POST['komentator'];
		$komentar = $_POST['komentar'];

		$sql = "INSERT INTO komentar (id_artikel,komentator,komentar) VALUES ('$id_artikel','$komentator','$komentar')";
		$table_insert = $db->prepare($sql);
		$r = $table_insert->execute();
	   if ($r) {
	     header('location: readmore.php?id='.$id_artikel);
	   }else {
	      echo "gagal";
	   }
	}
?>
