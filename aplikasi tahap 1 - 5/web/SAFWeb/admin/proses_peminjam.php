<?php 
 require_once("database.php");
    $id = $_POST['id'];
    $nm = $_POST['nama'];
    $mail = $_POST['email'];
    $pas = md5($_POST['pass']);

 
$simpan=inputdata("INSERT INTO peminjam (ID,Nama,Email,Password) VALUES ('$id','$nm','$mail','$pas')");
if($simpan) {
header("location:peminjam.php");
}
?>