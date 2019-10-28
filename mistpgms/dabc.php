<?php
$c=oci_connect('system','12345','localhost/XE');
	if(!$c)
	{
		$e=oci_error();
		trigger_error(htmlentities($e['message'],ENT_QUOTES),E_USER_ERROR);
	}
$a=$_POST['a'];
$b=$_POST['b'];
$p=$_POST['p'];
$d=date('d-m-Y',strtotime($_POST['d']));
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];

DEPARTMENT_NAME VARCHAR2(20),
DEPARTMENT_ID VARCHAR2(20),
CAPACITY NUMBER(3,0),
START_DATE DATE,
BUILDING_NO VARCHAR2(12),
FLOOR_NO VARCHAR2(12),
ROOM_NO


$sql="update DEPARTMENT set DEPARTMENT_ID='$b',CAPACITY='$p',START_DATE=to_date('$d','DD-MM-YYYY'),BUILDING_NO='$e',FLOOR_NO='$f',ROOM_NO='$g' where DEPARTMENT_NAME='$a' ";

$result=oci_parse($c ,$sql);
oci_execute($result);

if($result)
{
	?>
	<script>
	alert("Update SUCCESS!");
	window.location = 'adepartment.php';
	</script>
	<?php


}
else
	echo "data not inserted";

?>