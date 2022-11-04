<?php
include("register2.php");
error_reporting(0);
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  
    <link rel="stylesheet" href="register.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input name="fullname" type="text" placeholder="Enter your name"  required>
          </div>
          <div class="input-box">
            <span class="details" >Username</span>
            <input name="username" type="text" placeholder="Enter your username"  required>
          </div>
          <div class="input-box">
            <span class="details" >Email</span>
            <input name="email" type="text" placeholder="Enter your email"  required>
          </div>
          <div class="input-box">
            <span class="details" >Phone Number</span>
            <input name="phonenumber" type="text" placeholder="Enter your number"  required>
          </div>
          <div class="input-box">
            <span class="details" >Password</span>
          
            <input name ="password" type="text" placeholder="Enter your password"  required>
            <div>
              1.UpperCase(Ex:- A,R,U)<br>
              2.LowerCase(Ex:- a,r,u)<br>
              3.Numeric(Ex:- 1,4,3)<br>
              4.Special Character(Ex:- @,#,%,&)
            </div>   
          </div>
          <div class="input-box">
            <span class="details" >Confirm Password</span>
            <input name="confirmpassword" type="text" placeholder="Confirm your password"  required>
          </div>
        </div>
       
        <div class="button">
          <input name ="submit" type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>




<?php 
 $str=$_GET['email'];
 // $bst=0;
$substr="rguktsklm.ac.in";
  // if () {
  //   $bst=1;
  // }

  $n=$_GET['password'];
  $l=strlen($n);
  $cp=$sm=$nm=$sy=0;
  $cp1=$sm1=$nm1=$sy1=0;
  for($i=0;$i<$l;$i++)
  { 
    $v=$n[$i];
    $x=ord($n[$i]);
//     echo "<br>".$v.'='.$x;
    if($x>=65 && $x<=90)
    {
      $cp++;
      $cp1=1;

    }
    else if($x>=97 && $x<=122)
    {
      $sm++;
      $sm1=1;

    }
    else if($x>=48 && $x<=57)
    {
      $nm++;
      $nm1=1;

    }
    else{
      $sy++;
      $sy1=1;
    }
  }
$r= $cp1+$sm1+$nm1+$sy1;

if($r>2 && str_ends_with($str,$substr))
{
  $fn=$_GET['fullname'];
  $un=$_GET['username'];
  $em=$_GET['email'];
  $pn=$_GET['phonenumber'];
  $pw=$_GET['password'];
  $cpw=$_GET['confirmpassword'];

  $query ="INSERT INTO hcilogin VALUES('$fn','$un','$em','$pn','$pw','$cpw')";

$data=mysqli_query($conn,$query);

if($data)
{
  echo "<p style='color:red;'>"."Registered"."</p>";
}
else{
  echo "<p style='color:red;'>"."Email or Password Error "."</p>";
}


}
else {
  echo "<p style='color:red;'>"."error occured"."</p>";
}





?>
