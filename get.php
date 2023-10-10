<html>
    <body>
        
    <form method="get">
        Username:<input type="text" name="username"><br>
        BloodGroup:<input type="text" name="blood"><br>
        <button type="submit"name="submit">Submit</button>
    </form>
    </body>
</html>
<?php
if(isset($_GET)){
    $username=$_GET['username'];
    $bloodGroup=$_GET['blood'];
    echo "$username,$bloodGroup";

}
?>