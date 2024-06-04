<?php 
 require_once("database.php");
    $id_pem = $_POST['id_pem'];
    $id_brg = $_POST['id_brg'];
    $status = $_POST['status'];
    $tgl_pin = $_POST['tgl_pin'];
    $tgl_kem = $_POST['tgl_kem'];
    $jml_brg = $_POST['jml_brg'];
    $total = $_POST['total'];

 
$simpan=inputdata("INSERT INTO peminjaman (ID_Peminjam,ID_Barang,Status,Tgl_Pinjam,Tgl_Kembali,Jml_Barang,Total) VALUES ('$id_pem','$id_brg','$status','$tgl_pin','$tgl_kem','$jml_brg','$total')");
if($simpan) {
header("location:peminjaman_user.php");
}
?>