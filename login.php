<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content = " "  "width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>

        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col">
                    <form action="login.php" method="post">
                    <label for="">Email</label>    
                    <input type="email" name="email" placeholder="Enter your Email" class="form-control">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Enter your Password" class="form-control mb-3">
                    <input type="submit" name="btn" value="LOGIN" class="btn btn-primary">
                </form>
                </div>
            </div>
        </div>
<?php
$email = "najm.ullah93@gmail.com";
$pass  = 123456;

session_start();
if(isset($_POST["btn"]))
{
    if($email == $_POST["email"] && $pass == $_POST["password"]){
        $_SESSION["emaill"] = $_POST["email"];
        header("location: welcome.php");
    }else{

        echo "<h5>Your password or Email is incorrect</h5>";
    }
}


?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
