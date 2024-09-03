<?php
// Assuming you have a database table named 'users' with columns 'name' and 'email'

include('./database/config.php');
$sql = "SELECT * FROM users WHERE id = 1"; // Assuming user ID is 1

$result = $connect->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<p>Name: " . $row["name"]. "</p><p>Email: " . $row["email"]. "</p>";
  }
} else {
  echo "0 results";
}

$connnec->close();
?>
