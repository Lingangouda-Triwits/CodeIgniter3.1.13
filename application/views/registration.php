<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <title>Bookroo website</title>
    
    <style>
        * {
        margin: 0px;
        padding: 0px;
    }

    body {
        width: 100vw;
        height: 100vh;
        background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("./images/cardrive.jpg");
        background-size: cover;
        background-position: center;
    }

    .text-center {
        margin: 18px 0px;
        color: oldlace;
    }
    
    .btn1 {
        border: 3px solid #ce28c6;
        border-radius: 20px;
        outline: none;
        padding: 10px;
        margin: 20px 0px;
        font-weight: bold;
        background: transparent;
        text-align: center;
    }

    .nav-item {
        padding: 0px 15px;
    }

  .btn-secondary:hover{
      background-color: #ce28c6;
  }
  h1::first-letter {
      color: #ce28c6
    }
  </style>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ce28c6;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Bookroo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="bookroo.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <h1 class="text-center">Welcome to Driver Registration Page</h1>

    <form action="driversignupdatabase.php" method="POST">

    <input class="d-grid gap-2 col-6 mx-auto btn1" type="text" name="name" id="name" placeholder="Enter Your Name">

    <h3 class="text-center">Gender</h3>

    <!-- The three Radio Buttons of Gender -->
    <div class="text-center">
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="gender" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="btnradio1">Male</label>

            <input type="radio" class="btn-check" name="gender" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2">Female</label>

            <input type="radio" class="btn-check" name="gender" id="btnradio3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio3">Other</label>
        </div>
    </div>
    <!-- End of Radio Buttons -->

    <input class="d-grid gap-2 col-6 mx-auto btn1" type="tel" name="phone" id="" placeholder="Enter Mobile Number">
    <button class="d-grid gap-2 col-4 mx-auto btn1 btn-secondary" type="submit" name="" id="">Send OTP</button>
    <input class="d-grid gap-2 col-6 mx-auto btn1" type="tel" name="" id="" placeholder="Enter Received OTP">
    <a href="setpassword.php" style="text-decoration:none;"><button class="d-grid gap-2 col-4 mx-auto btn1 btn-secondary" type="submit" name="" id="">  Verify </button>
    </a>

    </form>


</body>

</html>