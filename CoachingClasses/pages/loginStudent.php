<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- JQUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- POPPER.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--BOOTSTRAP JAVASCRIPT -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/FinalTutions/css/main.css"><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/FinalTutions/css/regLoginCss.css">
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/86d6a674b4.js"></script>
</head>
<body>
    <div class="navMain">
        <nav class="navbar fixed-top navbar-expand-md shadow">
            <a href="#" class="navbar-brand">
                <blockquote class="blockquote">
                    <p class="mb-0"><b>MT-EDU</b></p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </a>
            <button class="navbar-toggler padding-bottom-0" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle Navigation">
                <span><i class="fas fa-bars"></i></span>
            </button>
            <!-- Items to be collapsed -->
            <div class="nav collapse navbar-collapse justify-content-end" id="navLinks">
                <ul class="navbar-nav">
                    <li><a href="http://localhost/FinalTutions/index.php" class="nav-link">HOME</a></li>
                    <li><a href="#" class="nav-link">ABOUT US</a></li>
                    <li><a href="#" class="nav-link">CONTACT</a></li>
                    <li><a href="http://localhost/FinalTutions/pages/register.html" class="nav-link">SIGNUP <i class="fas fa-user-plus"></i></a></li>
                    <li><a href="http://localhost/FinalTutions/pages/loginStudent.php" class="nav-link">LOGIN <i class="fas fa-user"></i></a></li>
                </ul>
            </div>
        </nav>
    </div> <!--navMain-->

    <form action="http://localhost/FinalTutions/phps/loginStudentPhp.php" method="POST"> 
        <div class="container containerForm d-flex justify-content-center">
            <div class="containInner">
                <div id="headTag"> 
                    <h2>LOGIN</h2>
                </div>
                <div>
                    <label for="loginId">Login</label>
                    <input type="text" name="loginId" placeholder="Contact">
                </div>
                <div><label for="loginPassword">Password</label>
                    <input type="password" name="loginPassword" placeholder="Password">
                </div>
                <div id="subTag">
                    <center>
                        <button type="submit" name="submit" value="submit">Submit</button>
                        <p>Not Registered yet? 
                        <b><a href="http://localhost/FinalTutions/pages/register.php">Register</a></b>
                        </p>
                        <p>Are you a parent? 
                        <b><a href="http://localhost/FinalTutions/pages/loginParent.php">Login here.</a></b>
                        </p>
                    </center>
                </div>
            </div>
        </div>
    </form>

</body>
</html>