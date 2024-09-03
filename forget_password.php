<?php

include('./databases/config.php');

if (isset($_POST['forget'])) {
    $username = $_POST["username"];
    $Newpassword = $_POST["password"];
    
    // Use a prepared statement to prevent SQL injection
    $stm = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stm->bind_param("s", $username);
    $stm->execute();

    $result = $stm->get_result();

    $row = $result->fetch_assoc();

    if ($row) {
        // User exists, update the password
        $stmt = $conn->prepare("UPDATE users SET password=? WHERE username=?");
        $stmt->bind_param("ss", $Newpassword, $username);

        if ($stmt->execute()) {
            // Password updated successfully
            echo '<script>';
            echo 'alert("Password updated successfully");';
            echo 'window.location.href="NewLogin.php";';
            echo '</script>';
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        // User does not exist
        echo '<script>';
        echo 'alert("Please register first.");';
        echo 'window.location.href="signup.php";';
        echo '</script>';
    }

    $stm->close();
    $conn->close();
}

?>
