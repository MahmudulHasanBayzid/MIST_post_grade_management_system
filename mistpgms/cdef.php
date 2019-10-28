<?php
$c=oci_connect('system','12345','localhost/XE');
	if(!$c)
	{
		$e=oci_error();
		trigger_error(htmlentities($e['message'],ENT_QUOTES),E_USER_ERROR);
	}
$z=$_POST['z'];


$sql="delete from Applicant where EXAM_ROLL='$z'";

$result=oci_parse($c ,$sql);
oci_execute($result);

if($result)
{
	?>
	<script>
	alert("Delete SUCCESS!");
	window.location = 'aadmission.php';
	</script>
	<?php


}
else
	echo "data not inserted";

?>