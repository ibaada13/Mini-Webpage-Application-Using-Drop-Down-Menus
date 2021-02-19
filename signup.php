<?php

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $email_pass = $_POST['email_pass'];

    $conn = new mysqli('localhost', 'root', '', 'assignment');
        if($conn->connect_error) {
            die('Connection has Failed : '.$conn->connect_error);
        }

        else {
            $stmt = $conn->prepare("Insert into signup(firstName, lastName, email, email_pass)values(?, ?, ?, ?)"); 
            $stmt->bind_param("ssss", $firstName, $lastName, $email, $email_pass);
            $stmt->execute();
            echo "Congratulations! Registration Was Successful!";
            $stmt->close();
            $conn->close();
        }

?>

