<html>
<head>
  <link rel="stylesheet" type="text/css" href="signup.css">
  <script>
  function checkform() {
    var fname = document.form.fname.value;
    var lname = document.form.lname.value;
    var password = document.form.password.value;
    var cpassword = document.form.cpassword.value;
    var email = document.form.email.value;
    var mailformat = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (fname == "") {
      alert("First Name must be filled out");
      return false;
    }
    if (lname == "") {
      alert("Last Name must be filled out");
      return false;
    }
    if (email == "") {
      alert("Please enter your email");
      return false;
    }
    if(password=="")
    {
      alert("Please enter the password");
      return false;
    }
    if(cpassword=="")
    {
    alert("Please confirm the password");
    return false;
    }
    if(password!=cpassword && cpassword!="" && password!="")
    {
      alert("Password dosen't match");
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
        <a href="../c_s/contactus.php"><button id="button">Contact Us</button></a>
        <section class="dropdown">
          <button id="button">Accommodation</button>
            <section class="dropdown-content">
            <a href="../rooms/rooms.php" style="text-align: center;">Rooms</a>
            <a href="../rooms/rooms.php" style="text-align: center;">Suits</a>
      
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


 <form  action="signupqry.php" method="POST" onsubmit="checkform()" name="form">
   <fieldset>
     <legend>Sign Up</legend>
   <table class="center">
     <tr>
       <td style="color:white;">First Name</td>
       <td style="color:white;">Last Name</td>
     </tr>
     <tr>
       <td><input type="text" name="fname" class="short" style="border-radius:10px;"></td>
       <td><input type="text" name="lname" class="short"style="border-radius:10px;"></td>
     </tr>
     <tr>
       <td colspan="2" style="color:white;">E-mail</td>
     </tr>
     <tr>
       <td colspan="2"><input type="text" name="email" class="longtext" style="border-radius:10px;"></td>
     </tr>
     <tr>
       <td style="color:white;">Password</td>
       <td style="color:white;">Confirm Password</td>
     </tr>
     <tr>
       <td><input type="password" name="pswrd" class="short" style="border-radius:10px;"></td>
       <td><input type="password" name="cpswrd" class="short"style="border-radius:10px;"></td>
     </tr>
     <tr>
       <td colspan="2" style="padding-top:5%;"><input type="submit" name="submit" value="Sign Up" class="signup"style="border-radius:10px;"></td>
     </tr>
     <tr>
       <td style="padding-top:5%;color:white;">Already have a account? <a href="login page.php">Login</a></td>
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
</html>







