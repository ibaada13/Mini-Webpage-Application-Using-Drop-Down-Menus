<?php

    if (isset($_POST['email']) == true && empty($_POST['email']) == false) {
        $useremail = $_POST['email'];

    }

    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "Please Enter All Fields";
    }
    else {
        
    }


    $validation="";

    if(count($_POST) > 0) {
	    $conn = mysqli_connect('localhost','root','','assignment');
	    $result = mysqli_query($conn, "SELECT * FROM signup WHERE email='" . $_POST["email"] . "' and email_pass = '". $_POST["password"]."'");
        $count  = mysqli_num_rows($result);
    
	if($count == 0) {
		$validation = "Invalid Email or Password!";
    } 
    
    else {
		include ("mainpage.html");
    }
    
    echo $validation;
}


?>