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
  <a href="home.php">Home</a>
  <a href="notice.php">Notice</a>
  <a href="dept.php">Department</a>
  <a href="contact.php">Contact</a>
      <a href="faculties.php">Faculties</a>
  <a class="active" href="stdcor.php">Student corner</a>
  <a href="admin.php">Admin corner</a>
  <a href="admission.php">Admission center</a>
  <a   href="about.php">About MIST</a>

</div>

<form action="logins.php" method="post" style="padding-left:16px">
	<br>
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
  </div>

</form>

<div style="padding-left:16px">

<form action="j.php" method="post" >
<br>
<!--
Search: <input type="text" name="search" placeholder=" Search here ... "/>
<input type="submit" value="Submit" />
</form>
</div>

<ul>
  <li><a href="ces.php">Civil Engineering</a></li>
  <li><a href="cses.php">Computer Science & Engineering</a></li>
  <li><a href="mes.php">Mechanical Engineering</a></li>
  <li><a href="eeces.php">Electrical, Electronic and Communication Engineering</a></li>
   <li><a href="ae.php">Aeronautical Engineering</a></li>
	<li><a href="nam.php">Naval Architecture and Marine Engineering</a></li>

</ul>
-->

</body>
</html>