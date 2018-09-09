<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="UTF-8">
  <title>Report</title>

<style>

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.5);

 }
.tbl-content{
  background-color: rgba(255,255,255,0.5);
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.5);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #000;
  text-transform: uppercase;
}
td{

  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #000;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

/*@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);*/
body {background: url(images/run.jpg);
}

section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}


  </style>


</head>

<body>
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





// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from user_runfortoodtu";
$result = $conn->query($sql);


?>





<section>
  <!--for demo wrap-->
  <div class="tbl-header"  >
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>userID</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Age</th>
          <th>Size</th>
        </tr>
      </thead>
    </table>
  </div>

  <div class="tbl-content" >
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td><?php echo $row["userID"];?></td>
          <td><?php echo $row["firstname"];?></td>
          <td><?php echo $row["lastname"];?></td>
          <td><?php echo $row["age"];?></td>
          <td><?php echo $row["size"];?></td>
        </tr>
 
      </tbody>
      <?php    
 }
}
?>
    </table>

  </div>
</section>

</body>
</html>