<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Bootstrap Form</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <h2>Basic Form</h2>
        <form action="php7_kayit.php" method="post">
        <div class="form-group">
          <label for="adsoy">Adınız, Soyadınız: </label>
          <input type="text" class="form-control" id="adsoy" name="adsoy"/>
        </div>
        <div class="form-group">
          <label for="bolum">Bölümünüz: </label>
          <input type="text" class="form-control" id="bolum" name="bolum"/>
        </div>
        <div class="form-group">
          <label for="sifre">Şifrenizi Giriniz: </label>
          <input type="password" class="form-control" id="sifre" name="sifre"/>
        </div>
        <div class="form-group">
          <label for="dosya">Resminizi Yükleyin: </label>
          <input type="file"  id="dosya" name="dosya"/>
        </div>
        <div class="form-group">
          <input class="btn btn-default" type="submit" value="Gönder">
        </div>
        </form>
    </div>
  </div>
</div>
  <script src="bootstrap/js/jquery.min-js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
