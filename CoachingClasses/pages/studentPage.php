<?php
session_start();
// if(isset($_SESSION['valid'])){
//     header("location:../index.php");
// }
if($_SESSION['valid']==true){
    $username = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>STUDENT DASHBOARD</title>
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/FinalTutions/css/main.css">
    <link rel="stylesheet" href="http://localhost/FinalTutions/css/adminPageCSS.css">
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/86d6a674b4.js"></script>
</head>
<body>

	<div class="navMain">
		<nav class="navbar fixed-top navbar-expand-md shadow">
			<a href="#" class="navbar-brand">
				<blockquote class="blockquote">
					<p class="mb-0">MT-EDU</p>
					<footer class="blockquote-footer">We just don't teach, <cite title="Source Title"><span style="font-weight:700;">we educate</span></cite></footer>
				</blockquote>
			</a>
			<button class="navbar-toggler padding-bottom-0" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle Navigation">
				<span><i class="fas fa-bars"></i></span>
			</button>
			<!-- Items to be collapsed -->
			<div class="nav collapse navbar-collapse justify-content-end" id="navLinks">
				<ul class="navbar-nav">
					<li><a href="http://localhost/FinalTutions/index.php" class="nav-link">HOME</a></li>
					<li><a href="#" class="nav-link">ADMISSION</a></li>
					<li><a href="#" class="nav-link">TESTS</a></li>
					<li><a href="http://localhost/FinalTutions/pages/register.html" class="nav-link">SIGNUP </a></li>
					<li><a href="http://localhost/FinalTutions/phps/logoutPhp.php" class="nav-link">LOGOUT <i class="fas fa-user"></i></a></li>
				</ul>
			</div>	
		</nav>
	</div> <!--navMain-->
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Welcome <span><?php echo $username ?></span></h1>
            <p class="lead" id="jumText" style="font-style:italic;">“Don't let what you cannot do interfere with what you can do.”</p>
        </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-nav col-3" id="colButtons" style="border-radius: 15px;">
				<ul class="nav flex-column ulButtons">
                    <li class="nav-item"><button class="nav-buttons nav-link w-100" type="menu" id="testRec">Test Records</button></li>
                    <li class="nav-item"><button class="nav-buttons nav-link w-100" type="menu" id="timeTab">Time Table</button></li>
                </ul>
            </div>
            <div class="col col-content" style="border-radius: 15px; margin-left:10px">
                <!-- php goes here -->
            </div>          
        </div>             
</div>
    
    <!-- JQUERY CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>                    
    <!-- POPPER.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!--BOOTSTRAP JAVASCRIPT -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $("#student").click(function(){
                alert("Student clicked.");
                var xhttp = new XMLHttpRequest();
                xhttp.open("GET", "http://localhost/FinalTutions/phps/studentData.php", true);
                xhttp.send();
                xhttp.onreadystatechange = function(){
                    if (this.readyState == 4 && this.status == 200){
                        alert("ENTERED AJAX!!");
                        var htmlstudData = JSON.parse(this.responseText);
                        console.log(htmlstudData);
                        document.getElementById("head1").innerHTML = "ID";
                        document.getElementById("head2").innerHTML = "First Name";
                        document.getElementById("head3").innerHTML = "Middle Name";
                        document.getElementById("head4").innerHTML = "Last Name";
                        var tableBody="";   
                        for(var i =0; i < htmlstudData.length; i++){
                            var id = htmlstudData[i].studId;
                            var firstName = htmlstudData[i].studFirstName;
                            var middleName = htmlstudData[i].studMidName;
                            var lastName = htmlstudData[i].studLastName;
                            tableBody += "<tr>";
                            tableBody += "<td>"+id+"</td>";
                            tableBody += "<td>"+firstName+"</td>";
                            tableBody += "<td>"+middleName+"</td>";
                            tableBody += "<td>"+lastName+"</td>";
                            tableBody += "</tr>";
                        }
                        // console.log(tableBody);
                        document.getElementById("studBody").innerHTML = tableBody;
                        // htmldispAjax += "</tbody></table>";
                    }
                };
            });
            $("#faculty").click(function(){
                alert("faculty was clicked.");
            });
            $("#fee").click(function(){
                alert("The paragraph was clicked.");
            });
            $("#subject").click(function(){
                alert("The paragraph was clicked.");
            });
            $("#notify").click(function(){
                alert("The paragraph was clicked.");
            });
        });
    </script>

    

</body>
</html>





