<?php
session_start();
if($_SESSION["status"] != "ok"){
    die(header("Location: ./login.php"));
}
$user = $pass = $success = "";
$userErr = $passErr = $successErr = "";

$server = "localhost";
$username = "u695870211_kbsingh";
$password = "userdb@699";
$dbname = "u695870211_myDB";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["user"])){
        $userErr = "Enter Valid Username";
    }
    else{
        $user = $_POST["user"];
    }
    if(empty($_POST["pass"])){
        $passErr = "Enter Valid Password";
    }
    else{
        $pass = $_POST["pass"];
    }
    if(!empty($_POST["user"]) && !empty($_POST["pass"])){
        $conn = new mysqli($server, $username, $password, $dbname);
        if(!$conn){
            echo "Error Connecting : " . $conn->error;
        }
        else{
            $query = "insert into d_users(username, password) values('$user', '$pass')";
            if(!$conn -> query($query)){
                $successErr = $conn->error;
            }
            else{
                $success = "Record Added !!!";
            }
            $conn->close();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Authentication</title>
	<meta name="robots" content="noindex">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
<div class="container">  
  <form id="contact" action="" method="POST">
    <h3>User Authentication</h3>
    <fieldset>
      <input placeholder="User ID" type="text" name="user" tabindex="1" autocomplete="off">
    </fieldset>
    <span class = "error"><?= $userErr ?></span>
    <fieldset>
      <input placeholder="Password" type="text" name="pass" tabindex="2">
    </fieldset>
    <span class = "error"><?= $passErr ?></span>
    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Add User</button>
    <p class = "success"><?= $success ?></p>
    <p class = "success"><?= $successErr ?></p>
  </form>
</div>
</body>
</html>
