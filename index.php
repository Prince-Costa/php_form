<?php

class FormData{  //initialing a class
    public $num1;  //intialing property of class
    public $num2;  //intialing property of class

    public function setNumber($num1, $num2) //intialing a method for set property value
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    } 
    
    public function getData()  //intialing a method for get property value as a string
    {
        // $data = 'You Sended <br>Number 1: '.$this->num1.'<br> Number 2: '.$this->num2.'<br> And, Ans is: '.$this->num1 +  $this->num2;
        $data = $this->num1 +  $this->num2;
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
    <!-- <div>
        
    </div> -->
	<form method="POST" action="">
		<label for="num1">Number 1:</label><br>
		<input type="text" id="num1" name="num1"><br>
		<label for="num2">Number 2:</label><br>
		<input type="text" id="num2" name="num2"><br>

        <label for="result">Result</label><br>
		<input type="text" id="result" value= <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {  //checking post method
            $num1 = $_POST['num1'];                //setting num1 data from $_POST
            $num2 = $_POST['num2'];         //setting num2 data from $_POST
            $formData1->setNumber($num1, $num2);  //calling setter method by new object
            echo "". $formData1->getData()."";        //calling getter method by new object
        }        
        ?>> <br>

		<button type="submit" value="Sum">Sum</button>
	</form>
</body>
</html>
