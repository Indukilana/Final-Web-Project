<html>
<head>
  <link rel="stylesheet" type="text/css" href="signup.css">
  <script>
  function checkform() {
    var password = document.form.password.value;
    var email = document.form.email.value;
    var mailformat = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (email == "") {
      alert("Please enter your email");
      return false;
    }
    if(password=="")
    {
      alert("Please enter the password");
      return false;
    }
    if(email.match(mailformat))
    {
      return true;
    }
    else {
      alert("Please enter a valid email");
    }
 }
  </script>

</head>
<body>
  <div>
    <div id="navdiv">
      <div id="buttondiv">
        <a href="../index.html"><button id="button">Home</button></a>
        <a href="../index.html"><button id="button">About Us</button></a>
        <a href="../c_s/contactus.html"><button id="button">Contact Us</button></a>
        <section class="dropdown">
          <button id="button">Accommodation</button>
            <section class="dropdown-content">
            <a href="../rooms/rooms.html" style="text-align: center;">Rooms</a>
            <a href="../rooms/rooms.html" style="text-align: center;">Suits</a>
      
            </section>
          </section>
        <a href="../c_s/Gallary.html"><button id="button">Gallery</button></a>
        <button id="button">Services</button>
        <section class="dropdown">
          <button id="button">Registration</button>
          <section class="dropdown-content">
            <a href="../Sign up/login page.php" style="text-align: center;">Login</a>
            <a href="../Sign up/sign up.php"style="text-align: center;">Sign up</a>
          </section>
        </section>
      </div>
    </div>
  </div>
</br><br/><br/>
<h1 style="color:white;margin-left:23%;">Join with us and enjoy exclusive privileges and rewards.</h1>
  <div id="socialdiv"><img src="insta.png" id="insta"></br><img src="face.png" id="face"></br><img src="Twitter.png" id="twitter"></div>


 <form onsubmit="checkform()" name="form">
   <fieldset>
     <legend>Login</legend>
   <table class="center">
    
     <tr>
       <td colspan="2" style="color:white;">E-mail</td>
     </tr>
     <tr>
       <td colspan="2"><input type="text" name="email" class="longtext" style="border-radius:10px;"></td>
     </tr>
     <tr>
       <td style="color:white;">Password</td>
     </tr>
     <tr>
       <td><input type="password" name="password" class="short" style="border-radius:10px;"></td>
     </tr>
     <tr>
       <td colspan="2" style="padding-top:5%;"><input type="submit" name="submit" value="Login" class="signup"style="border-radius:10px;"></td>
     </tr>
     <tr>
       <td style="padding-top:5%;color:white;">Doesn't have an account? 
        <a href="sign up.html">Sign Up</a></td> 
    </tr>
   </table>
 </fieldset>
 </form>

</br></br></br></br></br></br>

 <div id="bottomdiv" >
   <table border="0" class="bottomtable" >
     <tr>
       <td colspan="2" class="bottomtd" style="padding-top:30;font-family:Microsoft Sans Serif;font-size:18;">Unlock Possibilities</td>

     </tr>
     <tr>
       <td  colspan="2" class="bottomtd" style="font-family:Microsoft Sans Serif;font-size:14;">Enhance the way you travel with our mobile app
 </td>

     <tr>
         <td rowspan="2" class="bottomtd"></br><img src="qr.png" style="height:90; width:90; margin-top:8;"></td>
           <td class="bottomtd"></br><img src="googleplay.png" style="height:40; width:100; margin-top:8; border-radius: 10%;"></td>
     </tr>
     <tr>

           <td class="bottomtd"><img src="apple.jpg" style="height:40; width:100;border-radius: 10%;"></td>
     </tr>
 </table>
 </div>


</body>


<?php
include '../dbcon.php';

$email = $_POST['email'];
$pswrd = $_POST['pswrd'];
$submit = $_POST['submit'];

 

  $sql = "SELECT * from users where email='$email' && pswrd='$pswrd'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  
   // header("Location: http://localhost/Final-Web-Project/rooms/rooms.html");


  } else {
    echo "0 results";
  
  $conn->close();
}


?>


</html>