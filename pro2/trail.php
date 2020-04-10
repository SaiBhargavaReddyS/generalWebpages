<?php
session_start();
require_once("connect.php");
$id=$_SESSION['id'];
$pwd=$_SESSION['pwd'];
$sql="select * from std_dt where snme='$id' and spwd='$pwd'";
$res=(mysqli_query($conn,$sql));
		if(mysqli_num_rows($res)>0){
			while($row = mysqli_fetch_assoc($res)) {
                $nme=$row['snme'];
                #$abt=$row['iabt'];
                $con=$row['scont'];
                $em=$row['sem'];
                echo $nme." ".$em." ".$con." <br>";                
            }
		}
		else{
			echo "<script>alert('wrong password/ username!')</script>";
		}

?>