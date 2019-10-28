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
$d=$_POST['d'];
$e=date('d-m-Y',strtotime($_POST['e']));
$f=date('d-m-Y',strtotime($_POST['f']));
$g=$_POST['g'];
$h=$_POST['h'];
$i=$_POST['i'];
$j=$_POST['j'];


$sql="insert into EMPLOYEE  values('$a','$b','$p','$d',to_date('$e','DD-MM-YYYY'),to_date('$f','DD-MM-YYYY'),'$g','$h','$i','$j')";

$result=oci_parse($c ,$sql);
oci_execute($result);

if($result)
{
	?>
	<script>
	alert("Insert SUCCESS!");
	window.location = 'afac.php';
	</script>
	<?php
}
else
	echo "data not inserted";

?>