<?php
$link = mysqli_connect("localhost","root","","mess_management") or die("error");
$name=$_POST['name'];
$house_no=$_POST['house_no'];
$address=$_POST['address'];
$contact=$_POST['contact'];

$r = mysqli_query($link,"UPDATE tb_house SET h_name='$name',address='$address',contact='$contact' where house_no='$house_no'");
if($r){
	header("refresh:1;url=house_view.php");
}else{
	echo "<h3 style='color:red;padding:50px 0px;text-align:center;'>An Error Occured!!!!</h3>";	
}
include 'footer.php';

?>