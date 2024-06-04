<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Sign Up</title>
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

      <div class="col-md-6 col-lg-12 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <a class="btn font-weight-bold" href="signin.php" role="button">〱</a>
                <form action="proses_signup.php" method="POST">

                  <div class="align-items-center mb-3 pb-1">
                    <h1 class="fw-bold mb-0 text-center font-weight-bold">Create Account</h1>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3 text-center text-muted" style="letter-spacing: 0px;">Fill in your identity details</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="username" name="username" class="form-control form-control-lg" placeholder="✩ Username"/>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="✉ Email Address"/>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="⊸ Password"/>
                  </div>

                  <div class="pt-1 mb-4">
                    <input name="signup" type="submit" value="Sign Up" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block font-weight-bold"></input>
                  </div>

                </form>                

              </div>
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

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Bismillah Boys 2024</p></div>
        </footer>

  </body>
</html>
