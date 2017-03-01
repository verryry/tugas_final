<?php 

function tampilkan(){


	$query = "SELECT * FROM artikel";

	return result($query);
}

function tampilkan_per_id(){

	$id = $_GET['id'];
	$query = "SELECT * FROM artikel WHERE id = $id";

	return result($query);
}

function tampilkan_komentar_id(){
	$id = $_GET['id'];
	$query = "SELECT*FROM komentar WHERE id_artikel='$id'";

	return result($query);
}
//ini tambahan untuk search
function hasil_cari($cari) {
	$query = "SELECT * FROM artikel WHERE judul LIKE '%$cari%'";
	return result($query);
}
function result($query) {
	global $db;
	if ($result = mysqli_query($db,$query) or die ('gagal nampilin data')) {
		return $result;
	}
}
//akhir nya

function tambah_data($judul, $isi, $tag){
	$query = "INSERT INTO artikel (judul,isi,tag) VALUES ('$judul','$isi','$tag')";

	return run($query);
}

function edit_data($judul, $isi, $tag, $id){
	$query = "UPDATE artikel SET judul='$judul', isi='$isi', tag='$tag' WHERE id = $id";

	return run($query);
}

function run($query){
	global $db;

	if (mysqli_query($db, $query)){
		return true;
	}else{
		return false;
	}
}

function excerpt($string){
	$string = substr($string, 0, 500);
	return $string . "...";
}

function tambah_komentar($id_artikel,$komentator,$komentar){
	$query = "INSERT INTO comment (id_artikel,komentator,komentar) VALUES ('$id_artikel','$komentator','$komentar')";

	return run($query);
}
?>
