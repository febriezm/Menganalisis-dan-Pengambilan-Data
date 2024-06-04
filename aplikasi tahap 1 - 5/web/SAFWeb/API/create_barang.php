<?php
$conn=new mysqli("localhost","root","","peminjaman_barang");
$id = $_POST["ID"];
$nm_brg = $_POST["Nama_Barang"];
$status = $_POST["Status"];
$kategori = $_POST["Kategori"];
$stock = $_POST["Stock"];
$data = mysqli_query($conn, "insert into barang set ID='$id', Nama_Barang='$nm_brg', Status='$status', Kategori='$kategori', Stock='$stock' ");
if ($data) {
    echo json_encode([
        "Pesan" => "Success"]);
}else {
    echo json_encode([
        "Pesan" => "Failed"]);
}
?>