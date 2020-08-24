
<?php 
include '../dbcon.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pswrd = $_POST['pswrd'];
$pswrd = $_POST['cpswrd'];
$submit = $_POST['Sign Up'];



if(isset($_POST['Sign Up'])){


    $sql = "INSERT INTO users (fname,lname, email, pswrd) VALUES ( '$fname', '$lname', '$email', '$pswrd' )";
      
 
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
<<<<<<< HEAD
      echo $htmlHeader;
      while($stuff){
        echo $stuff;
      }
  
      echo "<script>window.location = '../Sign up/login page.php'</script>";
=======
>>>>>>> 124602777cbbaa951e61e66e9919eb2ac5774674
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

}



$conn->close();


?>

