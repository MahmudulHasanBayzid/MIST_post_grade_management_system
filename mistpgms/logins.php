<?php
$c=oci_connect('system','12345','localhost/XE');
	if(!$c)
	{
		$e=oci_error();
		trigger_error(htmlentities($e['message'],ENT_QUOTES),E_USER_ERROR);
	}
session_start();
$id=$_POST['uname'];
$_SESSION['id']=$id;
$pass=$_POST['psw'];
$aa="select * from student where STUDENT_ID='$id'";
//echo $aa;
$result=oci_parse($c ,$aa);
oci_execute($result);
if($result){
	$password='';
	while($row=oci_fetch_array($result)){
		$password = $row['STUDENT_PASSWORD'];
	}
	//echo $pass."</br>pass:".$password."</br>";
	if($pass==$password){
		echo "login successful";
	?>
	<script>
	alert("Login SUCCESS!");
	window.location = 'stdlginpage.php';
	</script>
	<?php
	}
	else{
		echo "invalid username or password";
			?>
	<script>
	alert("invalid username or password");
	window.location = 'stdcor.php';
	</script>
	<?php
	}
}
//echo $result;

?>