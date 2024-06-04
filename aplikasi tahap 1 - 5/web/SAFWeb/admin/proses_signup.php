<?php 
 require_once("database.php");
    $nama = $_POST['username'];
    $mail = $_POST['email'];
    $pass = md5($_POST['password']);

 
$simpan=inputdata("INSERT INTO peminjam (Nama,Email,Password) VALUES ('$nama','$mail','$pass')");
if($simpan) {
header("location:signin.php");
}
?>