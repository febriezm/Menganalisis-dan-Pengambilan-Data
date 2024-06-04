<?php
$servername = "localhost";
$database = "peminjaman_barang";
$username = "root";
$password = "";
$koneksi = mysqli_connect($servername, $username, $password, $database);
if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
function cek_login($email,$password){
    global $koneksi; 
    $mail = $email; 
    $upass = $password;		
    $hasil = mysqli_query($koneksi,"SELECT * FROM admin WHERE Email='$mail' AND Password=md5('$upass')");
    $hasil2 = mysqli_query($koneksi,"SELECT * FROM peminjam WHERE Email='$mail' AND Password=md5('$upass')");
    $cek = mysqli_num_rows($hasil);
    $cek2 = mysqli_num_rows($hasil2);
    if($cek > 0 ){
        $query = mysqli_fetch_array($hasil);
        $_SESSION['ID'] = $query['ID'];
        $_SESSION['Email'] = $query['Email'];
        $_SESSION['Nama'] = $query['Nama'];
        return true;		
    }
    else if ($cek2 > 0 ){
        $query = mysqli_fetch_array($hasil);
        $_SESSION['ID'] = $query['ID'];
        $_SESSION['Email'] = $query['Email'];
        $_SESSION['Nama'] = $query['Nama'];
        return true;		
    }
    else {
        return false;
    }	
}
function inputdata($inputdata)
{
    global $koneksi;
    $sql = mysqli_query($koneksi, $inputdata);
    return $sql;
}
function tampildata($kueri)
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, $kueri);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows;
}