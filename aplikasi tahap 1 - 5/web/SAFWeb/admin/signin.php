<?php
require_once('database.php');
session_start(); // memulai session
$_SESSION['status'] = ""; 
if ($_SESSION['status']=="login") { // cek session jika sudah login lanjutkan ke index.php 
    header("location:dashboard.php");
}else{ // jika status belum login tampilkan ke form login 
    if (isset($_POST['masuk'])) {  // jika tombol submit ditekan 
        $email = $_POST['email'];
        if (cek_login($_POST['email'], $_POST['password'])) {
            $_SESSION['email'] = $email; // masukan session username
            $_SESSION['status'] = "login"; // masukan session status login
            if ($_SESSION['Nama']=="Febrie Zaeni Muchtar") {  // jika role admin
                header("location:dashboard.php"); // arahkan ke halaman index
            }else{        
                header("location:dashboard_user.php"); // arahkan ke halaman member
            }
        } else {
            header("location:signin.php?msg=gagal"); // jika gagal login arahkan ke halaman login
        }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Sign In</title>
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

                <form action="" method="POST">

                  <div class="align-items-center mb-3 pb-1">
                    <h1 class="fw-bold mb-0 text-center font-weight-bold">Welcome Back!</h1>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3 text-center text-muted" style="letter-spacing: 0px;">Please enter you details to sign in.</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="✉ Email Address"/>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" name="password"" class="form-control form-control-lg" placeholder="⊸ Password"/>
                  </div>

                  <div class="pt-1 mb-4">
                    <input type="submit" value="Sign In" name="masuk" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block font-weight-bold"></input>
                  </div>

                  <p class="mb-5 pb-lg-2 text-center font-weight-bold text-muted">Don't Have an Account? <a style="color: #000000;" href="signup.php">Sign up</a></p>

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