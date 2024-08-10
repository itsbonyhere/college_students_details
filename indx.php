<?php
session_start();
$con=mysqli_connect("localhost","root","","student");


if(isset($_POST['login'])){
$e=$_POST['email'];
$p=$_POST['pass'];

$sel="SELECT * FROM login1 WHERE email='$e' AND pass='$p'";
$rs=$con->query($sel);
if($rs->num_rows>0){
    $row=$rs->fetch_assoc();


    $_SESSION['admin_name']=$row['name'];
    header("location:index.php");


}else{
     echo "Invalid Login";
    
}

}

?>

<form action="" method="post">
<p>Email</p>
<p><input type="text" name="email"></p>
<p>Password</p>
<p><input type="password" name="pass"></p>
<p><input type="submit" name="login" value="login" ></p>
</form>
