
 <?php
$servername = "localhost";
$usernameBD = "root";
$password = "";
$dbname = "sistema";

// Create connection
$conn = new mysqli($servername, $usernameBD, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "SELECT * FROM fornecedor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
       
    $id_fornecedor = $row['id_fornecedor'];

    // echo "<td>" . $row["nome_fornecedor"] .  "</td>";
    echo "<option>" . $row["nome_fornecedor"] .  "</option>";
    

      
  }

} else {
  echo "0 results";
}
$conn->close();








?>

    
        
   