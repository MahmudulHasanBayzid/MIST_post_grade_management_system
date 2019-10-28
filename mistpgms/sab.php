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
$g=$_POST['g'];
$n=$_POST['n'];
$e=$_POST['e'];
$f=date('d-m-Y',strtotime($_POST['f']));
$h=$_POST['h'];	
$i=$_POST['i'];
$j=$_POST['j'];
$k=$_POST['k'];
$l=$_POST['l'];
$m=$_POST['m'];


$sql="insert into student  values('$a','$b','$p','$d','$g','$n','$e',to_date('$f','DD-MM-YYYY'),'$h','$i','$j','$k','$l','$m')";

$result=oci_parse($c ,$sql);
oci_execute($result);

if($result)
{
	?>
	<script>
	alert("Insert SUCCESS!");
	window.location = 'astudent.php';
	</script>
	<?php


}
else
	echo "data not inserted";

?>