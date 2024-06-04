<?php
$conn=new mysqli("localhost","root","","peminjaman_barang");
$id_pem = $_POST["ID_Peminjam"];
$id_brg = $_POST["ID_Barang"];
$jml_brg = $_POST["Jml_Barang"];
$tgl_pin = $_POST["Tgl_Pinjam"];
$tgl_kem = $_POST["Tgl_Kembali"];
$status = $_POST["Status"];
$total = $_POST["Total"];
$data = mysqli_query($conn, "insert into peminjaman set ID_Peminjam='$id_pem', ID_Barang='$id_brg', Jml_Barang='$jml_brg', Tgl_Pinjam='$tgl_pin', Tgl_Kembali='$tgl_kem', Status='$status', Total='$total' ");
if ($data) {
    echo json_encode([
        "Pesan" => "Success"]);
}else {
    echo json_encode([
        "Pesan" => "Failed"]);
}
?>