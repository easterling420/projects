<?php
$user = $pass = "";
$userErr = $passErr = "";
$ver_user = $ver_pass = "";

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
            $query = "select username, AES_DECRYPT(password, 'passw') from admin";
            
            $result = $conn -> query($query);
            
            if(!$result){
                echo "Error Occured : " . $conn->error;
            }
            else{
                while($row = $result->fetch_assoc()){
                    $ver_user = $row["username"];
                    $ver_pass = $row["AES_DECRYPT(password, 'passw')"];
                }
            }
            
            $result->close();
            $conn->close();
            
            if($ver_user != $_POST["user"]){
                $userErr = "Invalid s Username";
            }
            if($ver_pass != $_POST["pass"]){
                $passErr = "Invalid s Password";
            }
            if($ver_user == $_POST["user"] and $ver_pass == $_POST["pass"]){
                $userErr = $passErr = "";
                session_start();
                $_SESSION["status"] = "ok";
                header("Location: ./choose-Action.php");
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="robots" content="noindex">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">  
  <form id="contact" action="" method="POST">
    <h3>Admin Authentication</h3>
    <fieldset>
      <input placeholder="User ID" type="text" name="user" tabindex="1" autocomplete="off" value="<?= $user ?>">
    </fieldset>
    <span class = "error"><?= $userErr ?></span>
    <fieldset>
      <input placeholder="Password" type="password" name="pass" tabindex="2" value="<?= $pass ?>">
    </fieldset>
    <span class = "error"><?= $passErr ?></span>
    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Login</button>
  </form>
</div>
</body>
</html>
