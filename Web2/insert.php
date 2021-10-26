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