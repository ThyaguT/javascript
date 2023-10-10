<?php
include "readconnect.php";
$sql=mysqli_query($conn,"select * from datatable;");

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
    <table class="table table-primary">
<tr>
    <th>
        name
    </th>
    <th>
        email
    </th>
    <th>
        mobile
    </th>
    <th>
        photo
    </th>
    <th colspan="2">
        Action
    </th>
    
</tr>
<?php
while($row = mysqli_fetch_assoc($sql)){
?>
<tr>
    <td><?php echo $row['Name'];?></td>
    <td><?php echo $row['Email'];?></td>
    <td><?php echo $row['Mobile'];?></td>
    <td><img src="./image/<?php echo $row['photo'];?>" height="50px" width="50px" alt=""></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
     
</tr>
<?php
 } ?>


    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
    
</body>
</html>