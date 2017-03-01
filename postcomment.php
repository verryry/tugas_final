<?php
session_start();
require_once 'core/init.php';

if (isset($_POST['submit'])) {
	$id_artikel = $_POST['id_artikel'];
	$komentator = $_POST['komentator'];
	$komentar = $_POST['komentar'];

	if (tambah_komentar($id_artikel,$komentator,$komentar)) {
		header('location:readmore.php?id='.$id_artikel);
	}else{
		echo "gagal";
	}
}


?>