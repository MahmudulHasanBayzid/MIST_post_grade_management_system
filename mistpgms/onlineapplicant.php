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
<body style="padding-left:16px" bgcolor="#E6E6FA">

<h1 align="center" style="background-color:rgb(200,200,200);">
Military Institute of Science and Technology (MIST)</h1>

<div class="topnav">
  <a  href="home.php">Home</a>
  <a href="notice.php">Notice</a>
  <a href="dept.php">Department</a>
  <a href="contact.php">Contact</a>
   <a href="faculties.php">Faculties</a>
  <a href="stdcor.php">Student corner</a>
  <a href="admin.php">Admin corner</a>
  <a class="active" href="admission.php">Admission center</a>
  <a href="about.php">About MIST</a>
</div>


<h2 align="center"">
Apply Online For Postgraduate Admission</h2>



<form action="appab.php" method="post">
NAME: <input type="text" name="a"><br>
FATHER_NAME: <input type="text" name="b"><br>
MOTHER_NAME: <input type="text" name="p"><br>
BSC_INSTITUTE: <input type="text" name="d"><br>
BSC_CGPA: <input type="float" name="e"><br>
GPA_HSC: <input type="float" name="f"><br>
GPA_SSC: <input type="float" name="g"><br>
ACCOUNT_NO: <input type="text" name="h"><br>
GENDER: <input type="text" name="i"><br>
BIRTH_DATE: <input type="date" name="j"><br>
EMAIL: <input type="email" name="k"><br>
CONTACT_NO: <input type="number" name="l"><br>

<input type="submit" value="Submit">
</form>

</body>
</html>