<?php
require_once('database.php');
$data = tampildata("Select * from peminjaman");
$id = 0;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Peminjaman</title>
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
      <div class="col col-xl-12">
        <div class="card shadow-lg" style="border-radius: 1rem;">
          <div class="row g-0">
          <div class="col-md-6 col-lg-4 d-none d-md-block">
              <img src="logo.jpg"
                alt="login form" class="rounded float-left" style="border-radius: 1rem 0 0 1rem; height: 550px; width: 400px"/>
            </div>
            <div class="col-md-6 col-lg-7 d-flex">
              <div class="card-body p-4 p-lg-5 text-black">
              <a class="btn font-weight-bold" href="dashboard_user.php" role="button">〱</a>
              <div class="align-items-center mb-3 pb-1">
                    <h1 class="fw-bold mb-0 text-center font-weight-bold">Peminjaman
                    <a type="button" class="btn btn-light" data-toggle="modal"
                            data-target="#exampleModalCenter">➕</a>
                            <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Pinjam Barang</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="jumbotron">
                                        <img src="logo.jpg" class="thumbnail" style="height: 120px; width: 100px;">
                                        <form action="proses_peminjaman.php" method="POST">
                                            <div class="form-group">
                                                <label for="peminjaman" style="font-size: 20px">ID Peminjam</label>
                                                <input type="text" class="form-control" name="id_pem"/>
                                                <label for="peminjaman" style="font-size: 20px">ID Barang</label>
                                                <input type="text" class="form-control" name="id_brg"/>
                                                <label for="peminjaman" style="font-size: 20px">Status</label>
                                                <input type="text" class="form-control" name="status"/>
                                                <label for="peminjaman" style="font-size: 20px">Tgl Pinjam</label>
                                                <input type="date" class="form-control" name="tgl_pin"/>
                                                <label for="peminjaman" style="font-size: 20px">Jumlah Barang</label>
                                                <input type="text" class="form-control" name="jml_brg"/>
                                                <label for="peminjaman" style="font-size: 20px">Total</label>
                                                <input type="text" class="form-control" name="total"/>
                                            </div>
                                            <input type="submit" value="Submit" style="width: 400px;"
                                                class="font-weight-bold btn btn-secondary"></input>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                    </h1>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3 text-center text-muted" style="letter-spacing: 0px;">The following is the data on borrowing goods.</h5>

                  <table class="text-center table grid table-light ">
            <thead class="thead-dark">
                <tr class="font-weight-bold">
                    <th scope="col">ID Peminjam</th>
                    <th scope="col">ID Barang</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tgl Pinjam</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($data as $room): ?>
                    <tr class="bg-dark text-light text-muted">
                        <td>
                            <?php echo "$room[ID_Peminjam]"; ?>
                        </td>
                        <td>
                            <?php echo "$room[ID_Barang]"; ?>
                        </td>
                        <td>
                            <?php echo "$room[Status]"; ?>
                        </td>
                        <td>
                            <?php echo "$room[Tgl_Pinjam]"; ?>
                        </td>
                        <td>
                            <?php echo "$room[Jml_Barang]"; ?>
                        </td>
                        <td>
                            <?php echo "$room[Total]"; ?>
                        </td>
                        <td>
                            <?php echo "<a href='delete.php?given=$room[ID]'>Edit</a>" ?>
                        </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>             

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Bismillah Boys 2024</p></div>
        </footer>

  </body>
</html>