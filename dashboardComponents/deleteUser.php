<?php 
    include '../UserMapper.php';
    $model = new UserMapper();
    $id = $_REQUEST['userid'];
    $delete = $model->deleteUser($id);
 
    if ($delete) {
        header("Location:usersDashboard.php");
        echo "<script>alert('delete successfully');</script>";
    }
 ?>

 