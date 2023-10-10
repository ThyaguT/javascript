<?php
include "readconnect.php";
$id=$_GET['id'];
echo var_dump($id);
$sql=mysqli_query($conn,"SELECT * FROM datatable WHERE id='$id'");
$data=mysqli_fetch_assoc($sql);
if(isset($_POST['submit'])){
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Mobile=$_POST['Mobile'];
    $filename=$_FILES["photo"]["name"];
    //file uploading
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder ="./image/".$filename;
    $image=$filename;
    $uploadOk =1;
    $imageFileType =strtolower(pathinfo($folder,PATHINFO_EXTENSION)); 
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
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
    $sql1=mysqli_query($conn,"UPDATE datatable SET Name='$Name',Email='$Email',Mobile='$Mobile',photo='$image' WHERE id='$id'");
    if($sql1)
    {
        echo '<script> alert("updated sucessfully");window.location.href="read1.php";</script>';
    }
    else{
        echo '<script> alert("something went wrong");</script>';

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
<div class="col-4">
<form  method="post" enctype="multipart/form-data">

<input type="text" name="Name" class="form-control" value="<?php echo $data['Name'];?>"><br>
<input type="email" name="Email" class="form-control" value="<?php echo $data['Email'];?>"><br>
<input type="text" name="Mobile" class="form-control" value="<?php echo $data['Mobile'];?>"><br>
<input type="file" name="photo">
<input type="submit" value="submit" class="btn-danger" name="submit">




</form>





</div>




</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>