<?php include_once("home.html"); 
$servername = "uf63wl4z2daq9dbb.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "y83zbvzpsmhkv9u1";
$password = "p4nlaaog7kn86ajf";
$dbname = "c6gg8gz3f616n9de";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
echo "$row[question]<br/>";
echo "<script>";
 document.write($row[correct_answer]<br/>);   
    echo "$row[answer_2]<br/>";
    echo "$row[answer_3]<br/>";
    echo "$row[answer_4]<br/>";
echo "</script>";
    echo "<br/>";
}
} else {
  echo "0 results";
}
$conn->close();
?>
