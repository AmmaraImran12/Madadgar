<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once 'config.php';
    ?>
    <div class="container">
    <a href="Addhelper.php"><button type="button" style="float: right;" class="btn btn-dark"><i class="fa fa-plus" aria-hidden="true"></i> Add Category</button></a>
    
    <table class="table table-striped table-bordered">
        <style>
            th,td{
                text-align: center;
            }
        </style>
  <thead>
    <tr>
    
      <th scope="col">Name</th>
      <th scope="col">Phone_Number</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
<?php
$fetch_query = "SELECT * FROM `addhelper`";
$execute = mysqli_query($con, $fetch_query);
$row = mysqli_num_rows($execute);
$num = 1;
if($row > 0){
while($data = mysqli_fetch_array($execute)){

echo  '<tr style="text-align: justify;">
        <th scope="row">'.$num.'</th>
        <td>'.$data[1].'</td>
        <td class="text-wrap text-justify">'.$data[2].'</td>
        <td>
        <a href="update.php?updateid='.$data[0].'"><button type="submit" class="btn btn-info"><i class="material-icons">&#xe254;</i> Update</button></a>
        <br>
        <a href="delete.php?deleteid='.$data[0].'"><button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button></a>
        </td>
       </tr>';
       $num++;
}
}else{
    echo ' <tr>
      <th colspan="4" scope="row" style="color:red; text-align: center;">No record found</th>
    </tr>';
   
}

?>
</body>
</html>