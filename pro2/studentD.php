<?php
require_once('connect.php');

$name=$_POST['snme'];
$email=$_POST['eml'];
$pwd=$_POST['pwd'];
$con=$_POST['con'];
$sql="insert into std_dt(snme,sem,scont,spwd) values('$name','$email','$con','$pwd')";
if(mysqli_query($conn,$sql))
{
    mysqli_close($conn);
    header("Location: ilog.php");
}
else{
    die("nope".mysqli_error($conn));
}
echo $name."".$email."".$pwd;
?>