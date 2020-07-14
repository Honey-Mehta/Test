<?php

include "conn.php";
$output='';
$sql="SELECT * FROM projectmilestone WHERE project_id='".$_POST['projectID']."'";
$result=mysqli_query($conn,$sql);
$output .='<option value="" disabled selected>--Select Project Milestone--</option>';
while($row=mysqli_fetch_array($result)){
	$output .='<option value="'.$row["projectmilestone"].'">'.$row["projectmilestone"].'</option>';

}
echo $output;
?>