<?php
include "connection.php";
$sql =mysqli_query($conn,"SELECT*from emp_details;");
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      .parent{
        width: 250px;
        display: inline-block;
      }
    </style>
  </head>
  <body>
    <?php
    while($row = mysqli_fetch_assoc($sql))
    {
?>

<div class="parent">
<div class="card " style="width: 18rem;">
            <img src="./image/<?php echo $row['photo']; ?>" height="50px" width="50px" alt="">
            <div class="card-body">
              <h5 class="card-title">STUDENT DETAILS</h5>
              <p class="card-text"><?php echo $row['name']; ?></p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><?php echo $row['email']; ?></li>
              <li class="list-group-item"><?php echo $row['phone']; ?></li>
              <li class="list-group-item"><?php echo $row['password']; ?></li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-outline-success">Edit</a>
                <a href="emp_logout.php" class="btn btn-outline-info">logout</a>
                
            </div>
</div>
</div>
<?php    }
        ?>
    
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>