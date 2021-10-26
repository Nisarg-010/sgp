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
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top" aria-label="Eighth navbar example">
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
                        <a class="nav-link active" href="./joinUs.html">Join Us</a>
                    </li>
                </ul>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <?php
    echo "<br><br><br><br>";
$server="localhost";
$username="root";
$password="";
$dbname="insert";
$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['submit']))
{  
    
   if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['Oname']) && !empty($_POST['email'])  && !empty($_POST['pass'])  && !empty($_POST['cpass']))
   {
       $lname = $_POST['lname'];
       $fname = $_POST['fname'];
       $Oname = $_POST['Oname'];
       $pass = $_POST['pass'];
       $cpass = $_POST['cpass'];
       $email = $_POST['email'];
       $query = "insert into form(lname,fname,Oname,email,pass,cpass) values('$lname' ,'$fname','$Oname', '$email' , '$pass' , '$cpass')";
       $run = mysqli_query($conn , $query) or die(mysqli_error());

   }
   else{
    echo "all fields requierd";
   }

   if($run)
   {
       echo"form submitted successfully";
   }
   else
   {
       echo " form not submitted successfully";
   }
   
}
?>
   
    
    <!-- CONTENT -->
    
    <form action ="joinUs.php" method = "post" class="justify-item-center text-center" style="margin-top: 5.5rem;">
        <div class="card shadow-lg p-3" style="max-width: 400px;">
            <div class="card-body">
                <h4 class="mb-3">Sign Up to Continue!</h4>
               
                <hr class="hr-bold-purple">
                <div class="row">
                    <div class="mb-3 col-md-6 col-sm-12">
                        <input type="fname" class="form-control" name="fname" id="exampleFormControlInput1" placeholder="First Name">
                    </div>
                    <div class="mb-3 col-md-6 col-sm-12">
                        <input type="lname" class="form-control" name="lname" id="exampleFormControlInput1" placeholder="Last Name">
                    </div>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected disabled>Profession</option>
                        <option value="1">Student</option>
                        <option value="2">Developer</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="Oname" class="form-control" name="Oname" id="exampleFormControlInput1" placeholder="Organization Name">
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected disabled>Interests</option>
                        <option value="1">Interest 1</option>
                        <option value="2">Interest 2</option>
                        <option value="2">Interest 3</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name ="email" id="exampleFormControlInput1" placeholder="Enter Email">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control"name ="pass" id="exampleFormControlInput1" placeholder="Enter Password">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="cpass" id="exampleFormControlInput1" placeholder="Confirm Password">
                </div>
                <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="submit">Sign up</button>
                </div>
                <p>Already Have an Account? <a href="./signIn.php" class="card-link">Sign In</a></p>
            </div>
        </div>

    </form>

    <!-- FOOTER -->
    <footer class="my-4">
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