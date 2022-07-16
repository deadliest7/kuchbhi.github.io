<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    // $dbname = "epiz_32147855_Jeppleconnect";


    $conn = mysqli_connect($server, $username, $password);


    if(!$conn){
        die("Connection Failed: ".mysqli_connect_error());
    }
    // echo "Success connection to database";

    $username = $_POST['username'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];



    $sql = "INSERT INTO `jepple_connects`.`data` (`username`, `name`, `age`, `gender`, `gmail`, `phone`, `other`, `date`) VALUES ('$username', '$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";

    // echo $sql;


    if($conn->query($sql) == true){ // echo "Succesfully inserted"; } else{ echo
"ERROR: $sql <br />
$conn->error"; } $conn->close(); } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Jepple.in</title>
    <link rel="stylesheet" href="style2.css" />
    <style>
      /* * {
        background-color: aqua;
      } */
    </style>
  </head>
  <body>
    <div class="container">
      <h1>JEPPLE.in</h1>
    </div>
    <div class="container2">
      <p>Create New Account</p>
      <form action="index.php" method="post">
        <input
          type="text"
          name="username"
          id="username"
          placeholder="Enter Your UserName: "
        />
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter Your Name: "
        />
        <input type="text" name="age" id="age" placeholder="Enter Your Age: " />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter Your Gender(M/F): "
        />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter Your email: "
        />
        <input
          type="number"
          name="phone"
          id="phone"
          placeholder="Enter Your Phone: "
        />
        <textarea
          name="other"
          id="other"
          cols="30"
          rows="10"
          placeholder="Enter Your Address"
        ></textarea>
        <div class="inside">
          <button class="btn">Submit</button>

          <button class="btn">Reset</button>
        </div>
      </form>
    </div>
    <script src="index.js"></script>
  </body>
</html>
