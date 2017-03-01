<?php
require_once 'core/init.php';
require_once 'tampilan/header.php';

$id = $_GET['id'];

if (isset($_GET['id'])) {
	$data = tampilkan_per_id($id);

	while ($row = mysqli_fetch_assoc($data)){
		$judul_awal = $row['judul'];
		$isi_awal = $row['isi'];
		$tag_awal = $row['tag'];
	}
}


if (isset($_POST['submit'])) {
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$tag = $_POST['tag'];
}

if (!empty(trim($judul)) && !empty(trim($isi))) {
	if (edit_data($judul,$isi,$tag,$id)) {
		header('Location: home.php');
	}else{
		echo "<script>alert('Terdapat masalah');</script>";
	}
}else{
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="tampilan/aksesoris/icon/unnamed.ico">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
		height: 35px;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
textarea {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}
	.tag {
		height: 40px;
	}
</style>
<title>Edit Data</title>
</head>
<body>
	<div class="container-fluid">
<form action="" method="post">
	<label for="judul">Title</label>
	<input type="text" class="validasi-kosong" name="judul" value="<?= $judul_awal; ?>"><br><br>

	<label for="isi">Article</label><br>
	<textarea name="isi" class="validasi-kosong" rows="8" cols="40"> <?= $isi_awal; ?> </textarea><br><br>

	<label for="tag">Tag</label>
	<input type="text" name="tag" value="<?= $tag_awal; ?>"><br><br>

	<button type="submit" class="valbut btn btn-info" name="submit" disabled="disabled">Confirm</button>
	<a href="index.php"><button type="button" class="btn btn-warning">Back</button></a>
</form>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
//validasi jika inputan kosong button akan disabled
$(document).ready(function() {
    $('.validasi-kosong').keyup(function() {
        var empty = false;
        $('.validasi-kosong').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.valbut[type="submit"]').attr('disabled', 'disabled');
        } else {
            $('.valbut[type="submit"]').removeAttr('disabled');
        }
    });
});
</script>
</html>
<?php require_once 'tampilan/footer.php';?>
