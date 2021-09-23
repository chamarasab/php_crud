<?php
    if (isset($_POST['Submit'])) {

        $name = $_POST['txtName'];
        $address = $_POST['txtAddress'];
        $contact = $_POST['txtEmail'];
        $course = $_POST['txtCourse'];
        $password = $_POST['txtPassword'];

        $connection=mysqli_connect('localhost','root','','sliate');

        $insert_query = "INSERT INTO students (name,address,contact,course,password) VALUES ('".$name."','".$address."','".$contact."','".$course."','".$password."')";
        
        $result = mysqli_query($connection,$insert_query);

        if($result){
            echo "<div class='alert alert-success'> New student created successfully </div>";
        }
        else{
            echo "<div class='alert alert-danger'> Oops! Something went wrong. </div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;1,100&family=Raleway:wght@400&display=swap');
        h2{font-family: 'Raleway', sans-serif;}
        h1,p{font-family: 'Montserrat', sans-serif;}
    </style>
    <title>Insert</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SLIATE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="insert.php">Insert</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="retrieve.php">Retrieve</a>
            </li>
            
           
            
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>

    <div class="container mt-3">
        <h1>New student</h1>
        <div class="card mt-3">
            <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="txtName" aria-describedby="nameHelp"> 
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <input type="text" class="form-control" name="txtAddress" aria-describedby="addressHelp"> 
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="txtEmail" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Course</label>
                    <input type="text" class="form-control" name="txtCourse" aria-describedby="courseHelp"> 
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="txtPassword">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="txtConfirmPassword">
                </div>
            
                <input type="submit" name="Submit" class="btn btn-primary" value="Submit"/>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>