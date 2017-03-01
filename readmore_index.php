<?php
require_once 'core/init.php';
require_once 'tampilan/header_index.php';

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
<link rel="shortcut icon" href="tampilan/aksesoris/icon/unnamed.ico">
<title>Artikel</title>
<style>
	.panel_single {
		color: white;
		padding: 12px;
		min-width: 90px;
		min-height: 90px;

	}
	.judul_panel_single {
		background-color: #337ab7;
		height: 45px;
		padding-left: 8px;
		padding-top: 3px;
		border-radius: 3px;
		min-width: 100px;
	}
	.comment{
		color: black;
		padding: 12px;
		min-width: 90px;
		min-height: 90px;
		margin-left: 7px;
	}
	#koementar{
		color: black;
	}
	.isi_panel_single {
		background-color: white;
		color: black;
		border: 0.5px solid #337ab7;
		padding-left: 8px;
		padding-top: 7px;
		border-radius: 4px;
	}
	#tag {
		color: blue;
		padding-left: 3px;
	}
	#tag_single {
		padding-left: 7px;
	}
	#judul_single {
		font-size: 20px;
		color: white;
		padding-left: 7px;
	}
	#isi_single {
		color: black;
		padding-left: 7px;
	}
</style>
<div class="container-fluid">
<div class="panel_single">
	<div class="judul_panel_single">
		<h4 id="judul_single"><?= $judul_awal;?></h4>
	</div>
	<div class="isi_panel_single">
		<p id="isi_single"><?= $isi_awal;?></p>
		<p id="tag_single">Tag : <a id="tag"> #<?= $tag_awal;?></a></p>
</div>
</div>
</div>
<div class="comment">
	<form action="postcomment.php" method="POST">
	<h4 id="comment">Comment</h4>
		<input type="hidden" name="id_artikel" value="<?=$id_awal;?>">
		<input type="hidden" name="komentator" value="<?=$_SESSION['username'];?>">
		<textarea name="komentar" class="komentar" rows="8" cols="210"></textarea>
		<input type="submit" name="submit" value="Submit" style="color: black;">
	</form>
</div>

<?php include 'komentar.php';?>

<div>
<?php require_once 'tampilan/footer.php';?>
</div>
