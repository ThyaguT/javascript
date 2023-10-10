<?php
include "connection.php";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $filename=$_FILES["photo"]["name"];
    //file uploading
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder ="./image/".$filename;
    $image=$filename;
    $uploadOk =1;
    $imageFileType =strtolower(pathinfo($folder,PATHINFO_EXTENSION)); 
    if($imageFileType !="jpg" && $imageFileType != "png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
        echo "sorry, only jpg,jpeg,png&gif files are allowed";
        $uploadOk=0;
    }
    if($uploadOk == 0)
    {
        echo "sorry";
    }
    else{
        move_uploaded_file($tempname,$folder);
    }

    

$sql =mysqli_query($conn,"INSERT INTO datatable(name,email,mobile,photo) VALUES('$name','$email','$mobile','$image')");
$log = mysqli_insert_id($conn);
$sql1 = mysqli_query($conn,"INSERT INTO sessionlog(id,email,password) VALUES('$log', '$email','$password')");

if($sql)
{
    echo'<script> alert("registered successfully");
    window.location.href="sessionlogin.php";</script>';
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
                <form action=""method="POST">
                    <h2 class=text-light>Register</h2>
                    <label for="">Name</label>
                    <input type="text" class="form-control"name="name"required><br>
                    <label for="">Enter Email</label>
                    <input type="text"class="form-control"name="email"required><br>
                    <label for="">Enter password</label>
                    <input type="text"class="form-control"name="password"required><br>
                    <label for="">Enter mobile</label>
                    <input type="text"class="form-control"name="mobile"required><br>
                    <input type="file" name="photo">
                    <button type="submit"class="btn btn-danger mt-3 mx-5"  name="submit">Submit

                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>