<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Enter Name</p>
    <input type="text" name="name" required>

    <p>Enter Email</p>
    <input type="email" name="email" required>

    <p>Enter Password</p>
    <input type="text" name="pswd" required>

    <button type="submit" name=""btnn></button>


    <p>Enter Email</p>
    <input type="email" name="email" required>

    <p>Enter Password</p>
    <input type="text" name="pswd" required>
    
    <button type="submit" name=""btn2></button>
<?php
    if(isset($_POST["btnn"])){

        
$name=$_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$insert_query="INSERT INTO `userregister`( `Name`, `Email`, `Password`)
 VALUES ('$name')";

    }
else{

}
?>
</body>
</html>