<?php 
 require_once("database.php");
    $id = $_POST['id'];
    $nm_brg = $_POST['nama_brg'];
    $kategori = $_POST['kategori'];
    $img = $_POST['image'];
    $stok = $_POST['stock'];
    $status = $_POST['status'];

 
$simpan=inputdata("INSERT INTO barang (ID,Nama_Barang,Kategori,Image,Stock,Status) VALUES ('$id','$nm_brg','$kategori','$img','$stok','$status')");
if($simpan) {
header("location:databarang.php");
}
?>