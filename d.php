<?php
include 'd_connect.php';
if(isset($_POST['login']))
{
    $x = $_POST['n1'];
    $y = $_POST['n2'];
    $sql = "SELECT * FROM practice WHERE email = '$x'";
    $res = mysqli_query($con,$sql);
    $row = mysqli_fetch_row($res);
    if($row>0)
    {
        $sql = "SELECT * FROM practice WHERE password = '$y'";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_row($res);
        if($row>0)
        {
            $sql = "SELECT * FROM practice WHERE email = '$x' && password = '$y'";
            $res = mysqli_query($con,$sql);;
            $row = mysqli_fetch_array($res);
            $e = $row['email'];
            $_SESSION['mail'] = $e;
            $err = 'Login success';
            header('location:http://localhost/practice/p.php');
            
        }
        
        else
        {
            $err = 'Password is wrong';
            header('location:http://localhost/practice/i.php?msg='.$err);
        }
    }
    else
    {
        // $err = 'Email is wrong';
        header('location:http://localhost/practice/i.php?msg=Email is wrong');
    }
}
elseif(isset($_POST['signup']))
{
    $p = $_POST['name'];
    $q = $_POST['mobile'];
    $r = $_POST['email'];
    $s = $_POST['password'];
    $sql = "SELECT * FROM practice WHERE email = '$r'";
    $res = mysqli_query($con,$sql);
    $row = mysqli_fetch_row($res);
    if($row>0)
    {
        $err = 'Login with different Email Id';
        require 's.php';
    }
    else
    {
        $sql = "INSERT INTO practice VALUES('','$p','$q','$r','$s')";
        $res = mysqli_query($con,$sql);
        if($res==true)
        {
            // $err = 'Data inserted Successfully';
            require 'i.php';
        }
        else
        {
            $err = "something went wrong";
            require 's.php';

        }
    }
}
elseif(isset($_GET['e']))
{
    if(isset($_SESSION['mail']))
    {
        $e = $_GET['e'];
        require 'e.php';
        header('location:http://localhost/practice/e.php');
    }
    else
    {
        header('location:http://localhost/practice/i.php');
    }
    
}
elseif(isset($_GET['update']))
{
    if(isset($_SESSION['mail']))
    {
        // $e = $_GET['update'];
        $e = $_SESSION['mail'];
        $p = $_POST['name'];
        $q = $_POST['mobile'];
        $r = $_POST['password'];
        // $r = $_POST['email'];
        $sql = "UPDATE practice SET name='$p', mobile='$q', password='$r' WHERE email = '$e'";
        $res = mysqli_query($con,$sql);
        header('location:http://localhost/practice/p.php');
    }
    else
    {
        header('location:http://localhost/crud/i.php');
    }
    
}
elseif(isset($_GET['dlt']))
{
    // $e = $_GET['dlt'];
    $e = $_SESSION['mail'];
    $sql = "DELETE  FROM practice WHERE email = '$e'";
    $res = mysqli_query($con,$sql);
    header('location:http://localhost/practice/i.php');
}
elseif(isset($_GET['logout']))
{
    session_unset();
    session_destroy();
    header('location:http://localhost/practice/i.php');
}
elseif(isset($_GET['change_password']))
{
    if(isset($_SESSION['mail']))
    {
        $e = $_SESSION['mail'];
        $op = $_POST['op'];
        $np = $_POST['np'];
        $cp = $_POST['cp'];

    
        $sql = "SELECT * FROM practice WHERE password = '$op'";
        $res = mysqli_query($con,$sql);
        $row = mysqli_fetch_row($res);
        if($row>0)
        {
            $e = $_SESSION['mail'];
            $np = $_POST['np'];
            $cp = $_POST['cp'];
            echo $np.$cp;
            if((!empty($np))==(!empty($cp)))
            {
                $sql = "UPDATE practice SET password='$cp' WHERE email ='$e' ";
                $res = mysqli_query($con,$sql);
                header('location:http://localhost/practice/p.php');
            }
            else
            {
                $err = "Confirm Password Is Wrong";
                header('location:http://localhost/practice/p.php');
            }

        }
        else
        {
            $err = "Old Password Is Wrong";
            header('location:http://localhost/practice/p.php');
        }

    }   
    
}
        


?>