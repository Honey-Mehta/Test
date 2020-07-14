<?php
include "conn.php";
$query="select * from addlessons";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
echo $total;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lessons</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table width="600" border="1" cellpadding="1" cellspacing="1" style="margin:auto;">
		<tr>
			<th>id</th>
            <th>course</th>
            <th>projectno</th>
            <th>language</th>
            <th>title</th>
            <th>keyissue</th>
            <th>description</th>
            <th>category</th>
            <th>keywords</th>
			<th>file</th>
           
        </tr>
        <?php
        while($lessons=mysqli_fetch_assoc($data))
        {

        	echo "<tr>
        	      <td>".$lessons['id']."</td>
        	      <td>".$lessons['course']."</td>
        	      <td>".$lessons['projectno']."</td>
        	      <td>".$lessons['language']."</td>
                  <td>".$lessons['title']."</td>
        	     <td>".$lessons['keyissue']."</td>
        	     <td>".$lessons['description']."</td>
        	     <td>".$lessons['category']."</td>      	          
        	    <td>".$lessons['keywords']."</td>
        	    <td>".$lessons['file_name']."</td>
        	 
        	    <tr>";

        }
        ?>
    </table>
</body>
</html>