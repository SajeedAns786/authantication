<?php
$success = 0;
$user = 0;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include('partial/connect.php');
  $email = $_POST['email'];
  $password = $_POST['password'];


  $sql = "SELECT * FROM users WHERE   
   email = '$email' and password = '$password'";
  $result = mysqli_query($con, $sql);
  if ($result) {
    $num = mysqli_num_rows($result);
    if ($num > 0) {
      echo "<div class='alert alert-success' role='alert'>
            <h4 class='alert-heading'>Susccess</h4>
            <p>You are successfully Login</p>
            <hr>
            </div>";
      session_start();
      $_SESSION['email'] = $email;
      header('location:home.php');

    } else {
      echo "<div class='alert alert-danger' role='alert'>
            <h4 class='alert-heading'>Invalid Credential</h4>
            <p>You are entered a wrong id and password</p>
            <hr>
          </div>";
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Test-Project</title>
  <!-- MDB icon -->
  <link rel="stylesheet" href="partial/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body>
  <?php include('partial/connect.php'); ?>
  <!-- login page -->
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>
                <form method="post">
                  <div class="form-outline form-white mb-4">

                    <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" />
                    <label class="form-label" for="typeEmailX">Email</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                    <label class="form-label" for="typePasswordX">Password</label>
                  </div>

                  <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                  <div class="d-flex justify-content-center text-center mt-4 pt-1">
                </form>
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Don't have an account?
                <?php echo '<a href="signup.php" class="text-white-50 fw-bold">Sign
                    Up</a>'; ?>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Sign in  -->




  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>