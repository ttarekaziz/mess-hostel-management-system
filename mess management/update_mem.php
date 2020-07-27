<?php
$link = mysqli_connect("localhost","root","","mess_management") or die("error");
$id=$_POST['id'];
$name=$_POST['name'];
$occup=$_POST['occup'];
$per_addr=$_POST['per_addr'];
$phone_num=$_POST['phone_num'];
$email=$_POST['email'];

$r = mysqli_query($link,"UPDATE tb_members SET name='$name',occup='$occup',per_addr='$per_addr',phone_num='$phone_num',email='$email' where id='$id'");
if($r){
	header("refresh:1;url=mem_view.php");
}else{
	echo "<h3 style='color:red;padding:50px 0px;text-align:center;'>An Error Occured!!!!</h3>";	
}
include 'footer.php';

?>