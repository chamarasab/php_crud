<?php

    if (isset($_POST['Submit'])) {
        $email = $_POST['txtEmail'];
        $password = $_POST['txtPassword'];
    
   
        $connection=mysqli_connect('localhost','root','','sliate');
        $query = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'";
        $result = mysqli_query($connection,$query);

        if (mysqli_fetch_assoc($result)!=null) {
            echo "<div class='alert alert-success'> Valid User </div>";
        }else{
            echo "<div class='alert alert-danger'> Inalid User </div>";
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
    <title>Form</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Form</h1>
        <div class="card mt-3">
            <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="txtEmail" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="txtPassword">
                </div>
            
                <input type="submit" name="Submit" class="btn btn-primary" value="Submit"/>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>