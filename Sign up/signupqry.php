
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
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

}



$conn->close();


?>

