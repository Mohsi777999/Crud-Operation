<?php

include('config.php');

$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_phone = $_POST['sphone'];
$stu_class = $_POST['sclass'];

$sql = "INSERT INTO `student_data`(`s_name`, `s_address`, `s_class`, `s_phone`) VALUES ('$stu_name','$stu_address','$stu_class','$stu_phone')";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location:http://localhost/Crud-Operation-main/index.php");
} else {
    echo "<script>alert('Data not updated')</script>";
}

?>