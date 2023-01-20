<?php
include 'dbconnect.php';
$f=NULL;
$l=NULL;
$g=NULL;
$e=NULL;
$ps=NULL;
if(isset($_POST["sub"]))
{
$f=$_POST["finame"];
$l=$_POST["lnam"];
$g=$_POST["gender"];
$e=$_POST["em"];
$ps=$_POST["pass"];
$ps2=$_POST["pass1"];
if($ps==$ps2)
{
    $encryptedPassword=password_hash($ps,PASSWORD_DEFAULT);
    $sql="INSERT INTO `civil`( `fname`, `lname`, `gender`, `email`, `password`,`confirm password`) VALUES ('$f','$l','$g','$e','$ps','$ps2')";
$result=mysqli_query($con,$sql);
header("location:index.php");
}
else{
    echo"not sucess";
}

}
?>
</html>




<html>
    <head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
        <body>
        <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">IAS</span>Accademy</h1>
                </a>
            </div>
        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Study materials <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Indian Polity</a>
                                <a href="" class="dropdown-item">Geography</a>
                                <a href="" class="dropdown-item">Indian Economy</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Student Testimony</a>
                        <a href="" class="nav-item nav-link">How to use the app</a>
                        <a href="" class="nav-item nav-link">Piracy policy</a>
                        
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="shop.php" class="nav-item nav-link">About us</a>
                            <a href="detail.php" class="nav-item nav-link">Classes Detail</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="login.php" class="nav-item nav-link">Login</a>
                            <a href="register.php" class="nav-item nav-link">Register</a>
                        </div>
                    </div>
                </nav>
                
                    
                        <form method="post" action="#">
            <table border="3" cellpadding="30" align="center">
          <tr>
            <td>First Name</td>
            <td><input type="text" name="finame" placeholder="Enter the first name" id="fname" ></td>
            <td>Last Name</td>
            <td><input type="text" name="lnam" placeholder="Enter the last name" id="lname"></td>
</tr>
<tr>
<td>Gender</td>
    <td><input type="radio" name="gender" value="male" id="male">Male
    <input type="radio" name="gender" value="female" id="female">female
</td>
    <td>Email</td>
    <td><input type="mail" name="em" placeholder="Enter the Email" id="mail"></td>
</tr>
<tr>
    <td>Password</td>
    <td><input type="password" name="pass" id="pas"></td>
    <td>Confirm password</td>
    <td><input type="password" name="pass1">
</td>
</tr>
<tr>
    <td>
        <input type="submit" name="sub" value="submit" id="s"> 
</td>
</tr>
</table>
</form">
                        </div>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
    <a href="index.php">Continue to main page</a>

    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0"></h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0"></h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0"></h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0"></h5>
                </div>
            </div>
        </div>
    </div>
           
    <script>
			document.getElementById("s").addEventListener("click",fun1);
			
			function fun1(){
				var fname=document.getElementById("fname").value
				var lname=document.getElementById("lname").value
                var male=document.getElementById("male").value
                var female=document.getElementById("female").value
                var mail=document.getElementById("mail").value
                var pass=document.getElementById("pas").value
				var fname_doc=document.getElementById("fname")
				var lname_doc=document.getElementById("lname")
                var male_doc=document.getElementById("male")
                var female_doc=document.getElementById("female")
                var mail_doc=document.getElementById("mail")
                var pass_doc=document.getElementById("pas")
                
				if (fname == 0 && lname == 0){
					fname_doc.style.border="red solid 3px"
					lname_doc.style.border="red solid 3px"
					alert("*** Please Enter the Datails ***")
					return false;
				}
				else if (fname == 0){
					fname_doc.style.border="red solid 3px"
					alert("*** Please Enter the First Name ***")
					return false;
				}
				else if (lname == 0){
					lname_doc.style.border="red solid 3px"
					alert("*** Please Enter the Last Name ***")
				}
                if(mail==0)
                {
                    mail_doc.style.border="red solid 3px"
                   alert("Enter the mail");
                 }
			}
		</script>
</body>
</html>
