<?php
session_start();
include "conn.php";

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form style="max-width:500px;margin:auto;padding:100px;" method="post">
  <h2> Login form</h2>
  

  

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" required>
  </div>

  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" required>
  </div>


  <button type="submit" class="btn" name="submit">Login</button>
</form>

</body>
</html>
<?php 
    if(isset($_POST['submit'])) 
    {
       
         $name=$_POST['email']; 
         $pass=$_POST['password'];
         $que ="SELECT * FROM `registration` WHERE email = '$name' AND password ='$pass'";
         $resl=mysqli_query($conn,$que);
       $count = mysqli_num_rows($resl);
         if($count<=0)
         {
          ?>
			<script>
			alert("Incorrect user id or Password");
			</script>
			<?php
			
         }
         else
         {
 
		  echo"Login Successfull";
		  header('Location:dashboard.php');
		  $_SESSION['email']=$name;
         }
         
    }
        
?> 
