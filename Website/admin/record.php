<?php
session_start();
if($_SESSION["status"] != "ok"){
    header("Location: ./login.php");
}
$date = $desc = $decsOp1 = $descOp2 = $descOp3 = $descOp4 = $descOp5 = $amount = $damount = $success = "";
$dateErr = $descErr = $amountErr = $damountErr = $successErr = "";

$server = "localhost";
$username = "u695870211_expenseDB";
$password = "adi.rana#1";
$dbname = "u695870211_expense";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["date"])){
        $dateErr = "Enter Valid Date";
    }
    else{
        $date = $_POST["date"];
    }
    if(empty($_POST["desc"])){
        $descErr = "Enter Valid Description";
    }
    else{
        $desc = $_POST["desc"];
    }
    if(!empty($_POST["amount"])){
        if(preg_match('/[0-9]/', $_POST["amount"])){
            $amount = $_POST["amount"];
        }
        else{
            $amountErr= "Enter Valid Amount";
        }
    }
    if(!empty($_POST["damount"])){
        if(preg_match('/[0-9]/', $_POST["damount"])){
            $damount = $_POST["damount"];
        }
        else{
            $damountErr= "Enter Valid Amount";
        }
    }
    $descOp1 = $_POST["descOp1"];
    $descOp2 = $_POST["descOp2"];
    $descOp3 = $_POST["descOp3"];
    $descOp4 = $_POST["descOp4"];
    $descOp5 = $_POST["descOp5"];
    
    if(!empty($_POST["date"]) && !empty($_POST["desc"])){
        $conn = new mysqli($server, $username, $password, $dbname);
        if(!$conn){
            echo "Error Connecting : " . $conn->error;
        }
        else{
            $query = "select * from expense order by tamount desc limit 1";
            $result = $conn -> query($query);
            
            while($row = $result -> fetch_assoc()){
                $lastamount = $row["tamount"];
            }
            $total_amount = $lastamount + $amount - $damount;
            $query = "insert into expense(ddate, ddesc, descOp1, descOp2, descOp3, descOp4, descOp5, amount, damount, tamount) values('$date', '$desc', '$descOp1', '$descOp2', '$descOp3', '$descOp4', '$descOp5', '$amount', '$damount', '$total_amount')";
            if(!$conn -> query($query)){
                echo "Error : " . $conn -> error;
                $successErr = $conn->error;
            }
            else{
                $success = "Record Added !!!";
            }
            $conn->close();
        }
    $date = $desc = $amount = $damount = $descOp1 = $descOp2 = $descOp3 = $descOp4 = $descOp5 = "";
    $dateErr = $descErr = $amountErr = $damountErr = "";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Expense</title>
    <meta name="robots" content="noindex">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">  
  <form id="contact" action="" method="POST">
    <h3>Add Expsense</h3>
    <fieldset>
      <input placeholde="Date" type="date" name="date" tabindex="1" autocomplete="off" value="<?= $date ?>">
    </fieldset>
    <span class = "error"><?= $dateErr ?></span>
    <fieldset>
      <input placeholder="Name" type="text" name="desc" tabindex="2" value="<?= $desc ?>">
    </fieldset>
    <span class = "error"><?= $descErr ?></span>
    <fieldset>
      <input placeholder="Father's Name (Optional)" type="text" name="descOp1" tabindex="3" value="<?= $descOp1 ?>">
    </fieldset>
    <fieldset>
      <input placeholder="Trade (Optional)" type="text" name="descOp2" tabindex="4" value="<?= $descOp2 ?>">
    </fieldset>
    <fieldset>
      <input placeholder="Session (Optional)" type="text" name="descOp3" tabindex="5" value="<?= $descOp3 ?>">
    </fieldset>
    <fieldset>
      <input placeholder="Type of Fee (Optional)" type="text" name="descOp4" tabindex="6" value="<?= $descOp4 ?>">
    </fieldset>
    <fieldset>
      <input placeholder="Bill No. (Optional)" type="text" name="descOp5" tabindex="7" value="<?= $descOp5 ?>">
    </fieldset>
    <fieldset>
      <input placeholder="Credit Amount" type="text" name="amount" tabindex="8" value="<?= $amount ?>">
    </fieldset>
    <fieldset>
      <input placeholder="Debit Amount" type="text" name="damount" tabindex="9" value="<?= $damount ?>">
    </fieldset>
    <span class = "error"><?= $amountErr ?></span>
    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Add Record</button>
    <p class = "success"><?= $success ?></p>
    <span class = "error"><?= $successErr ?></span>
  </form>

  
</div>
</body>
</html>
