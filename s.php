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
    <div class='col-6  border border-dark shadow mx-auto pt-3'>
        <h1 class='text-center'>SIGNUP</h1>
        <p style='color:red'><?php if(!empty($err)) echo $err  ?></p>
        <p style='color:green'><?php if(!empty($err1)) echo $err1  ?></p>
        <form action='d.php' method='POST'>
            <div class='form-group'>
                <label class='form-check-label'>Name</label>
                <input type='text' class='form-control' name='name' placeholder='Enter your email'>
            </div>
            <div class='form-group'>
                <label class='form-check-label'>Mobile</label>
                <input type='text' class='form-control' name='mobile' placeholder='Enter your mobile'>
            </div>
            <div class='form-group'>
                <label class='form-check-label'>Email</label>
                <input type='email' class='form-control' name='email' placeholder='Enter your email'>
            </div>
            <div class='form-group'>
                <label class='form-check-label'>Password</label>
                <input type='password' class='form-control' name='password' placeholder='Enter your password'>
            </div>
            <div class='form-group'>
                <button type='submit' name='signup' class='btn btn-success' value='signup'>SignUp</button>
            </div>
            <p>If already having an Account Please <a href="i.php">click here</a> to login</p>

        </form>
    </div>
                    
    </div>
</div>
</body>
</html>