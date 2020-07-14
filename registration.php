<?php
include"conn.php";
session_start();

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

<form  style="max-width:500px;margin:auto;padding:100px;" method="POST">
  <h2> Registration form</h2>
  

  

  <div class="input-container">
   
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>

  
  <div class="input-container">

    <input class="input-field" type="password" placeholder="Password" name="password">
  </div>


  <button type="submit" class="btn" name="submit">REGISTRATION</button>
</form>

</body>
</html>
<?php 
 
    if(isset($_POST['submit']))
    {
        

        $email=$_POST['email'];
      
           $pass=$_POST['password'];
     
           


        $query="INSERT INTO `registration`(`email`, `password`) VALUES ('$email','$pass')";
        $res=mysqli_query($conn,$query);
        if($res)
        {
            echo"ok";
			header('location:loginform.php');
        }
        else
        {
            echo"not ok";
        }
    }

?>

