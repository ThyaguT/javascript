<?php
include"connection.php";
session_start();
if(isset($_POST['submit'])){
    $username=$_POST['email'];
    $password=$_POST['password'];
    $result=mysqli_query($conn,"SELECT * FROM login WHERE email='$username'");
    if($result){
        $row=mysqli_fetch_assoc($result);
        $hash = password_verify($password,$row['password']);
        $count=mysqli_num_rows($result);
        if($count==1 && $hash){
            $_SESSION['id']=$row['loginid'];
        }
        ?>
        <script>window.location.assign("emp_card.php");</script>
        <?php
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-4">
        </div>
            <div class="col-4 mt-5 bg-dark text-light p-5">
                <form action=""method="POST">
                    <h2 class=text-light> Employee Login</h2>
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" required><br>
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" required><br>
                    <input type="submit" class="btn btn-primary" value="submit" name="submit"> 
                    
                   

                 
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>