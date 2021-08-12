<?php
include '../dbcon.php';

$email = $_POST['email'];
$pswrd = $_POST['pswrd'];
$submit = $_POST['submit'];


/*

$query = "SELECT * from users where email='$email' && pswrd='$pswrd'" ;
$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result) >0) {


    echo $htmlHeader;
    while($stuff){
      echo $stuff;
    }

    //echo "<script>window.location = '../rooms/rooms.html'</script>";
} else {
    echo "0 results";
}
*/

/*

  $sql = "SELECT * from users where email='$email' && pswrd='$pswrd'";

  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["email"]. " - Name: " . $row["pswrd"]."<br>";
  }

  if ($result->num_rows > 0) {

   

        echo $htmlHeader;
        while($stuff){
          echo $stuff;
        }
  
       // echo "<script>window.location = '../rooms/rooms.html'</script>";
    

  } else {
    echo "0 results";
  
  
  }*/

/*

  $sql = "SELECT * from users where email='$email' AND pswrd='$pswrd'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["email"]. " - Name: " . $row["pswrd"]."<br>";
    }
  } else {
    echo "0 results";
  }


  
 


$conn->close();

?> */

$sql = "SELECT * from users where email='$email' AND pswrd='$pswrd'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count == 1) {
    $_SESSION['email'] = $email;
    echo $htmlHeader;
    while($stuff){
      echo $stuff;
    }

    echo "<script>window.location = '../rooms/rooms.html'</script>";
}else {
    $error = "Your Login Name or Password is invalid";
    //header("Location: login.php?error=".$error);
}



if (isset($_GET['error'])) {
    echo $_GET['error'];
}

?>