<?php
$kadi=$_POST["kadi"];
$sifre=$_POST["sifre"];
if ($kadi=="erkan"&&$sifre=="12345")
{
  echo "<script>alert('Erkan Bey Sisteme Girdiniz !')</script>";
}
else {
  die( "Kullanıcı adınızı veya şifrenizi yanlış girdiniz !");
}
 ?>
