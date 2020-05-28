<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes</title>
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
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/86d6a674b4.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="http://localhost/FinalTutions/css/regLoginCss.css"> -->
</head>
<body>

<!-- ---------------   NAV-BAR  ---------------- -->
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
                    <li><a href="#" class="nav-link">ABOUT US</a></li>
                    <li><a href="#" class="nav-link">CONTACT US</a></li>
                    <li><a href="http://localhost/FinalTutions/pages/register.php" class="nav-link">SIGNUP <i class="fas fa-user-plus"></i></a></li>
                    <li><a href="http://localhost/FinalTutions/pages/loginStudent.php" class="nav-link">LOGIN <i class="fas fa-sign-in-alt"></i></i></a></li>
                </ul>
            </div>
        </nav>
    </div> <!--navMain-->

<!----------------------MARQUEE------------------>
    <?php
        include('phps/dbConn.php');
        $sql = "SELECT msg from ms";
        $result = mysqli_query($link,$sql);
        echo "<marquee>";
        while($row = mysqli_fetch_assoc($result)){
            echo $row['msg'];
        }
        echo "</marquee>";
    ?>
<center><p id="heading" style="color:rebeccapurple;
    font-weight: 700;
    font-size: 2.0rem;">MUKESH SIR'S GROUP TUTIONS</p></center>
<!-- -------------carousel secction------------------------- -->
    <section class="container-fluid align-items-baseline">
        <div class="row carouselRow">
            <div class="carouselColumn1 col-md-3 d-none d-md-block">
                <div class="card">
                    <img src="imgs\muks.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text align-items-center justify-content-center text-center"><span style="font-weight:700; font-size:1.0rem">We Believe</span></p>
                    </div>
                </div>
            </div>

            <div id="mainCarousel" class="col-12 col-md-9 carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mainCarousel" data-slide-to="1"></li>
                    <li data-target="#mainCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="imgs/class1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imgs/class2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imgs/class3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> <!--mainCarousel div-->

        </div>  <!-- row carousel-->
    </section>

<!---------------------- MOSAIC SECTION ---------------------------->
    <section id="mosaicSection" class="container-fluid">
        <div class="row align-items-center">
            <div class="col-4">
                <img class="img-fluid" src="imgs/phys.jpg" alt="">
            </div>
            <div class="col-4">
                <div class="text-mosaic text-center justify-content-center">
                    <h2>NEET</h2>
                    <p>
                        We aim to strongly immune our society with optimistic future health care services.
                    </p>
                </div>
            </div>
            <div class="col-4">
                <img class="img-fluid" src="imgs/commerce.jpg" alt="">
            </div>
        </div>
        <div class="row align-items-center">
                <div class="col-4">
                <div class="text-mosaic text-center justify-content-center">
                    <h2>IIT-jEE</h2>
                    <p>
                        Our institute believe in preparing young learning minds to the best in class future Engineers!!
                    </p>
                </div> 
                </div>
                <div class="col-4">
                    <img class="img-fluid" src="imgs/neetMbbs.jpg" alt="">
                </div>
                <div class="col-4">
                    <div class="text-mosaic text-center justify-content-center">
                        <h2>COMMERCE</h2>
                        <p>
                            A society must have bold economy. <br>So we are.
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <!-- MOSAIC TO CARDS -->
    <section id="mosaicToCard" class="container">
        <!-- card-1 -->
        <div class="card mx-auto">
            <div class="card-body">
                <div class="cardWrite">
                    <h3>IIT-jEE</h3>
                    <p class="card-text">
                    Our institute believe in preparing young learning minds to the best in class future Engineers!!
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="imgs/phys.jpg" class="card-img-top" alt="">
        </div>
        <!-- card-2 -->
        <div class="card mx-auto">
            <div class="card-body">
                <div class="cardWrite">
                    <h3>NEET</h3>
                    <p class="card-text">
                        We aim to strongly immune our society with optimistic future health care services.
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="imgs/commerce.jpg" class="card-img-top" alt="">
        </div>
        <!-- card-3 -->
        <div class="card mx-auto">
            <div class="card-body">
                <div class="cardWrite">
                    <h3>COMMERCE</h3>
                    <p class="card-text">
                    A society must have bold economy. <br>So we are.
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="imgs/neetMbbs.jpg" class="card-img-top" alt="">
        </div>
    </section>

<!-- ----------------ENQUIRY MAP SECTION---------------- -->
    <center>
        <div class="mapouter d-none d-md-block" style="margin-top:15px">
        <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=mukesh%20sir%20group%20tutions%20bhandup&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/elementor-pro-discount-code-review/">elementor review</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
        </div>
    </center>

    <script>
        function validate(){
            x= getElemenById("cont").value;
            if(x!==10){
                alert("enter 10 digit number!");
            }
            else{
                alert("good");
            }
        }
    </script>
    <div style="margin-bottom:20px; margin-top:20px;">
        <center>
        <h4>ENQUIRY</h4>
        <form action="#" method="POST ">
            <label for="enqName">Name</label><br>
            <input type="text" placeholder="Enter name" required><br>
            <label for="contact">Contact</label><br>
            <input type="phone" id="cont" placeholder="Enter Contact"><br>
            <label for="desc">Description</label><br>
            <textarea name="desc" id="desc" cols="50" rows="6"></textarea><br>
            <input type="button" value="submit" onclick="validate()">
        </form>
    </div>
        </center>
            

<!-- --------------------BOTTOM NAVIGATION SOCIALS-------------------- -->
    <nav class="socialNav navbar bottom navbar-expand shadow">
        <button class="navbar-toggler padding-bottom-0" data-toggle="collapse" data-target="#navSocials" aria-label="Toggle Navigation">
            <span><i class="fas fa-bars"></i></span>
        </button>
        <div class="nav  navbar-collapse justify-content-center" id="navSocials">
            <ul class="navbar-nav">
                <li><a href="#" class="nav-link"><img height="38px" width="38px" src="imgs/iconmonstr-facebook-4.svg" alt=""></a></li>
                <li><a href="#" class="nav-link"><img height="38px" width="38px" src="imgs/iconmonstr-instagram-14.svg" alt=""></a></li>
                <li><a href="#" class="nav-link"><img height="38px" width="38px" src="imgs/iconmonstr-phone-8.svg" alt=""></a></li>
                <li><a href="#" class="nav-link"><img height="38px" width="38px" src="imgs/iconmonstr-email-10.svg" alt=""></a></li>
            </ul>
        </div>
    </nav>

</body>
</html>