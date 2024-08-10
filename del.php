<?php

$con=mysqli_connect("localhost","root","","student");


$sid=$_GET['id'];


$sel="SELECT * FROM students WHERE sid='$sid'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();



unlink("studentimg/".$row['simg']);

$d="DELETE FROM students WHERE sid='$sid'";
if($con->query($d)){
    header("location:sel.php");
}

















?>