 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <!-- JQUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- POPPER.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--BOOTSTRAP JAVASCRIPT -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/FinalTutions/css/main.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/FinalTutions/css/regLoginCss.css">
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/86d6a674b4.js"></script>
</head>
<body>
<div class="navMain">
        <nav class="navbar fixed-top navbar-expand-md shadow">
            <a href="#" class="navbar-brand">
                <blockquote class="blockquote">
                    <p class="mb-0"><b>MT-EDU</b></p>
                    <footer class="blockquote-footer">We just don't teach, <cite title="Source Title"><span style="font-weight:700;">we educate</span></cite></footer>
                </blockquote>
            </a>
            <button class="navbar-toggler padding-bottom-0" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle Navigation">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Items to be collapsed -->
            <div class="nav collapse navbar-collapse justify-content-end" id="navLinks">
                <ul class="navbar-nav">
                    <li><a href="http://localhost/FinalTutions/index.php" class="nav-link">HOME</a></li>
                    <li><a href="#" class="nav-link">ADMISSION</a></li>
                    <li><a href="#" class="nav-link">TESTS</a></li>
                    <li><a href="http://localhost/FinalTutions/pages/register.html" class="nav-link">SIGNUP <i class="fas fa-user-plus"></i></a></li>
                    <li><a href="http://localhost/FinalTutions/pages/login.html" class="nav-link">LOGIN <i class="fas fa-sign-in-alt"></i></i></a></li>
                </ul>
            </div>
        </nav>
    </div> <!--navMain-->

    <div class="wrapper">
       
        <form   method="post" action="login.php">
        <div class="container containerForm d-flex justify-content-center">
        <div class="containInner">
        <center>Please fill in your credentials to login.</center><br>
            <div id="headTag">
                <h2>Login</h2>
            </div>
            <div >
                <label>Contact No.</label>
                <input type="text" required name="user" class="form-control" >
                
            </div>    
            <div >
                <label>Password</label>
                <input type="password" name="password" class="form-control" required><br>
                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="Login">
            </div>
            <p>Don't have an account? OR Forgot your password?</p> 
            <p>Students<a href="signupstud.php">Click here.</a></p>
            <p>Parents<a href="signuppar.php">  Click here.</a></p>
        </div>
        </div>
        </form>
    </div>    
    <?php
    
if(isset($_POST['Login']))
{
// If form submitted, insert values into the database.
 include('connection.php');
$user=$_POST['user'];
$pass=$_POST['password'];


if($user=="admin" AND $pass="admin")
{
header("location:adminPage.php");
}
else
{  
$sql = "select pass from student where contact=$user";
$result=mysqli_query($link,$sql);
$row= mysqli_fetch_array($result);
$r= $row['pass'];

$sql = "select pass from parent where contact=$user";
$res=mysqli_query($link,$sql);
$row= mysqli_fetch_array($res);
$r1= $row['pass'];

   
   if($r == $pass)
   {  
      
   session_start();
   $_SESSION['stud']= $user;

   header("location:studentPage.php");
   
   }
   elseif($r1 == $pass)
   {
      
   session_start();
   $_SESSION['par']= $user;   
   header("location:afterlogin.php");

   }
   else
   {
   echo "<h1>Incorrect Password.</h1><br>";

   }


}
}
    ?>


</body>
</html>


