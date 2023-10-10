<?php
include "connection2.php";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $qualification=implode(",",$_POST['qualification']);
    $address=$_POST['address'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql =mysqli_query($conn,"INSERT INTO employe1(name,dob,gender,qualification,address,email,password) VALUES('$name','$dob','$gender','$qualification','$address','$email','$password')");

if($sql)
{
    echo'<script> alert("registered successfully");
    window.location.href="create.php";</script>';
}
else{
echo"something went wrong";

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
  <div class="container">
        <div class="row">
        <div class="col-4">
        </div>
            <div class="col-4 mt-5 bg-dark text-light p-5">
                <form method="POST">
                    <h2 class=text-light>Register</h2>
                    <label for="">Name</label>
                    <input type="text" class="form-control"name="name"required><br>
                    <label for="">Enter dob</label>
                    <input type="date"class="form-control"name="dob"required><br>
                    <label for="">Enter gender</label>
                    <input type="radio" name="gender" id="" value="male">male
                    <input type="radio" name="gender" id="" value="female">female
                    <br>
                    <label for="">Enter qualification</label>
                    <input type="checkbox" name="qualification[]" value="plus2">plus2
                    <input type="checkbox" name="qualification[]" value="degree">degree
                    <input type="checkbox" name="qualification[]" value="Masters">Masters<br>
                    <label for="">Enter address</label>
                    <input type="text"class="form-control"name="address"required><br>
                    <label for="">Enter email</label>
                    <input type="text"class="form-control"name="email"required><br>
                    <label for="">Enter password</label>
                    <input type="text"class="form-control"name="password"required><br>
                    <button type="submit"class="btn btn-danger mt-3 mx-5"  name="submit">Submit

                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>