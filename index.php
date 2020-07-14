<?php
include("conn.php");
session_start();
echo "&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "."welcome"."&nbsp;&nbsp;".$_SESSION['email'];
$login=$_SESSION['email'];
if($login==true)
{
	
}
else{
	
	header('location:loginform.php');
}

?>



<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
  
  
  
  
  
  
  
  
  
  <script  type="text/javascript">
  $(document).ready(function(){
	  $("#projectname").change(function(){
		  var project_id=$(this).val();
		  $.ajax({
			  url:"projectmilestone.php",
			  method:"POST",
			  data:{projectID:project_id},
			  success:function(data){
				  
				  $("#projectmilestone").html(data);
			  }
		  });
	  });
	  
  });
  
  
  </script>
  <script>
  $(document).ready(function(){
     $('#projectname').change(function(){
     var package = $(this).val();
     $.ajax({
        method:'POST',
         data:{package:package},
          url:'projectno.php',
           success:function(data){
       $('#projectno').val(data);
   } 

});
    });
	  
  });
  </script>
  
 
  
  
  
  
  
  
  
<style type="text/css">
#register_form fieldset:not(:first-of-type) {
display: none;
}


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






















</style>
</head>
<body>
<div class="container">

<div class="sidenav">
  <a href="dashboard.php">Lessons</a>
  <a href="mylessons.php">My Lessons</a>
  <a href="#">Add Lessons</a>
  <a href="logout.php">Logout</a>

</div>





<div class="main">
    <h2></h2>
	<div class="progress">
	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
    <div class="alert alert-success hide"></div>
   <form id="register_form"  action="multi_form_action.php" method="post" enctype="multipart/form-data">
   <fieldset>
   <h2>Step 1: Project Detail</h2>

     <div class="form-group">
	
     <input type='hidden' value="<?php echo $login; ?>" name='email'>

	</div>
	



	<div class="form-group">
	<label for="projectname">Project Name</label>
	<select name="projectname" class="form-control form-control-lg" id="projectname" required>
		  <option value="" disabled selected>--Select Project Name--</option>
		  <?php
			include "conn.php";
			$sql="SELECT * FROM project_name";
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($result)){
		  ?>
		  <option value="<?php echo $row['id']; echo '.';  echo $row['project_name'];  ?> "><?php echo $row['project_name']; ?></option>
		
			<?php } ?>
		 </select>

	</div>

	<div class="form-group">
	<label for="projectno">Project No.</label>
	<input type="text" class="form-control" required id="projectno" name="projectno" placeholder="Project No." value=" ">
	</div>


      <div class="form-group">
	  <label for="projectmilestone">Project Milestone</label>
	   <select name="projectmilestone" class="form-control form-control-lg" id="projectmilestone" required>
	     <option value="" disabled selected>--Select Project Milestone--</option>
	   </select>
	 </div>
	 
	 
     <input type="button" class="next-form btn btn-info" value="Next" />
     </fieldset>
     <fieldset>
     <h2> Step 2: Lessons</h2>
	<div class="form-group">
	<label for="title">Title</label>
	<input type="text" class="form-control" name="title" id="title" placeholder="Enter Project Title" name="title" required>
	</div>

	<div class="form-group">

	<textarea rows="3" cols="100" placeholder="Please Enter Key issue" class="form-control" name="keyissue" required>
	</textarea>
	</div>

	<div class="form-group">

	<textarea rows="3" cols="100" placeholder="Project Description" class="form-control" name="description" required>
	</textarea>
	</div>



	<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
	<input type="button" name="next" class="next-form btn btn-info" value="Next" />
	</fieldset>
	<fieldset>
	<h2>Step 3: Advance </h2>
	<div class="form-group">
	<label for="category">Category</label>
	<select name="category" id="category" class="form-control" required>
		<option value=" ">-Select Category-</option>
		<option value="High">High</option>
		<option value="Low">Low </option>
		<option value="Advance"> Advance</option>
	  </select>
	</div>
	<div class="form-group">
	<label for="keywords" >Key Words</label>
	<select name="framework" id="framework" class="form-control selectpicker" data-live-search="true" multiple required>
		  <option value="Laravel">Laravel</option>
		  <option value="Symfony">Symfony</option>
		  <option value="Codeigniter">Codeigniter</option>
		  <option value="CakePHP">CakePHP</option>
		  <option value="Zend">Zend</option>
		  <option value="Yii">Yii</option>
		  <option value="Slim">Slim</option>
		 </select>
		 <br /><br />
		 <input type="hidden" name="hidden_framework" id="hidden_framework" />
	</div>

	<div class="form-group">
	<label for="attaachment">Attachment</label>
	 <input type="file" name="file" id="attachment" required>
	</div>


	<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
	<input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
	<a href="logout.php">Logout</a>
    </fieldset>
    </form>
	</div>
 </div>
<script src="./form.js">
 </script>
 <script>
$(document).ready(function(){
 $('.selectpicker').selectpicker();

 $('#framework').change(function(){
  $('#hidden_framework').val($('#framework').val());
 });

 $('#multiple_select_form').on('submit', function(event){
  event.preventDefault();
  if($('#framework').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"multi_form_action.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     //console.log(data);
     $('#hidden_framework').val('');
     $('.selectpicker').selectpicker('val', '');
     alert(data);
    }
   })
  }
  else
  {
   alert("Please select framework");
   return false;
  }
 });
});
</script>

</body>
</html>