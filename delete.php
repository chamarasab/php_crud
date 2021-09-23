<?php
    $connection=mysqli_connect('localhost','root','','sliate');

    $id = $_GET['id'];

    $delete_query = "DELETE FROM students WHERE id='".$id."'";
    
    $result = mysqli_query($connection,$delete_query);

    if($result){
        echo "<div class='alert alert-success'> Record deleted successfully </div>";
        header('location: retrieve.php');
    }
    else{
        echo "<div class='alert alert-danger'> Oops! Something went wrong. </div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Delete</title>
</head>
<body>
    
</body>
</html>