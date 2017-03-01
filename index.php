<?php
session_start();
require_once 'core/init.php';
require_once 'tampilan/header_index.php';

$artikel = tampilkan();
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $artikel = hasil_cari($cari);
}
?>
<form action="" method="get" id="form_search">
  <input type="submit" id="btn_search" value="Search">
  <input class="kolom_cari" type="search" name="cari" placeholder="Search here...">
</form>
<?php
while ($row = mysqli_fetch_assoc($artikel)):?>
<!DOCTYPE html>
<html>
<head>
  <title>Artikel</title>
  <link rel="stylesheet" href="tampilan/style.css">
<style>
#form_search {
  margin-left: 5px;
}
#btn_search {
  background-color: #8BC34A;
  height: 38px;
  width: 68px;
  border-radius: 7px;
  margin-left: 17px;
  margin-right: 7px;
  color: white;
}
#btn_search:hover {
  background-color: #4CAF50;
}
  .color {
    color: green;
  }
  .color:hover {
    color: red;
  }
.utama {
  margin: 27px;
}
.tom_deldit {
  margin-right: 12px;
}
#read_more {
  color: green;
}
#read_more:hover {
  color: red;
}
#link_judul {
  color: white;
}
.material-icons {
  font-size: 30px;
}
.custom_padding {
  padding-left: 7px;
  padding-top: 7px;
  border: 1px solid grey;
}
.kolom_cari {
  margin-top: 6px;
  height: 37px;
}
input[type=search] {
  width: 160px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 13px;
  background-color: white;
  padding: 12px 20px 12px 23px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}
input[type=search]:focus {
    width: 30%;
}
#kolom_link_judul {
  background-color:#337ab7;
  padding-left: 12px;
  padding-bottom: 5px;
  border: 1px solid grey;
}
.each_artikel {
  border: 1px solid black;
  background-color: #337ab7;
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
}
.judul {
  background-color: #337ab7;
  height: 40px;
  color: white;
  height: 50px;
}
#judul {
  padding-left: 8px;
  padding-top: 13px;
}
#tag {
  float: right;
  color: white;
  font-size: 15px;
  padding-right: 14px;
}
#div_date {
  padding-left: 8px;
  padding-top: 3px;
  border: 1px solid grey;
  height: 35px;
}
#div_read_more {
  padding-top: 3px;
  padding-left: 8px;
  border: 1px solid grey;
}
#div_kanan {
  float: right;
}
</style>
</head>
<body>
  <div class="utama">
  <div class="judul">
      <h3 id="judul"><a id="link_judul"><?= $row['judul'];?></a>
                     <a id="tag"> #<?= $row['tag'];?></a>
      </h3>
  </div>
  <div id="div_read_more">
        <p><?= excerpt($row['isi']);?></p>
        <p><a id="read_more" href="readmore_index.php?id=<?= $row['id'];?>">Read More</a></p>
  </div>
  <div id="div_date">
          <?= $row['tanggal'];?>
         <!-- Tag : <?= $row['tag'];?> -->
         <div id="div_kanan">
               <!-- <a class="tom_deldit" href="edit.php?id=<?= $row['id'];?>"> <i class="material-icons">mode_edit</i></a>
               <a class="tom_deldit" id="tomdel" href="delete.php?id=<?= $row['id'];?>" onclick="return confirm('Yakin mau hapus?')"> <i class="material-icons">delete_forever</i></a> -->
    </div>
  </div>
</div>
 </body>
<?php endwhile;?>
<?php
require_once 'tampilan/footer.php';
?>
</html>
