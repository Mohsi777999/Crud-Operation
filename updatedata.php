<?php 

include('config.php');

$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_phone = $_POST['sphone'];
$stu_class = $_POST['sclass'];

$sql = "UPDATE `student_data` SET `s_name`='$stu_name',`s_address`='$stu_address',`s_class`='$stu_class',`s_phone`='$stu_phone' WHERE `s_id` = '$stu_id'";

$result = mysqli_query($conn,$sql);

if ($result) {
    header("Location:http://localhost/crud_html/index.php");
}else{
    echo "<script>alert('Data not updated')</script>";
}

?>