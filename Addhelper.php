<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <p>Add Helper</p>
        <form action="" method="$_POST">
        <p>Helper Name</p>
        <input type="text" class="form-control form-control-sm" name="Hname" required>

        <p>Helper Phone_Number</p>
        <input type="text" class="form-control form-control-sm" name="pnum" required>


        <p> Helper Age</p>
        <input type="text" name="age" >

        <button type="submit" class="btn btn-success" name="submit">Add Hepler</button>

        </form>

    </center>
    <?php

if(isset($_POST['submit'])){
    $name =$_POST["Hname"];
    $phone = $_POST['Pnum'];
    $age = $_POST['age'];

    $insert = "INSERT INTO `INSERT INTO `addhelper`( `Name`, `Phone`, `Age`) VALUES ('$name','$phone','$age')";
    $execute = mysqli_query($con, $insert);

    if($execute){
        echo "<script>
                alert('Helper added successfully');
                window.location.href = 'Addhelper.php';
             </script>";
    }else{
        echo "<script>
        alert('".die(mysqli_error($con))."');
        window.location.href = 'Addhelper.php';
     </script>";
    }
}
?>
</body>
</html>