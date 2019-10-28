<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<table border='1' >
    <tr>
        <th>Faculty Name</th>
        <th>Email</th>

    </tr>

    <tr>
        <?php
        $conn = oci_connect('system','12345','localhost/XE');
		$search=$_POST['search'];
        $stid = oci_parse($conn, "SELECT * FROM faculty_view where lower(E_NAME) like '%$search%' or upper(E_NAME) like '%$search%' ");
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
            echo '<th scope="row">' . $row['E_NAME'] . '</th>';//
            echo '<td scope="row">' . $row['EMAIL'] . '</td>';
            echo '</tr>';

        }

        oci_free_statement($stid);
        ?>
    </tr>
</table>

</body>
</html>