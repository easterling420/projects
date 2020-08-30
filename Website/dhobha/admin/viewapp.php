<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/view.css">
	<title>Appplication Form</title>
    </head>
    <body>
<?php
$server = "localhost";
$username = "u695870211_kbsingh";
$password = "userdb@699";
$dbname = "u695870211_myDB";

$conn = new mysqli($server, $username, $password, $dbname);
if(!$conn){
    echo "Error Connecting : " . $conn->error;
}
else{
    $query = "select * from application";
    $result = $conn -> query($query);
    if(!$result){
        echo "err : " . $conn -> error();
    }
    else{
        echo "<h1 font='open-sans'>Application Forms Received</h1>";
    echo '<table class="table table-bordered"> 
      <tr> 
          <th> <font face="Arial">Name</font> </th> 
          <th> <font face="Arial">Fathers Name</font> </th> 
          <th> <font face="Arial">Address</font> </th> 
          <th> <font face="Arial">Phone No.</font> </th> 
          <th> <font face="Arial">Alt. Phone No.</font> </th> 
      </tr>';
    while ($row = $result->fetch_assoc()){
        echo "
            <tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['fname'] . "</td>
                <td>" . $row['addr'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['altphone'] . "</td>
            </tr>";
    }}
    $result -> close();
}
$result -> close();
$conn -> close();
?>
</body>
</html>