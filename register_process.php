<?php

include('./databases/config.php');

if (isset($_POST['register'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    $stm = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stm->bind_param("s", $username);
    $stm->execute();

    $result = $stm->get_result();

    $row = $result->fetch_assoc();
    $insertedUsername = $row['username'];


    if($username == $insertedUsername ){
        echo '<script>';

        echo 'alert("user already registerd");';

        echo 'window.location.href="sign.php";';

       echo '</script>';
        

    }

    else if ($stmt->execute()) {
        // echo "New record created successfully";
        echo '<script>';

             echo 'alert("Registerd");';

             echo 'window.location.href="NewLogin.php";';

            echo '</script>';

    } else {
        echo "Error: " . $stmt->error;
        
    }

    $stmt->close();
    $conn->close();
}

?>






