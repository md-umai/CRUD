<?php
    if(isset($_GET['msg']))
    {
        $err = $_GET['msg'];
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
                        <h1 class='text-center'>Login Form</h1>
                        <p style='color:red'><?php if(!empty($err)) echo $err  ?></p>
                        <form action='d.php' method='POST'>
                        <div class='form-group'>
                            <label class='form-check-label'>Email</label>
                            <input type='email' class='form-control' name='n1' placeholder='Enter your email'>
                        </div>
                        <div class='form-group'>
                            <label class='form-check-label'>Password</label>
                            <input type='password' class='form-control' name='n2' placeholder='Enter your password'>
                        </div>
                        <div class='form-group'>
                            <button type='submit' name='login' class='btn btn-success' value='login'>Submit</button>
                            <p>If you dont have any account please <a href="s.php">click here</a> for signup</p>
                            
                        </div>
                        </form>
                    </div>
                    
                </div>
</div>
</body>
</html>
