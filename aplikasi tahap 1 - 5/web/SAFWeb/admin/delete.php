<?php
require_once("database.php");
if ($kode = $_GET['kode']) {
$result = mysqli_query($koneksi,"DELETE FROM barang WHERE id=$kode");
    header("location:databarang.php"); 
}
else if ($code = $_GET['code']) {
    $result = mysqli_query($koneksi,"DELETE FROM peminjam WHERE id=$code");
        header("location:peminjam.php");
} 
else if  ($give = $_GET['give']) {
    $result = mysqli_query($koneksi,"DELETE FROM peminjaman WHERE id=$give");
        header("location:peminjaman.php"); 
}
?>