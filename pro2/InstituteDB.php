<?php
#any kind of validations to be done here!!
require_once("connect.php");
$name=$_POST['inme'];
$about=$_POST['iabt'];
$email=$_POST['eml'];
$pno=$_POST['phone'];
$pwd=$_POST['pwd'];
$sql="insert into inst_dt(iname,iabt,icont,iem,pwd) values('$name','$about','$pno','$email','$pwd')";
if(mysqli_query($conn,$sql))
{
    mysqli_close($conn);
    #echo "<script> alert('registered sucessfully!');</script>";
    header("Location: ilog.php");
}
else
{
    die("nope ".mysqli_error($conn));
}
echo $name." ".$about." ".$email." ".$pno." ".$pwd;
?>