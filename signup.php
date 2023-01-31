<?php

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     include('partial/connect.php');
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $sql = "INSERT INTO users SET
//     name = '$name',
//     email = '$email',
//     password = '$password'
//     ";
//     $res = mysqli_query($con, $sql);
//     if ($res == TRUE) {
//         header('location:home.php');
//     } else {
//         die(mysqli_error($con));
//     }
// }

?>
<?php
$success = 0;
$user = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('partial/connect.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    $sql = "SELECT * FROM users WHERE   
   email = '$email'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $user = 1;
        } else {
            if ($password === $cpassword) {
                $sql1 = "INSERT INTO users SET
             name = '$name', 
             email = '$email',
             password = '$password'
             ";
                $result1 = mysqli_query($con, $sql1);
                if ($result1) {

                    $success = 1;
                    header('location:index.php');
                }
            } else {
                die(mysqli_error($con));


            }
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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body>

    <?php
    if ($user) {
        echo '<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Ohh no sorry!!</h4>
        <p>User already exist</p>
        <hr>
        
      </div>';
    }

    ?>
    <?php
    if ($success) {
        echo '<div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Susccess</h4>
        <p>You are successfully signup</p>
        <hr>
        
      </div>';
    }

    ?>


    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form method="post">

                                    <div class="form-outline mb-4">
                                        <input type="text" name="name" id="form3Example1cg"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3cg" name="email"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4cg" name="password"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4cdg" name="cpassword"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                    service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <a href="index.php"> <button type="submit"
                                                class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button></a>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a
                                            href="index.php" class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>