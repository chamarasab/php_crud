<?php
    $connection=mysqli_connect('localhost','root','','sliate');
    $query="SELECT * FROM students";
    $result=mysqli_query($connection,$query);
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
    <title>Retrieve</title>
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

    <div class="container mt-5">
        <h1>View all students</h1>
        <div class="card mt-3">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Email</th>
                            <th scope="col">Course</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($record=mysqli_fetch_assoc($result)) {?>
                        
                        <tr>
                            <td> <?php echo $record['id']?> </td>
                            <td> <?php echo $record['name']?> </td>
                            <td> <?php echo $record['address']?> </td>
                            <td> <?php echo $record['contact']?> </td>
                            <td> <?php echo $record['course']?> </td>
                            <td style="text-align:right"> 
                                <a href="http://localhost/course/delete.php?id=<?php echo $record['id']?>" class="btn btn-danger">Delete</a>
                                <a href="http://localhost/course/update.php?id=<?php echo $record['id']?>" class="btn btn-warning">Update</a>
                                <!--<input type="button" name="Delete" class="btn btn-danger" value="Delete"/>
                                <button type="button" class="btn btn-warning">Update</button> -->
                            </td>
                        </tr>

                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>