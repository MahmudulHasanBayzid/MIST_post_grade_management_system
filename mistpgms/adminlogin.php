<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Military Institute of Science and Technology (MIST)</title>
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}


.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddaac4;
  color: black;
}

.topnav a.active {
    background-color: #82ab7e;
    color: white;
}

</style>

</head>
<body bgcolor="#E6E6FA">

<h1 align="center" style="background-color:rgb(200,200,200);">
Military Institute of Science and Technology (MIST)</h1>

<div class="topnav">
  <a  href="home.php">Home</a>
  <a href="notice.php">Notice</a>
  <a href="dept.php">Department</a>
  <a href="contact.php">Contact</a>
   <a href="faculties.php">Faculties</a>
  <a href="stdcor.php">Student corner</a>
  <a class="active" href="admin.php">Admin corner</a>
  <a href="admission.php">Admission center</a>
  <a href="about.php">About MIST</a>
</div>

<?php
$c=oci_connect('system','12345','localhost/XE');
	if(!$c)
	{
		$e=oci_error();
		trigger_error(htmlentities($e['message'],ENT_QUOTES),E_USER_ERROR);
	}

$id=$_POST['uname'];
$pass=$_POST['psw'];
$aa="select * from admin where admin_name='$id'";
//echo $aa;
$result=oci_parse($c ,$aa);
oci_execute($result);
if($result){
	$password='';
	while($row=oci_fetch_array($result)){
		$password = $row['ADMIN_PASS'];
	}
	//echo $pass."</br>pass:".$password."</br>";
	if($pass==$password){
	?>
	<script>
	alert("Login SUCCESS!");
	window.location = 'adminedit.php';
	</script>
	<?php
	}
	else{
		echo "invalid username or password";
	}
}
//echo $result;

?>


</body>
</html>