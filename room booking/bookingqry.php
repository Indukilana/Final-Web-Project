<?php 
include '../dbcon.php';

$cname = $_POST['name'];
$phone = $_POST['phone'];
$nic = $_POST['nic'];
$bdate = $_POST['bdate'];
$submit = $_POST['submit'];
$category = $_POST['room'];


//if(isset($_POST['submit'])){


    $sql = "INSERT INTO bookings (cname, category, phone, nic, book_date) VALUES ( '$cname','$category','$phone', '$nic', '$bdate' )";

 
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";

      echo $htmlHeader;
      while($stuff){
        echo $stuff;
      }
  
      echo '<script>alert("Your booking is confirmed")</script>';
      echo "<script>window.location = '../c_s/contactus.php'</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

//}



$conn->close();


?>