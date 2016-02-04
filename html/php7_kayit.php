<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
  <title>Document</title>
</head>
<body>
<?php
$isim=$_POST["adsoy"];
$bolum=$_POST["bolum"];
$sifre=$_POST["sifre"];
$dosya=$_POST["dosya"];
$tarih=date("d-m-Y | H:i:s");
?>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <table class="table table-hover">
        <tr><th>Ad Soyad</th>
        <th>Bölüm</th>
        <th>Şifre</th>
        <th>Resim Yolu</th>
        <th>Kayıt Tarihi</th>
      </tr>
      <tr>
        <?php
        echo "
        <td>$isim</td>
        <td>$bolum</td>
        <td>$sifre</td>
        <td>$dosya</td>
        <td>$tarih</td>
        ";
        ?>
      </tr>
      </table>
    </div>
  </div>
</div>

  <script src="bootstrap/js/jquery.min-js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
