<?php
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{
  $ename = $_POST['email'];  
  $pass = $_POST['password'];
  $result=mysqli_query($conn,"SELECT * FROM sessionlog WHERE email='$ename' and password='$pass'");
  if($result){

    $row =mysqli_fetch_assoc($result);

    $count=mysqli_num_rows($result);

    if($count ==1){
        $_SESSION['id']= $row['id'];
        ?>
        <script>
            window.location.assign('sessionhome.php');
        </script>
        <?php
    }
  }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="mb-3 col-sm-2">
  <form action="" method="POST">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-2">
      <input type="password" class="form-control"name="password" id="inputPassword">
    </div>
  </div>
  <input type="submit" class="btn btn-secondary mx-5" name="submit" value ="submit">
</Form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>