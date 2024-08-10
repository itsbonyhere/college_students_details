<?php


$con=mysqli_connect("localhost","root","","student");




$Studentname= $_POST['StudentName'];
$Contact= $_POST['Contact'];
$Course= $_POST['Course'];


$buf=$_FILES['simg']['tmp_name'];
$fn=time().$_FILES['simg']['name'];
move_uploaded_file($buf, "studentimg/" .$fn);




$ins="INSERT INTO students SET sname='$Studentname',contact_no='$Contact',course='$Course',simg='$fn'";
if($con->query($ins)){
    header("location:sel.php");
}


?>
