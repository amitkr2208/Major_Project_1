<?php

include('./databases/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result) {
        $row = $result->fetch_assoc();

        if ($row) {
            $insertedUsername = $row['username'];
            $insertedPassword = $row['password'];
            // echo "Fetched data successfully. Username: $insertedUsername, Password: $insertedPassword";
           
            header('Location: dashboard.php');
        } else {
            // echo "<script>alert('User Not Found');</script>";
            
            // header('Location: Student_Login1.php');
            echo '<script>';

             echo 'alert("user not found");';

             echo 'window.location.href="Student_Login1.php";';

            echo '</script>';
        }
    } else {
        echo "Error: " . $conn->error;
    }

   

    $stmt->close();
    $conn->close();
}

?>