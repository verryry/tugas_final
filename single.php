<?php
session_start();
	require_once 'core/init.php';
	require_once 'display/header.php';

		$id = $_GET['id'];
	if (isset($_GET['id'])) {
		$data = tampilkan_per_id($id);
	while ($row = mysqli_fetch_assoc($data)){
		$id_awal = $row['id'];
		$judul_awal = $row['judul'];
		$isi_awal = $row['isi'];
		$tag_awal = $row['tag'];
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="display/aksesoris/icon/nougat.ico">
		<link rel="stylesheet" href="display/css/single.css">
		<title>Artikel</title>
		<style>

</style>
</head>
<body>
<div class="utama">
<div class="panel_single">
	<div class="judul_panel_single">
		<h4 id="judul_single"><?= $judul_awal;?></h4>
	</div>
	<article class="isi_panel_single">
		<p id="isi_single"><?= $isi_awal;?></p>
		<p id="tag_single">Tag : <a id="tag"> #<?= $tag_awal;?></a></p>
	</article>
</div>

<form method="POST" action="postkomentar.php">
  <input type="hidden" name="id_artikel" value="<?=$id_awal;?>">
  <input type="hidden" name="komentator" value="<?=$_SESSION['username'];?>">

  <div>

      <label class="label_komentar">Komentar : </label> <br />
    <textarea name="komentar" class="textarea_komen" cols="169" rows="8" required /></textarea>
    <button name="submit" type="submit" class="button" class="post_komen">Post</button>
  </div>

</form>
	<br /><br />

<?php
include 'komentar.php';
?>

</div>
<br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>

<div>
<?php require_once 'display/footer.php';?>
</div>
</body>
</html>
