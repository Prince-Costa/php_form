<?php

class FormData{  //initialing a class
    public $email;  //intialing property of class
    public $password;  //intialing property of class

    public function setEmailPassword($email, $password) //intialing a method for set property value
    {
        $this->email = $email;
        $this->password = $password;
    } 
    
    public function getData()  //intialing a method for get property value as a string
    {
        $data = 'You Submitted <br>Email: '.$this->email.'<br> Password: '.$this->password;
        return $data;
    }
}


$formData1 = new FormData; //creating new object ot FormData class

?>

<!DOCTYPE html>
<html>
<head>
	<title>Post Request</title>
</head>
<body>
    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {  //checking post method
            $email = $_POST['email'];                //setting email data from $_POST
             $password = $_POST['password'];         //setting password data from $_POST
            $formData1->setEmailPassword($email, $password);  //calling setter method by new object
            echo $formData1->getData().'<br><br><br>';        //calling getter method by new object
        }        
        ?>
    </div>
	<form method="POST" action="">
		<label for="email">Email:</label><br>
		<input type="email" id="email" name="email"><br>
		<label for="password">Password:</label><br>
		<input type="password" id="password" name="password"><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
