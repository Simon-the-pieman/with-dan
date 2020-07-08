<?php include_once("home.html"); 
$servername = "uf63wl4z2daq9dbb.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "y83zbvzpsmhkv9u1";
$password = "p4nlaaog7kn86ajf";
$dbname = "c6gg8gz3f616n9de";

// create function
echo "<script type='javascript'> function checkifright {alert ("alert")} </script>";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM questions";
$result = $conn->query($sql);
echo"<script type='application/javascript'>;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo "$row[question]<br/>";
    
    echo "$row[correct_answer]<br/> onclick='checkifright()'";
    echo "$row[answer_2]<br/> onclick='checkifright()'";
    echo "$row[answer_3]<br/> onclick='checkifright()'";
    echo "$row[answer_4]<br/> onclick='checkifright()'";

    echo "<br/>";
}
} else {
  echo "0 results";
}
</script>";
echo"</body>";
echo"</html>";
$conn->close();
?>
