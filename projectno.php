<?php 

   include"conn.php";
 ?>
  <?php 
if (isset($_POST['package'])) {
    $qry = "select * from `project_name` where id='" . $_POST['package']."'";
    $rec = mysqli_query($conn,$qry);
    if (mysqli_num_rows($rec) > 0) {
        while ($res = mysqli_fetch_array($rec)) {
            echo $res['project_no'];
        }
    }
}
die();
?>