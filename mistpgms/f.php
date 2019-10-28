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
        <th>Department Name</th>
        <th>Department ID</th>
        <th>Capacity</th>
        <th>Start Date</th>
        <th>Building No</th>
        <th>Floor No</th>
        <th>Room No</th>
    </tr>

    <tr>
        <?php
        $conn = oci_connect('system','12345','localhost/XE');
		$search=$_POST['search'];
        $stid = oci_parse($conn, "SELECT * FROM DEPARTMENT where lower(department_name) like '%$search%' or upper(department_name) like '%$search%' ");
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
            echo '<th scope="row">' . $row['DEPARTMENT_NAME'] . '</th>';//
            echo '<td scope="row">' . $row['DEPARTMENT_ID'] . '</td>';
            echo '<td scope="row">' . $row['CAPACITY'] . '</td>';
            echo '<td scope="row">' . $row['START_DATE'] . '</td>';
            echo '<td scope="row">' . $row['BUILDING_NO'] . '</td>';
            echo '<td scope="row">' . $row['FLOOR_NO'] . '</td>';
            echo '<td scope="row">' . $row['ROOM_NO'] . '</td>';
            echo '</tr>';

        }

        oci_free_statement($stid);
        ?>
    </tr>
</table>

</body>
</html>