<?php
include 'dbconnect.php';
$f=NULL;
$l=NULL;
if(isset($_POST["sub"]))
{
$f=$_POST["mil"];
$l=$_POST["pas"];
$sql="SELECT * FROM `admin` WHERE `user`='$f' AND `pass`='$l'";
$result=mysqli_query($con,$sql);
header("location:study.php");

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
        <h1>Admin LOGIN</h1>
    <from action="#" method="post">
    
        <table align="center" cellpadding="10" >
            
            <tr>
                <td>Mail id</td>
                <td><input type="text" name="mil">
</tr>
<tr>
    <td>Password</td>
    <td><input type="password" name="pas">
</td>
</tr>
<tr>
    <td><input type="submit" name="sub" value="login">
</td>
</tr>
</table>

</div>
</form>
</body>
</html>