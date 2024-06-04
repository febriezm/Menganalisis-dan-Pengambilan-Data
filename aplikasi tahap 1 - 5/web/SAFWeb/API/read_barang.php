<?php
header('Access-Control-Allow: *');
$conn=mysqli_connect("localhost","root","","peminjaman_barang");
$query=mysqli_query($conn,"SELECT * FROM barang");
$data=mysqli_fetch_all($query,MYSQLI_ASSOC);
echo json_encode($data);
?>