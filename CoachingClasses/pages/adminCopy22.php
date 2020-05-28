<html>
<head>
    <title>ADMIN PANEL</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>ADMIN DASHBOARD</title>
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/FinalTutions/css/main.css">
    <link rel="stylesheet" href="http://localhost/FinalTutions/css/adminPageCSS.css">
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/86d6a674b4.js"></script>
    

</head>

<body>
	<!-- <link rel="stylesheet" type="text/css" href="rg.css"> -->

<div class="navMain">
    <nav class="navbar fixed-top navbar-expand-md shadow">
        <a href="#" class="navbar-brand">
            <blockquote class="blockquote">
                <p class="mb-0">MT-EDU</p>
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
					<li><a href="#" class="nav-link">ADMISSION</a></li>
					<li><a href="#" class="nav-link">TESTS</a></li>
					<li><a href="http://localhost/FinalTutions/pages/register.html" class="nav-link">SIGNUP </a></li>
					<li><a href="http://localhost/FinalTutions/pages/login.html" class="nav-link">LOGIN <i class="fas fa-user"></i></a></li>
				</ul>
			</div>	
		</nav>
	</div> <!--navMain-->
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Welcome <span>Admin</span></h1>
            <p class="lead" id="jumText" style="font-style:italic;">“Don't let what you cannot do interfere with what you can do.”</p>
        </div>
    </div>

    <form method="post">
		<div align="center" style="box-sizing: border-box;">
            <input class="buttons" type="submit" name="disp1" value="Student" style="height: 67px; width:110px">
            <input class="buttons" type="submit" name="disp2" value="Parent" style="height: 67px; width:110px"> 
            <input class="buttons" type="submit" name="disp3" value="Teacher" style="height: 67px; width:110px"> 
            <input class="buttons" type="submit" name="disp4" value="Subject" style="height: 67px; width:110px"> 
            <input class="buttons" type="submit" name="disp5" value="Fees" style="height: 67px; width:110px"> 
            <input class="buttons" type="submit" name="disp6" value="Enquiry" style="height: 67px; width:110px"> 
            <input class="buttons" type="submit" name="disp7" value="Delete" style="height: 67px; width:110px">
            <input class="buttons" type="submit" name="disp8" value="Entry" style="height: 67px; width:110px">
            <input class="buttons" type="submit" name="disp9" value="TimeTable" style="height: 67px; width:110px"> 
            <input class="buttons" type="submit" name="disp10" value="Alert" style="height: 67px; width:110px">
            <input class="buttons" type="submit" name="disp11" value="Update" style="height: 67px; width:110px">
	    </div>
    </form>



 <?php
$servername = "localhost";
$username = "root";
$password = "Shree@1999";
$dbname = "msgt";


$link = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) 
{
   die("Connect failed: %s\n" + mysqli_connect_error());
   exit();
} 

print '<link rel="stylesheet" href="adminPageCSS.css" type="text/css">';
#print '<link rel="stylesheet" href="main.css" type="text/css">';

if(isset($_POST['disp1'])) 
{
$sql = "SELECT id,name,gender,contact,email,admYear,addr from student";
$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px' style = 'overflow:scroll' >\n";
print "<tr><th>ID</th><th>Name</th><th>Sex</th><th>Contact</th><th>Email</th><th>AdmYear</th><th>Address</th></tr>" ;
while($row = mysqli_fetch_row($result)) 
{  
   print "<tr>\n";
   foreach($row as $field) 
   {
       print "<td>$field</td>\n";
   }
   print "</tr>\n";
   
}

print "</table>\n";
}

if(isset($_POST['disp2'])) 
{
$sql = "SELECT student.id,student.name,parent.id, parent.name,parent.contact from student left join parent on student.parid=parent.id";
$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
print "<tr><th>StudentID</th><th>Name</th><th>ParentID</th><th>Name</th><th>Contact</th>" ;
while($row = mysqli_fetch_row($result)) {
   print "<tr>\n";
   foreach($row as $field) {
       print "<td>$field</td>\n";
   }
   print "</tr>\n";
}
print "</table>\n";
}

if(isset($_POST['disp3'])) 
{
$sql = "SELECT id,name,contact,subject,pay,lect,lecttaken,cancel from teacher";
$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
print "<tr><th>ID</th><th>Name</th><th>Contact</th><th>Subject</th><th>Pay(per lect.)</th><th>Week Lect(Total)</th><th>Completed</th><th>Cancelled</th></tr>" ;
while($row = mysqli_fetch_row($result)) {
   print "<tr>\n";
   foreach($row as $field) {
       print "<td>$field</td>\n";
   }
   print "</tr>\n";
}
print "</table>\n";
}

