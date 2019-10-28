<?php

$c=oci_connect('system','12345','localhost/XE');
	if(!$c)
	{
		$e=oci_error();
		trigger_error(htmlentities($e['message'],ENT_QUOTES),E_USER_ERROR);
	}
$z=$_POST['z'];
//echo $z;
$sql=" $z ";
//$sql="select * from department";
//echo $sql;
$result=oci_parse($c ,$sql);
oci_execute($result);

if($result)
{
while($row=oci_fetch_row($result))
{
	foreach($row as $col)
	{
		echo $col."  ";
	}
	echo "<br>";
}
}
?>