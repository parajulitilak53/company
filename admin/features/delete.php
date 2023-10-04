<?php 
require("../connection/config.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $query="SELECT *FROM features WHERE id=$id";
    $result=mysqli_query($con,$query);
    $data=mysqli_fetch_assoc($result);
    $file="../uploads/".$data['icon'];
    echo $file;
    unlink($file);

    $choose="DELETE FROM features WHERE id=$id";
    $choose_result=mysqli_query($con,$choose);

   header("Refresh:0; url=index.php");
}