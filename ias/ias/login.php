<?php

include 'dbconnect.php';
session_start();

if(isset($_POST['sub'])){

   $user = $_POST['mail'];
   $pass =$_POST['pass'];

   $sql="SELECT * FROM `civil` WHERE email='$user' AND password='$pass'";
   $result=mysqli_query($sql);
   if(mysql_num_rows($result)==1)
   {
   echo "you have sucessfully logged in";
    
}
else{
    echo "You have enetered incorrect password";

}
header('location:index.php');

}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="lo.css" rel="stylesheet">
</head>
<body>
<div class ="center">
        <h1>LOGIN</h1>
    <from action="#" method="POST">
    
        <table align="center" cellpadding="10" >
            
            <tr>
                <td>Username/Mail id</td>
                <td><input type="text" name="mail">
</tr>
<tr>
    <td>Password</td>
    <td><input type="password" name="pass">
</td>
</tr>
<tr>
    <td><input type="submit" name="sub" value="login">
</td>
</tr>
<tr>
    <td>
Not a member..?<a href="register.php"><h2 style="color:red">Sign up</h2></a>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>