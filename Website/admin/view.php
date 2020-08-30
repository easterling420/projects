<!DOCTYPE html>
<html>
    <head>
        <title>View Expense</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/view.css">
    </head>
    <body>
<?php
session_start();
if($_SESSION["status"] != "ok"){
    header("Location: ./login.php");
}
$server = "localhost";
$username = "u695870211_expenseDB";
$password = "adi.rana#1";
$dbname = "u695870211_expense";

$conn = new mysqli($server, $username, $password, $dbname);
if(!$conn){
    echo "Error Connecting : " . $conn->error;
}
else{
    $query = "select * from expense order by ddate asc";
    $result = $conn -> query($query);
    echo '<table class="table table-bordered" border=5> 
      <tr> 
          <th> <font face="Arial">Date</font> </th> 
          <th> <font face="Arial">Name</font> </th> 
          <th> <font face="Arial">Fathers Name</font></th> 
          <th> <font face="Arial">Trade</font> </th> 
          <th> <font face="Arial">Session</font> </th> 
          <th> <font face="Arial">Type of Fee</font> </th> 
          <th> <font face="Arial">Bill No.</font> </th> 
          <th> <font face="Arial">Credit Amount</font> </th> 
          <th> <font face="Arial">Debit Amount</font> </th> 
      </tr>';
    while ($row = $result->fetch_assoc()){
        echo "
            <tr>
                <td>" . $row['ddate'] . "</td>
                <td>" . $row['ddesc'] . "</td>
                <td>" . $row['descOp1'] . "</td>
                <td>" . $row['descOp2'] . "</td>
                <td>" . $row['descOp3'] . "</td>
                <td>" . $row['descOp4'] . "</td>
                <td>" . $row['descOp5'] . "</td>
                <td>" . $row['amount'] . "</td>
                <td>" . $row['damount'] . "</td>
            </tr>";
    }
    $result -> close();
    
    $cred = $deb = "";
    
    $query = "select sum(amount) from expense";
    $result = $conn -> query($query);
    
    while ($row = $result->fetch_assoc()){
        echo "<div>Total Credit : " . $row["sum(amount)"] . "</div>";
        $cred = $row["sum(amount)"];
    }
    
    $query = "select sum(damount) from expense";
    $result = $conn -> query($query);
    
    while ($row = $result->fetch_assoc()){
        echo "<div>Total Debit : " . $row["sum(damount)"] . "</div>";
        $deb = $row["sum(damount)"];
    }
    
    echo "<div> Total Available Balance : " . ($cred - $deb) . "</div><br><br>";
    
}
$result -> close();
$conn -> close();
?>
</body>
</html>