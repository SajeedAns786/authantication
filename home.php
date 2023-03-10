<?php
session_start();
if (!isset($_SESSION['email'])) {
  header('location:index.php');
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit user</title>

  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link rel="stylesheet" href="animation.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Fruktur&family=Irish+Grover&family=Lobster&family=Yesteryear&family=Zen+Kurenaido&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <style>
    * {
      font-family: 'Zen Kurenaido', sans-serif;
      font-weight: bold;


    }


    body {
      background: f1fbff;
    }


    @media (max-width: 576px) {
      .navbar-brand {

        text-align: center;
        width: 100%;
      }

      .d-flex {
        width: 100%;
      }
    }
  </style>

</head>

<body>

  <!-- navBar -->
  <nav class=" bg-light navbar h-25  " style="background-color: white; height:70px ">
    <div class="container " style="margin-right : 30px">


      <a class="navbar-brand    " style="width: 50%; font-size:30px ;" href="index.html">
        <Span class="text-danger text"> <strong>ekala</strong></Span>kaar
      </a>

      <form class="d-flex  " style="width: 40%;" role="search">
        <input class="form-control me-2" type="search" placeholder="Search Opportunities" aria-label="Search">
        <button class="btn btn-outline-danger" style=" padding: 10px; font-weight: 10px; font-weight: 600;"
          type="submit">Search</button>
      </form>


    </div>
  </nav>


  <!-- editUser -->




  <div class="mb-5" style="width: 60%; margin: auto;">

    <div class="col-md-12 ">

      <div class="section-header text-center pb-5 mt-2">
        <h2 class="shadow p-3 mb-5 bg-body rounded">
          <span class="text-danger">EDIT YOUR PROFILE</span>
        </h2>
      </div>

    </div>


    <!-- photo -->
    <div class="mx-4">

      <img style="width:145px;  " class="rounded-circle"
        src="https://cdn2.vectorstock.com/i/1000x1000/35/16/boy-cartoon-vector-21843516.jpg" alt="">

      <div>
        <a href=""><span style="font-weight:bolder ;" class="text-danger h4">Change profile photo</span></a>
      </div>
    </div>




    <div class="p-4 row">

      <div class="p-2 col-md-6">

        <!-- first Name -->
        <div>
          <label for="validationCustom01" class="form-label">First name</label>
          <input type="text" class="form-control" name="firstname" id="validationCustom01" value="" required="">

        </div>

        <!-- Phonenumber -->
        <div>
          <label for="validationCustom01" class="form-label"> Phone Number</label>
          <input type="text" class="form-control" name="firstname" id="validationCustom01" value="" required="">

        </div>

        <!-- Age -->
        <div>
          <label for="validationCustom02" class="form-label">Age</label>
          <input type="number" class="form-control" name="age" id="validationCustom02" value="" required="">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <!-- Caste -->
        <div>
          <label for="validationCustom04" class="form-label">Caste</label>
          <select class="form-select" id="validationCustom04" name="caste" required="">
            <option selected="" disabled="" value="">Choose...</option>
            <option>OBC</option>
            <option>General</option>
            <option>ST/SC</option>
          </select>
          <div class="invalid-feedback">
            Please select your Caste
          </div>
        </div>

        <!-- Height -->
        <div>
          <label for="validationCustom05" class="form-label">Height</label>
          <input type="text" class="form-control" name="height" id="validationCustom05" required="">
          <div class="invalid-feedback">
            Please provide Your height
          </div>
        </div>

        <!-- Language -->
        <div>
          <label for="validationCustom05" class="form-label">Language</label>
          <input type="text" class="form-control" name="language" id="validationCustom05" required="">
          <div class="invalid-feedback">
            Please provide your Education
          </div>
        </div>

        <!-- Skills -->
        <div>
          <label for="validationCustom05" class="form-label">Skills</label>
          <input type="text" class="form-control" name="skils" id="validationCustom05" required="">
          <div class="invalid-feedback">
            Please provide your Skills
          </div>
        </div>




      </div>


      <div class="p-2 col-md-6">

        <!-- lastName -->
        <div>
          <label for="validationCustom02" class="form-label">Last name</label>
          <input type="text" class="form-control" name="lastname" id="validationCustom02" value="" required="">
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>


        <!-- Email - id -->
        <div>
          <label for="validationCustomUsername" class="form-label">Email</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" name="email" id="validationCustomUsername"
              aria-describedby="inputGroupPrepend" required="">
            <div class="invalid-feedback">
              Please enter your valid email id
            </div>
          </div>
        </div>

        <!-- Gender   -->
        <div>
          <label for="validationCustom04" class="form-label">Gender</label>
          <select class="form-select" id="validationCustom04" name="gender" required="">
            <option selected="" disabled="" value="">Choose...</option>
            <option>Male</option>
            <option>Female</option>
            <option>Prefer not to say</option>
          </select>
          <div class="invalid-feedback">
            Please select a Gender.
          </div>
        </div>

        <!-- Religion -->

        <div>
          <label for="validationCustom03" class="form-label">Religion</label>
          <input type="text" class="form-control" name="religion" id="validationCustom03" required="">
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>

        <!-- Weight -->
        <div>
          <label for="validationCustom05" class="form-label">Weight</label>
          <input type="number" class="form-control" name="weight" id="validationCustom05" required="">
          <div class="invalid-feedback">
            Please provide your Weight.
          </div>
        </div>

        <!-- Education -->

        <div>
          <label for="validationCustom03" class="form-label">Education</label>
          <input type="text" class="form-control" name="education" id="validationCustom03" required="">
          <div class="invalid-feedback">
            Please provide your Education
          </div>
        </div>

        <!-- Experience -->
        <div>
          <label for="validationCustom05" class="form-label">Experience</label>
          <input type="number" class="form-control" name="experience" id="validationCustom05" required="">
          <div class="invalid-feedback">
            Please provide your Experience.
          </div>
        </div>





      </div>



    </div>



    <div class="px-4" style="display: flex; flex-direction: column;">
      <div style="display: flex; flex-direction: column;">
        <span class="mb-2">Url for any video link (Social Media Link such as Youtube / Insta / Facebook ) </span>
        <input type="text" style="width: 50%; ">
      </div>
      <div>

        <label class="mb-2 mt-4" for="exampleFormControlFile1">Example file input</label>
        <br>
        <input type="file" style="width: 50%;" class="form-control-file" id="exampleFormControlFile1">
      </div>

    </div>
    <div class="col-12 mt-4 " style="text-align: right; ">
      <button class="btn btn-lg btn-danger" type="submit">Save Changes </button>
    </div>

  </div>



  </div>
  </div>


  <div class="container">
    <a href="logout.php" class="btn btn-primary mt-5">Logout</a>
  </div>

</body>

</html>