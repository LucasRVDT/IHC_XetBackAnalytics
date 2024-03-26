<?php
include 'dbconnect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM students WHERE studentID=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:student.php');

    }else{
        die(mysqli_error($conn));
    }

}