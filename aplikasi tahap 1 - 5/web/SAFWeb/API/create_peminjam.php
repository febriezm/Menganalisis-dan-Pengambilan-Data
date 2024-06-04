<?php
$conn=new mysqli("localhost","root","","peminjaman_barang");
$id = $_POST["ID"];
$nama = $_POST["Nama"];
$email = $_POST["Email"];
$password = $_POST["Password"];
$data = mysqli_query($conn, "insert into peminjam set ID='$id', Nama='$nama', Email='$email', Password='$password' ");
if ($data) {
    echo json_encode([
        "Pesan" => "Success"]);
}else {
    echo json_encode([
        "Pesan" => "Failed"]);
}
?>