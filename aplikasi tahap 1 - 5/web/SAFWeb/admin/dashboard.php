<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Dashboard.</title>
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
        <div class="card shadow-lg" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="logo.jpg"
                alt="login form" class="rounded float-left" style="border-radius: 1rem 0 0 1rem; height: 550px; width: 400px"/>
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form>

                  <div class="align-items-center mb-3 pb-2">
                    <h1 class="fw-bold mb-0 font-weight-bold">Dashboard.</h1>
                  </div>

        <div class="card-deck mb-3 text-center">
        <div class="card mb-2 shadow-lg">
          <div class="card-body">
          <img class="img-fluid" src="databarang.png" width="80" height="80">
          </div>
          <a role="button" href="databarang.php" class="btn btn-lg btn-block btn-secondary font-weight-light">Data Barang</a>
        </div>
        <div class="card mb-2 shadow-lg">
          <div class="card-body">
          <img class="img-fluid" src="peminjaman.png" width="70" height="70">
          </div>
          <a role="button" href="peminjaman.php" class="btn btn-lg btn-block btn-secondary font-weight-light">Peminjaman</a>
        </div>
      </div>
      <div class="card-deck mb-2 text-center">
        <div class="card mb-2 shadow-lg">
          <div class="card-body">
          <img class="img-fluid" src="peminjam.png" width="80" height="80">
          </div>
          <a role="button" href="peminjam.php" class="btn btn-lg btn-block btn-secondary font-weight-light">Peminjam</a>
        </div>
        <div class="card mb-2 shadow-lg">
          <div class="card-body">
          <img class="img-fluid" src="logout.png" width="70" height="70">
          </div>
          <a role="button" href="signin.php" class="btn btn-lg btn-block btn-danger font-weight-light">Log Out</a>
        </div>
      </div>

                </form>

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