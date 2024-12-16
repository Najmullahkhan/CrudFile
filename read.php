<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<?php    
require("connection.php");
if(isset($_GET["id"]))
{
   $id =  $_GET["id"];
   $select = "SELECT * FROM `student` WHERE ID = $id";
   $result = mysqli_query($connection,$select);
   $row = mysqli_fetch_assoc($result);
}


?>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
            <div class="p-3 mb-2 bg-warning text-white  text-center rounded"><h2>UPDATE</h2></div>
                <form action="Update.php" method="post">    
                <input type="hidden" class="form-control " value="<?php echo $row["ID"]; ?>">
                <label for="">Name</label> 
                <input type="text" name="name" class="form-control" value="<?php echo $row["Name"]; ?>">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $row["Email"]; ?>">
                <input type="submit" class="btn btn-warning mt-3">
            </form>
            </div>
        </div>
    </div>
    <?php

if(isset($_POST["btn"]))
{
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $query = "UPDATE `student` SET `Name`='$name',`Email`='$email' WHERE ID = $id";
    mysqli_query($connection,$query);
    header("location: Read.php");
}

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>



