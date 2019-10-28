<?php
$c=oci_connect('system','12345','localhost/XE');
	if(!$c)
	{
		$e=oci_error();
		trigger_error(htmlentities($e['message'],ENT_QUOTES),E_USER_ERROR);
	}
$z=$_POST['z'];


$sql="delete from EMPLOYEE where E_ID='$z'";

$result=oci_parse($c ,$sql);
oci_execute($result);

if($result)
{
	?>
	<script>
	alert("Delete SUCCESS!");
	window.location = 'afac.php';
	</script>
	<?php


}
else
	echo "data not inserted";

?>