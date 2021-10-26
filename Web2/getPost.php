<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>
</head>
<body>
  <form action = "getPost.php" method="post">
    <label>Name:</label><input type="text" name = "name" ><br><br>
    <label>Email:</label><input type="text" name = "email" ><br><br>
    <label>Age:</label><input type="text" name = "age" ><br><br>
    <label>Address:</label><input type="text" name = "address" ><br><br>

    <button type="submit" name ="submit">Submit</button>
</form>
</body>
</html>

<?php
$server="localhost";
$username="root";
$password="";
$dbname="insert";
$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['submit']))
{
   if(!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['address']) && !empty($_POST['email']))
   {
       $name = $_POST['name'];
       $age = $_POST['age'];
       $address = $_POST['address'];
       $email = $_POST['email'];
       $query = "insert into form(name,email,age,address) values('$name' , '$email' , '$age' , '$address')";
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