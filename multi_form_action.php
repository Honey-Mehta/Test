

<?php
include("conn.php");
?>

<?php 
 
    if(isset($_POST['submit']))
    {
		$statusMsg = '';
        $targetDir = "uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
        $email=$_POST['email'];
        $projectname=$_POST['projectname'];
     
        $projectno=$_POST['projectno'];
     
           
         $projectmilestone=$_POST['projectmilestone'];
			 
	     $title=$_POST['title'];
	     $keyissue=$_POST['keyissue'];
		 $description=$_POST['description'];
		 $category=$_POST['category'];
	              
	
         
       $allowTypes = array('jpg','png','jpeg','gif');
	   if(in_array($fileType, $allowTypes)){
         $query="INSERT INTO `addlessons`(`email`,`projectname`, `projectno`, `projectmilestone`, `title`, `keyissue`, `description`, `category`, `framework`,`file_name`, `uploaded_on`) VALUES ('$email','$projectname','$projectno','$projectmilestone','$title','$keyissue','$description','$category','".$_POST['hidden_framework']."','".$fileName."',NOW())";
        $res=mysqli_query($conn,$query);
          if($res)
          {
           echo"Data Inserted Successfuly";
          }
          else
          {
          echo"Data Not inserted Successfully";
          }
		
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';  
		}
}

		
?>

<!--?php
// Include the database configuration file

$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>

<?php
// Include the database configuration file

$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
           
            if($res){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;

?>