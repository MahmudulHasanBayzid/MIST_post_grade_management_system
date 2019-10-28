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
  <a class="active" href="stdcor.php">Student corner</a>
  <a href="admin.php">Admin corner</a>
  <a  href="admission.php">Admission center</a>
  <a href="about.php">About MIST</a>
</div>



<table border='1' >
    <tr>
        <th>Class Roll</th>
        <th>Registration Number</th>
        <th>Username</th>
        <th>Date of Birth</th>
        <th>Session</th>
        <th>Department</th>
        <th>Student Type</th>
		<th>Semister</th>
		<th>Dept Batch</th>
    </tr>

    <tr>
        <?php
        $conn = oci_connect('system','12345','localhost/XE');
		//$search=$_POST['search'];
		session_start();
		$id = $_SESSION['id'];
		//echo $id;
        $stid = oci_parse($conn, "select STUDENT_ID, STUDENT_REGISTRATION_NUMBER,STUDENT_ID ,STUDENT_DOB ,STUDENT_SESSION,DEPARTMENT_NAME ,STUDENT_TYPE,STUDENT_SEMISTER,DEPARTMENT_ID from student join STUDENT_OF using (STUDENT_ID) join department using (DEPARTMENT_NAME) where STUDENT_ID='$id' ");
        oci_execute($stid);
		/*
		$ca=oci_fetch_row($stid);
		if($ca==0){
			echo "no data selected";
		}
		*/
        while (($row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS)) != false)
        {

            echo '<tr>';
            echo '<th scope="row">' . $row['STUDENT_ID'] . '</th>';//
            echo '<td scope="row">' . $row['STUDENT_REGISTRATION_NUMBER'] . '</td>';
            echo '<td scope="row">' . $row['STUDENT_ID'] . '</td>';
            echo '<td scope="row">' . $row['STUDENT_DOB'] . '</td>';
            echo '<td scope="row">' . $row['STUDENT_SESSION'] . '</td>';
            echo '<td scope="row">' . $row['DEPARTMENT_NAME'] . '</td>';
            echo '<td scope="row">' . $row['STUDENT_TYPE'] . '</td>';
			echo '<td scope="row">' . $row['STUDENT_SEMISTER'] . '</td>';
			echo '<td scope="row">' . $row['DEPARTMENT_ID'] . '</td>';
            echo '</tr>';

        }

        oci_free_statement($stid);
        ?>
    </tr>
</table>

</body>
</html>