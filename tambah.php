<?php
require_once 'core/init.php';
require_once 'tampilan/header.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta charset="UTF-8">
<title>Create Data</title>

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

.butsub {
    width: 7%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    height: 40px;
    font-size: 13px;
}

.butsub:hover {
    background-color: #45a049;
}
.butback {
  width: 7%;
  background-color: #FFB300;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  height: 40px;
  font-size: 13px;

}
.butback:hover {
  background-color: #FFA000;
  color: white;
}
textarea {
	width: 100%;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}
	.tag {
		height: 40px;

	}
  .utama {
    margin: 20px;
  }
  .capitalize {
    text-transform: capitalize;
  }
</style>
</head>
<body>

<div class="utama">
<form action="save.php" method="POST" class="form-group" enctype="multipart/form-data">
	<label for="judul">Title</label>
	<input class="validasi-kosong" type="text" name="judul" required autofocus><br><br>

	<label for="isi">Article</label><br>
	<textarea class="validasi-kosong" name="isi" rows="8" required></textarea><br><br>

	<label for="tag">Tag</label>
	<input type="text" id="tag" name="tag"><br>

  <label>Cover</label>
  <input type="file" name="file" accept="image/*" >

  <br /><br />
	<button type="submit" name="submit" class="valbut butsub btn" disabled="disabled" />Submit</button>
	<a href="index.php"><button type="button" class="btn butback">Back</button></a>

</form>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
//membuat huruf pertama jd besar
$(document).ready(function() {
    $('input').on('keyup', function() {
        if (this.value[0] != this.value[0].toUpperCase()) {
            // store current positions in variables
            var start = this.selectionStart;
            var end = this.selectionEnd;
            this.value = this.value[0].toUpperCase() + this.value.substring(1);
            // restore from variables...
            this.setSelectionRange(start, end);
        }
    });
});
$(document).ready(function() {
    $('textarea').on('keyup', function() {
        if (this.value[0] != this.value[0].toUpperCase()) {
            // store current positions in variables
            var start = this.selectionStart;
            var end = this.selectionEnd;
            this.value = this.value[0].toUpperCase() + this.value.substring(1);
            // restore from variables...
            this.setSelectionRange(start, end);
        }
    });
});
//akhirnya
//meniadakan spasi pada tag
$(function() {
    $('#tag').on('keypress', function(e) {
        if (e.which == 32)
            return false;
    });
});
//akhirnya
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

</body>
<?php
	require_once 'tampilan/footer.php';
?>
</html>
