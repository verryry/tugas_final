<?php

try {
  $koneksi = new PDO("mysql:host=localhost;port=3306;dbname=tugas","root","");

} catch (PDOException $e) {
  echo $e->getMessage();
}

$id = $_GET['id'];

$data = $koneksi->prepare("SELECT*FROM comment WHERE id_artikel='$id'");
$data->execute();
$komen = $data->fetchAll();
?>
<br>

<?php
foreach ($komen as $key) {
?>

<div>
  <div>
      <p>Comentators : <?= $key['komentator'];?></p>
        <hr />
      <p>Comment : <?= $key['komentar'];?></p>
        <br />
  </div>
</div>

<br />
<?php
}
?>
