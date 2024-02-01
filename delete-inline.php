<?php 
include('config.php');

$stu_id = $_GET['id'];

$sql = "DELETE FROM `student_data` WHERE `s_id` = '$stu_id'";
$result = mysqli_query($conn,$sql);

if ($result) {
    header("Location:http://localhost/crud_html/index.php");
} else {
    echo "<script>alert('Data not deleted')</script>";
}

?>