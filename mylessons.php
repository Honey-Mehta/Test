<?php
include("conn.php");
session_start();
echo "&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."welcome"."&nbsp;&nbsp;".$_SESSION['email'];
$login=$_SESSION['email'];
if($login==true)
{
	
}
else{
	
	header('location:loginform.php');
}

?>

<?php

$query="select * from addlessons where email='$login' ";
$data=mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 60px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 155px; /* Same as the width of the sidenav */
  font-size: 15px; /* Increased text to enable scrolling */
  padding: 0px 10px;

}
h2{
	text-align:center;
	
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}


</style>
</head>
<body>

<div class="sidenav">
  <a href="dashboard.php">Lessons</a>
  <a href="#">My Lessons</a>
  <a href="index.php">Add Lessons</a>
  <a href="logout.php">Logout</a>

</div>

<div class="main">
  <h2>MY LESSONS</h2>
  <table width="600" border="1" cellpadding="1" cellspacing="1" style="margin:auto;">
		<tr>
			<th>ID</th>
			<th>EMAIL</th>
            <th>PROJECT NAME</th>
            <th>PROJECT NUMBER</th>
            <th>PROJECT MILESTONE</th>
            <th>TITLE</th>
            <th>KEY ISSUE</th>
            <th>DESCRIPTION</th>
            <th>CATEGORY</th>
            <th>KEYWORDS</th>
			<th>FILE</th>
           
        </tr>
            
         <?php
        while($lessons=mysqli_fetch_assoc($data))
        {
            
        	echo "<tr>
        	      <td>".$lessons['id']."</td>
				   <td>".$lessons['email']."</td>
        	      <td>".$lessons['projectname']."</td>
        	      <td>".$lessons['projectno']."</td>
        	      <td>".$lessons['projectmilestone']."</td>
                  <td>".$lessons['title']."</td>
        	     <td>".$lessons['keyissue']."</td>
        	     <td>".$lessons['description']."</td>
        	     <td>".$lessons['category']."</td>      	          
        	    <td>".$lessons['framework']."</td>
                 <td><img src='uploads/".$lessons['file_name']."' height='100' width='100'/></td>
        	 
        	    </tr>";

        }
        ?>
        
    </table>
     
</div>
   
</body>
</html> 





