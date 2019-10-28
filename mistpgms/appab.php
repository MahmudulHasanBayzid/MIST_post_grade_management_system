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
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
$h=$_POST['h'];
$i=$_POST['i'];	
$j=date('d-m-Y',strtotime($_POST['j']));
$k=$_POST['k'];
$l=$_POST['l'];


$sql="insert into APPLICANT (NAME,FATHER_NAME ,MOTHER_NAME,BSC_INSTITUTE,BSC_CGPA,GPA_HSC,GPA_SSC,ACCOUNT_NO,EXAM_ROLL,GENDER,BIRTH_DATE,EMAIL,CONTACT_NO) values('$a','$b','$p','$d','$e','$f','$g','$h',applicant_eroll_seq.nextval,'$i',to_date('$j','DD-MM-YYYY'),'$k','$l')";

$result=oci_parse($c ,$sql);
oci_execute($result);

if($result)
{
	?>
	<script>
	alert("Submit SUCCESS!");
	window.location = 'admission.php';
	</script>
	<?php


}
else
	echo "data not inserted";

?>