<?php
require_once("connect.php");
$sql="select * from instab where iid='1'";
if($res=(mysqli_query($conn,$sql)))
{
    if(mysqli_num_rows($res)>0){
        while($row = mysqli_fetch_assoc($res)) {
            $nme=$row['inme'];
            $abt=$row['iabt'];
            $con=$row['icont'];
            $em=$row['iem'];
        }
    }
    mysqli_close($conn);
    //header("Location: instdet.php");
}
else{
    die("nope".mysqli_error($conn));
}
?>