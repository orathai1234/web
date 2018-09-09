<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);


mysqli_set_charset($conn, "utf8");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


$firstname = $lastname = $bday = $size = $sex = $age = $address = $tel = $email = $cate = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  $bday = test_input($_POST["bday"]);
  $size = test_input($_POST["size"]);
  $sex = test_input($_POST["sex"]);
  $age = test_input($_POST["age"]);
  $message = test_input($_POST["address"]);
  $tel = test_input($_POST["tel"]);
  $email = test_input($_POST["email"]);
  $cate = test_input($_POST["cate"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//echo "<h2>Your Input:</h2>";
//echo $firstname." ".$lastname." ".$bday." ".$size." ".$sex." ".$age." ".$address." ".$tel." ".$email." ".$cate;




$sql = "INSERT INTO user_runfortoodtu (firstname, lastname, bday, size, sex, age, address, tel, email, cate) 
VALUES ('$firstname','$lastname','$bday','$size','$sex','$age','$address','$tel','$email','$cate')";

//echo $sql."<br>";
//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

echo "<script>alert('finish');</script>";
echo '<meta http-equiv="refresh" content = "0; url=index.html">';

?>