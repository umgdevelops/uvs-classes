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

<?php
    // incude("dbConn.php");
    // Define variables and initialize with empty values
    $done = "";
    $username = $password = $confirm_password = "";
    $username_err = $password_err = $confirm_password_err = "";
    
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // Validate password
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter a password.";     
        } elseif(strlen(trim($_POST["password"])) < 6){
            $password_err = "Password must have atleast 6 characters.";
        } else{
            $password = trim($_POST["password"]);
        }
        
        // Validate confirm password
        if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = "Please confirm password.";     
        } else{
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($password_err) && ($password != $confirm_password)){
                $confirm_password_err = "Password did not match.";
            }
        }
        $id = $_POST['username'];
        $pass=$_POST['password'];
        $sql = "update parent set pass=$pass where id=$id";
        if(mysqli_query($link,$sql)){   
            $done="<h4>Details Recorded Successfully!</h4>";  
        }
    else{echo mysqli_error($link);}
    }
?>

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


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="container containerForm d-flex justify-content-center">
            <div class="containInner">
                <div id="headTag"> 
                    <h2>REGISTER</h2>
                </div>
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>ParentID:</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>    
                
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="button" value="submit" value="Submit"><br>
                    <input type="reset" value="Reset">
                </div>

                <div id="subTag">
                    <center>
                        <p>Already Registered?
                            <b><a href="http://localhost/FinalTutions/pages/login.html">Login</a></b><?php echo $done; ?>
                        </p>
                    </center>
                </div>
            </div>
        </div>
    </form>

</body>
</html>