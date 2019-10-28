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



$sql="insert into DEPARTMENT  values('$a','$b','$p',to_date('$d','DD-MM-YYYY'),'$e','$f','$g')";

$result=oci_parse($c ,$sql);
oci_execute($result);

if($result)
{
	?>
	<script>
	alert("Insert SUCCESS!");
	window.location = 'adepartment.php';
	</script>
	<?php


}
else
	echo "data not inserted";

?>