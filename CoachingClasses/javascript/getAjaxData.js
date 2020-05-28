var xhttp = new XMLHttpRequest();
var url = "http://localhost/FinalTutions/phps/studentData.php";
xhttp.open("GET",url,true);
xhttp.send();

xhttp.onreadystatechange,function(){
    if(this.readyState==4 && this.status==200){
        alert("entered getAjaxData file!!!!!!!!!");
        alert(this.responseText);
    }
}

