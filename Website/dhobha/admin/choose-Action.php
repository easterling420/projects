<?php
session_start();
if($_SESSION["status"] != "ok"){
    header("Location: ./login.php");
}
unset($_SESSION);
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Choose Action</title>
	<link rel="stylesheet" type="text/css" href="../css/chooseAction.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="outerContainer">
		<a href="./user-authentication.php"><div class="addUser trans">Add User</div></a>
		<br>
		<a href="./record.php"><div class="record trans">Add Expenses</div></a>
		<br>
		<a href="./view.php"><div class="record trans">View Expenses</div></a>
	    <br>
		<a href="./viewapp.php"><div class="record trans">Application Forms</div></a>
	</div>

</body>
</html>