if(isset($_POST['disp4'])) 
{
$sql = "SELECT * from subject";
$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
print '<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
		<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>';
print "<table id='myTable' border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px' style = 'overflow:scroll'>\n";
print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
while($row = mysqli_fetch_row($result)) {
   print "<tr>\n";
   foreach($row as $field) {
       print "<td>$field</td>\n";
   }
   print "</tr>\n";
}
print '</table>';

print '<br><br><br><form method="POST"><div align="center"><input type="submit" name="sci" value="Science" autofocus style="height: 67px; width:110px"><input type="submit" name="comm" value="Comm" style="height: 67px; width:110px"></div></form><br><br><br>';
}

if(isset($_POST['sci']))
{
		$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

		print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="11sci" value="XI" autofocus style="height: 67px; width:110px"><input type="submit" name="12sci" value="XII" style="height: 67px; width:110px"></form></div>';


}

if(isset($_POST['comm']))
{
		$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

		print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="11comm" value="XI" autofocus style="height: 67px; width:110px"><input type="submit" name="12comm" value="XII" style="height: 67px; width:110px"></form></div>';

}

if(isset($_POST['11sci']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="phy" value="Physics" autofocus style="height: 67px; width:110px"><input type="submit" name="chem" value="Chemistry" style="height: 67px; width:110px"><input type="submit" name="math" value="Math" style="height: 67px; width:110px"><input type="submit" name="bio" value="Biology" style="height: 67px; width:110px"><input type="submit" name="cs" value="Comp Sci" style="height: 67px; width:110px"></form></div>';

}


if(isset($_POST['phy']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="phy" value="Physics" style="height: 67px; width:110px"><input type="submit" name="chem" value="Chemistry" style="height: 67px; width:110px"><input type="submit" name="math" value="Math" autofocus style="height: 67px; width:110px"><input type="submit" name="bio" value="Biology" style="height: 67px; width:110px"><input type="submit" name="cs" value="Comp Sci" style="height: 67px; width:110px"></form></div>';

	$s=" SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=1";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}

if(isset($_POST['chem']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="phy" value="Physics" style="height: 67px; width:110px"><input type="submit" name="chem" value="Chemistry" style="height: 67px; width:110px"><input type="submit" name="math" value="Math" autofocus style="height: 67px; width:110px"><input type="submit" name="bio" value="Biology" style="height: 67px; width:110px"><input type="submit" name="cs" value="Comp Sci" style="height: 67px; width:110px"></form></div>';

	$s=" SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=2";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['math']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="phy" value="Physics" style="height: 67px; width:110px"><input type="submit" name="chem" value="Chemistry" style="height: 67px; width:110px"><input type="submit" name="math" value="Math" autofocus style="height: 67px; width:110px"><input type="submit" name="bio" value="Biology" style="height: 67px; width:110px"><input type="submit" name="cs" value="Comp Sci" style="height: 67px; width:110px"></form></div>';

	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=3";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['bio']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="phy" value="Physics" style="height: 67px; width:110px"><input type="submit" name="chem" value="Chemistry" style="height: 67px; width:110px"><input type="submit" name="math" value="Math" autofocus style="height: 67px; width:110px"><input type="submit" name="bio" value="Biology" style="height: 67px; width:110px"><input type="submit" name="cs" value="Comp Sci" style="height: 67px; width:110px"></form></div>';

	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=4";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['cs']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="phy" value="Physics" style="height: 67px; width:110px"><input type="submit" name="chem" value="Chemistry" style="height: 67px; width:110px"><input type="submit" name="math" value="Math" autofocus style="height: 67px; width:110px"><input type="submit" name="bio" value="Biology" style="height: 67px; width:110px"><input type="submit" name="cs" value="Comp Sci" style="height: 67px; width:110px"></form></div>';

	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=5";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['12sci']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";
	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="PHY" value="Physics" autofocus style="height: 67px; width:110px"><input type="submit" name="CHEM" value="Chemistry" style="height: 67px; width:110px"><input type="submit" name="MATH" value="Math" style="height: 67px; width:110px"><input type="submit" name="BIO" value="Biology" style="height: 67px; width:110px"><input type="submit" name="CS" value="Comp Sci" style="height: 67px; width:110px"></form></div>';

}


if(isset($_POST['PHY']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="PHY" value="Physics" autofocus style="height: 67px; width:110px"><input type="submit" name="CHEM" value="Chemistry" style="height: 67px; width:110px"><input type="submit" name="MATH" value="Math" style="height: 67px; width:110px"><input type="submit" name="BIO" value="Biology" style="height: 67px; width:110px"><input type="submit" name="CS" value="Comp Sci" style="height: 67px; width:110px"></form></div>';

	$s=" SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=6";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}

if(isset($_POST['CHEM']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="PHY" value="Physics" autofocus style="height: 67px; width:110px"><input type="submit" name="CHEM" value="Chemistry" style="height: 67px; width:110px"><input type="submit" name="MATH" value="Math" style="height: 67px; width:110px"><input type="submit" name="BIO" value="Biology" style="height: 67px; width:110px"><input type="submit" name="CS" value="Comp Sci" style="height: 67px; width:110px"></form></div>';


	$s=" SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=7";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['MATH']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="PHY" value="Physics" autofocus style="height: 67px; width:110px"><input type="submit" name="CHEM" value="Chemistry" style="height: 67px; width:110px"><input type="submit" name="MATH" value="Math" style="height: 67px; width:110px"><input type="submit" name="BIO" value="Biology" style="height: 67px; width:110px"><input type="submit" name="CS" value="Comp Sci" style="height: 67px; width:110px"></form></div>';


	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=8";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['BIO']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="PHY" value="Physics" autofocus style="height: 67px; width:110px"><input type="submit" name="CHEM" value="Chemistry" style="height: 67px; width:110px"><input type="submit" name="MATH" value="Math" style="height: 67px; width:110px"><input type="submit" name="BIO" value="Biology" style="height: 67px; width:110px"><input type="submit" name="CS" value="Comp Sci" style="height: 67px; width:110px"></form></div>';


	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=9";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['CS']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="PHY" value="Physics" autofocus style="height: 67px; width:110px"><input type="submit" name="CHEM" value="Chemistry" style="height: 67px; width:110px"><input type="submit" name="MATH" value="Math" style="height: 67px; width:110px"><input type="submit" name="BIO" value="Biology" style="height: 67px; width:110px"><input type="submit" name="CS" value="Comp Sci" style="height: 67px; width:110px"></form></div>';


	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=10";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}




if(isset($_POST['11comm']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="bk" value="BK" autofocus style="height: 67px; width:110px"><input type="submit" name="ocm" value="OCM" style="height: 67px; width:110px"><input type="submit" name="cmath" value="Math" style="height: 67px; width:110px"><input type="submit" name="sp" value="SP" style="height: 67px; width:110px"><input type="submit" name="eco" value="Economics" style="height: 67px; width:110px"></form></div>';

}


if(isset($_POST['bk']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="bk" value="BK" style="height: 67px; width:110px"><input type="submit" name="ocm" value="OCM" style="height: 67px; width:110px"><input type="submit" name="cmath" value="Math" style="height: 67px; width:110px"><input type="submit" name="sp" value="SP" style="height: 67px; width:110px"><input type="submit" name="eco" autofocus value="Economics" style="height: 67px; width:110px"></form></div>';

	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=11";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['ocm']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="bk" value="BK" style="height: 67px; width:110px"><input type="submit" name="ocm" value="OCM" style="height: 67px; width:110px"><input type="submit" name="cmath" value="Math" style="height: 67px; width:110px"><input type="submit" name="sp" value="SP" style="height: 67px; width:110px"><input type="submit" name="eco" autofocus value="Economics" style="height: 67px; width:110px"></form></div>';

	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=12";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['cmath']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="bk" value="BK" style="height: 67px; width:110px"><input type="submit" name="ocm" value="OCM" style="height: 67px; width:110px"><input type="submit" name="cmath" value="Math" style="height: 67px; width:110px"><input type="submit" name="sp" value="SP" style="height: 67px; width:110px"><input type="submit" name="eco" autofocus value="Economics" style="height: 67px; width:110px"></form></div>';

	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=13";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['sp']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="bk" value="BK" style="height: 67px; width:110px"><input type="submit" name="ocm" value="OCM" style="height: 67px; width:110px"><input type="submit" name="cmath" value="Math" style="height: 67px; width:110px"><input type="submit" name="sp" value="SP" style="height: 67px; width:110px"><input type="submit" name="eco" value="Economics" autofocus style="height: 67px; width:110px"></form></div>';

	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=14";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['eco']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="bk" value="BK" autofocus style="height: 67px; width:110px"><input type="submit" name="ocm" value="OCM" style="height: 67px; width:110px"><input type="submit" name="cmath" value="Math" style="height: 67px; width:110px"><input type="submit" name="sp" value="SP" style="height: 67px; width:110px"><input type="submit" name="eco" value="Economics" style="height: 67px; width:110px"></form></div>';

	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=15";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['12comm']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="BK" value="BK" autofocus style="height: 67px; width:110px"><input type="submit" name="OCM" value="OCM" style="height: 67px; width:110px"><input type="submit" name="CMATH" value="Math" style="height: 67px; width:110px"><input type="submit" name="SP" value="SP" style="height: 67px; width:110px"><input type="submit" name="ECO" value="Economics" style="height: 67px; width:110px"></form></div>';

}


if(isset($_POST['BK']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="BK" value="BK" autofocus style="height: 67px; width:110px"><input type="submit" name="OCM" value="OCM" style="height: 67px; width:110px"><input type="submit" name="CMATH" value="Math" style="height: 67px; width:110px"><input type="submit" name="SP" value="SP" style="height: 67px; width:110px"><input type="submit" name="ECO" value="Economics" style="height: 67px; width:110px"></form></div>';

	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=16";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['OCM']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="BK" value="BK" autofocus style="height: 67px; width:110px"><input type="submit" name="OCM" value="OCM" style="height: 67px; width:110px"><input type="submit" name="CMATH" value="Math" style="height: 67px; width:110px"><input type="submit" name="SP" value="SP" style="height: 67px; width:110px"><input type="submit" name="ECO" value="Economics" style="height: 67px; width:110px"></form></div>';

	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=17";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['CMATH']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="BK" value="BK" autofocus style="height: 67px; width:110px"><input type="submit" name="OCM" value="OCM" style="height: 67px; width:110px"><input type="submit" name="CMATH" value="Math" style="height: 67px; width:110px"><input type="submit" name="SP" value="SP" style="height: 67px; width:110px"><input type="submit" name="ECO" value="Economics" style="height: 67px; width:110px"></form></div>';

	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=18";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['SP']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="BK" value="BK" autofocus style="height: 67px; width:110px"><input type="submit" name="OCM" value="OCM" style="height: 67px; width:110px"><input type="submit" name="CMATH" value="Math" style="height: 67px; width:110px"><input type="submit" name="SP" value="SP" style="height: 67px; width:110px"><input type="submit" name="ECO" value="Economics" style="height: 67px; width:110px"></form></div>';

	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=19";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}


if(isset($_POST['ECO']))
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="BK" value="BK" autofocus style="height: 67px; width:110px"><input type="submit" name="OCM" value="OCM" style="height: 67px; width:110px"><input type="submit" name="CMATH" value="Math" style="height: 67px; width:110px"><input type="submit" name="SP" value="SP" style="height: 67px; width:110px"><input type="submit" name="ECO" value="Economics" style="height: 67px; width:110px"></form></div>';

	$s="SELECT student.id,student.name,student.gender,student.contact,books.issue from student,books where student.id=books.studid and books.subid=15";
	$result = mysqli_query($link,$s) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% autofocus style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Contact</th><th>Book Issued</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";

}



if(isset($_POST['disp6'])) 
{
$sql = "SELECT * from enquiry";
$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
print "<tr><th>Name</th><th>Email</th><th>Contact</th></tr>" ;
while($row = mysqli_fetch_row($result)) {
   print "<tr>\n";
   foreach($row as $field) {
       print "<td>$field</td>\n";
   }
   print "</tr>\n";
}
print "</table>\n";
}




if(isset($_POST['disp7']))
{
	echo '<form method="POST" action="delete.php">
		<label>Enter StudentID</label><br>&nbsp;<input type="text" name="disp1"><input type="submit" name="stud"><br><br>
		<label>Enter ParentID</label><br>&nbsp;<input type="text" name="disp2"><input type="submit" name="par"><br><br>
		<label>Enter TeacherID</label><br>&nbsp;<input type="text" name="disp3"><input type="submit" name="teach"><br><br>
		</form>';
	
}


if(isset($_POST['disp8'])) 
{
	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";


	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="stud" value="Student" autofocus style="height: 67px; width:110px">
	<input type="submit" name="par" value="Parent" style="height: 67px; width:110px">
	<input type="submit" name="teach" value="Teacher" style="height: 67px; width:110px"></form></div>';


}	

if(isset($_POST['stud']))
{


	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";


	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="stud" value="Student" autofocus style="height: 67px; width:110px">
	<input type="submit" name="par" value="Parent" style="height: 67px; width:110px">
	<input type="submit" name="teach" value="Teacher" style="height: 67px; width:110px"></form></div>';

	print '<form method="post" action="entry.php">
			
   			<br> 
			<label >Enter Name:<span style="color: red">*</span></label><br>
			<input type="text" name="name" autofocus placeholder="Full Name" required><br><br><br>
			
			<label>DOB:<span style="color: red">*</span></label><br>
			<input type="date" name="dob" required><br><br><br>

			<label>Gender:<span style="color: red">*</span></label><br>
			<input type="radio" name="gend" value="M" required>Male
			<input type="radio" name="gend" value="F" required>Female<br><br><br>

			<label>Contact:<span style="color: red">*</span></label><br>
			<select>
			<option>+91</option>
			</select>
			<input type="number" name="contact" required><br><br><br>

			<!--<label >Enter Subject ID:<span style="color: red">*</span></label><br>
			<input type="text" name="name" autofocus placeholder="Full Name" required >

			<!--<label>Email:<span style="color: red">*</span></label><br>
			<input type="email" name="email" required><br><br><br>


			<label>Address:<span style="color: red">*</span></label><br>
			<input type="text" name="add1" placeholder="Address Line 1" required ><br><br>
			<input type="text" name="add2" placeholder="Address Line 2" > <br><br>
			<input type="text" name="city" placeholder="City" required> 
			<input type="text" name="state" placeholder="State/Province" required><br><br>
			<input type="number" name="pin" placeholder="pincode" required>
			<select>
			<option>India</option>
			</select><br><br><br>


            <label>College Name:<span style="color: red">*</span></label><br>
            <input type="text" name="clg" required ><br><br>
            <label>Department:<span style="color: red">*</span></label><br>
            			<select required>
            					<option >Select Department:</option>
            					<option name="comp">Computer Engineering</option>
            	                <option name="it">Information Technology</option>
            	                <option name="extc">Electronics and Telecommunication</option>
            	                <option name="etrx">Electronics</option>
            	        </select><br><br><br>
            	        

	        <label>User ID:<span style="color: red">*</span></label><br>
            <input type="text" name="id" required ><br><br>

            <label>Admission Year:<span style="color: red">*</span></label><br>
            <input type="number" name="admYear" required ><br><br>

            <label>Password:<span style="color: red">*</span></label><br>
            <input type="text" name="pass" required ><br><br>-->
	        

	        <button type="submit" >Submit</button>

	        
	        
</form>';

}

if(isset($_POST['par']))
{


	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";


	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="stud" value="Student" autofocus style="height: 67px; width:110px">
	<input type="submit" name="par" value="Parent" style="height: 67px; width:110px">
	<input type="submit" name="teach" value="Teacher" style="height: 67px; width:110px"></form></div>';

}

if(isset($_POST['teach']))
{


	$sql = "SELECT * from subject";
	$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
	print "<table border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px'>\n";
	print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
	while($row = mysqli_fetch_row($result)) {
   	print "<tr>\n";
   		foreach($row as $field) {
       	print "<td>$field</td>\n";
   		}
   		print "</tr>\n";
	}
	print "</table>\n";


	print '<br><br><br><div align="center"><form method="POST"><input type="submit" name="stud" value="Student" autofocus style="height: 67px; width:110px">
	<input type="submit" name="par" value="Parent" style="height: 67px; width:110px">
	<input type="submit" name="teach" value="Teacher" style="height: 67px; width:110px"></form></div>';

}

if(isset($_POST['disp9'])) 
{
$sql = "SELECT * from subject";
$result = mysqli_query($link,$sql) or die("Unable to select: ".mysql_error());
print '<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
		<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>';
print "<table id='myTable' border=2 bgcolor= gray align=center width=100% style = 'border-radius: 15px' style = 'overflow:scroll'>\n";
print "<tr><th>ID</th><th>Subject</th><th>Branch</th><th>Class</th></tr>" ;
while($row = mysqli_fetch_row($result)) {
   print "<tr>\n";
   foreach($row as $field) {
       print "<td>$field</td>\n";
   }
   print "</tr>\n";
}
print '</table>';
}

if(isset($_POST['disp10'])) 
{
	print'<form method="POST" action="test.php">
	<input type="text" name="msg" placeholder="Enter Text Here..."><br>

	<input type="submit" name="write" value="Post"><input type="submit" name="del" value="Remove">
	</form>';
}


mysqli_close($link);
?>

</body>
<html