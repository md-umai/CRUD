<?php
include 'd_connect.php';
if(isset($_SESSION['mail']))
{
    $e = $_SESSION['mail'];
    $sql = "SELECT * FROM practice WHERE email ='$e'";
    $res = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($res);

    
    $op = $row['password'];
}
else
{
    header('location:http://localhost/practice/i.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<div class='container'>
                <div class='row my-5'>
                    <div class='col-6  border border-success mx-auto pt-3'>
                        <h1 class='text-center'>Change Password</h1>
                        <p style='color:red'><?php if(!empty($err)) echo $err  ?></p>
                        <form action='d.php?change_password' method='POST'>
                        <div class='form-group'>
                            <label class='form-check-label'>Old Password</label>
                            <input type='password' class='form-control' name='op' placeholder='Enter your old password' >
                        </div>
                        <div class='form-group'>
                            <label class='form-check-label'>New Password</label>
                            <input type='password' class='form-control' name='np' placeholder='Enter your new password'>
                        </div>
                        <div class='form-group'>
                            <label class='form-check-label'>Confirm Password</label>
                            <input type='password' class='form-control' name='cp' placeholder='confirm your password'>
                        </div>
                        <div class='form-group'>
                            <button type='submit'  class='btn btn-success' value='change'>Submit</button>
                            <!-- <p>If you dont have any account please <a href="s.php">click here</a> for signup</p> -->
                        </div>
                        </form>
                    </div>
                    
                </div>
</div>
</body>
</html>