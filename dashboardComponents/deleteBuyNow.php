<?php
    include '../BuyNowMapper.php';
    $mapper = new BuyNowsMapper();
    $id = $_REQUEST['buynow_ID'];
    $delete = $mapper->deleteBuyNow($id);

    if ($delete) {
        header("Location:buynowDashboard.php");
        echo "<script>alert('Purchase deleted successfully');</script>";
    }
?>
