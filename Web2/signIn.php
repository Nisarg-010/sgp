<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon-32x32.png" type="image/x-icon">

    <!-- Bootstrap CSS / Extra CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>PyProjects | About Us</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark" aria-label="Eighth navbar example">
        <div class="container">
            <a class="navbar-brand" href="./index.php">
                <h1>PyProjects</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./projectList.php">Projects</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown07">
                            <li><a class="dropdown-item" href="#">Basic</a></li>
                            <li><a class="dropdown-item" href="#">Advanced</a></li>
                            <li><a class="dropdown-item" href="#">Intermediate</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">OpenCV</a></li>
                            <li><a class="dropdown-item" href="#">Tkinter</a></li>
                            <li><a class="dropdown-item" href="#">PyAutoGUI</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./FAQs.php">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./aboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./joinUs.php">Join Us</a>
                    </li>
                </ul>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
   <?php

   $connect= mysqli_connect("localhost","root","","insert") or die("Connection Failed");
   if(!empty($_POST['submit']))
   {
       $username=$_POST['email'];
       $password=$_POST['pass'];
       $query="select * from login where username ='$username' and password ='$password'";
       $result=mysqli_query($connect,$query);
       $count=mysqli_num_rows($result);
       if($count > 0)
       {
           echo "login successfully";
       }
       else
       {
           echo "login not successful";
       }

   }
   ?>
    <!-- CONTENT -->
    <form action = "signIn.php" method = "post" class="justify-item-center text-center">
        <div class="card shadow-lg p-3" style="max-width: 400px;">
            <div class="card-body">
                <h4 class="mb-3">Sign In to Continue!</h4>
                <hr class="hr-bold-purple">
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email">
                </div>
                <div class="mb-3">
                    <input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="Enter Password">
                </div>
                <div class="mb-3">
                    <input type="submit" name = "submit" class="form-control" id="exampleFormControlInput1" placeholder="Submit">
                </div>
                <p>Don't Have an Account? <a href="./joinUs.php" class="card-link">Sign Up</a></p>
            </div>
        </div>
    </form>
    <!-- FOOTER -->
    <footer class="my-4 footer-bottom">
        <hr class="dropdown-divider">
        <p class="text-center text-muted">© 2021 PyProjects, Inc</p>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>