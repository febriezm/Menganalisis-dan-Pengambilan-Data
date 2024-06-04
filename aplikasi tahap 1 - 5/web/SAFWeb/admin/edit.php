<?php

include("database.php");
 

if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    $nm_brg = $_POST['nm_brg'];
    $kategori = $_POST['kategori'];
    $img = $_POST['img'];
    $stock = $_POST['stock'];
    $status = $_POST['status'];
   
    $result = mysqli_query($koneksi, "UPDATE barang SET ID='$id',Nama_Barang='$nm_brg',Kategori='$kategori',Image='$img',Stock='$stock',Status='$status' WHERE ID=$id");
    
    header("Location:databarang.php");
}
?>
<?php

$kode = $_GET['kode'];
 

$result = mysqli_query($koneksi, "SELECT * FROM barang WHERE ID=$kode");
 
while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['ID'];
    $nm_brg = $user_data['Nama_Barang'];
    $kategori = $user_data['Kategori'];
    $img = $user_data['Image'];
    $stock = $user_data['Stock'];
    $status = $user_data['Status'];
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Update Data Here!</title>
    <style>
      body {
      background-image: linear-gradient(to left, grey, white);
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      }
      </style>
</head>

<body>

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card shadow-lg" style="border-radius: 1rem; height: 552px;">
  <section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

    <div class="container">
        <h1 class="fw-bold mb-0 text-center font-weight-bold">Change Data</h1>
        <form name="update_data" action="" method="post">
            <div class="form-group">
                <label for="barang">ID</label>
                <input type="text" class="form-control" name="id" value=<?php echo $id;?>>
                <label for="barang">Nama Barang</label>
                <input type="text" class="form-control" name="nm_brg" value=<?php echo $nm_brg;?>>
                <label for="barang">Kategori</label>
                <input type="text" class="form-control" name="kategori" value=<?php echo $kategori;?>>
                <label for="barang">Image</label>
                <input type="text" class="form-control" name="img" value=<?php echo $img;?>>
                <label for="barang">Stock</label>
                <input type="text" class="form-control" name="stock" value=<?php echo $stock;?>>
                <label for="barang">Status</label>
                <input type="text" class="form-control" name="status" value=<?php echo $status;?>>
            </div>
            <td><input type="hidden" name="id" value=<?php echo $_GET['kode'];?>></td>
            <a class="font-weight-bold btn btn-secondary" href="databarang.php" role="button">Back</a>
            <input type="submit" value="Update" name="update" class="font-weight-bold btn btn-primary">
        </form>
    </div>

    </div>
      <div class="col-sm-6 px-2 d-none d-sm-block">
      <img src="logo.jpg"
                alt="" class="rounded-left" style="border-radius: 1rem; height: 550px; width: 452px"/>
      </div>
    </div>
  </div>
</section>
</div>
</div>
</div>
</div>

     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

</body>
</html>