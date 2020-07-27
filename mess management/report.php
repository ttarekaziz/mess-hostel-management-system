<?php
include 'header.php';
?>
<style type="text/css" media="screen">
.myMainContent{
    padding:20px 5px;
}

</style>
<script language="javascript">
    function printrow(printpage)
    {
    var headstr = "<html><head><title>Report</title></head><body>";
    var footstr = "<br /><br /><center><p>Copyright &copy; Sumiya Akter</p></center> </body>";
	var newstr = "<center><h3>Single Report </h3></center><br /><br /> <table border='1px' width='80%'> <tr>       <th>Members Name</th><th>Members Id</th><th>Members Contact</th><th>House Name</th><th>House No</th></th><th>Total Meal</th><th>Meal Rate</th><th>Total Amount</th> </tr>";
     newstr += document.all.item(printpage).innerHTML;
	 newstr += "</table>";
     var oldstr = document.body.innerHTML;
    document.body.innerHTML = headstr+newstr+footstr;
    window.print();
    document.body.innerHTML = oldstr;
    return ;
    }
  </script>
<div class="myMainContent"  id="div_print">
<center>
    
    <table border="1px" width="70%">
        <tr>
           <th>Members Name</th>
		   <th>Members Id</th>
		   <th>Members Contact</th>
		   <th>House Name</th>
		   <th>House No</th>
		   <th>Total Meal</th>
		   <th>Meal Rate</th>
		   <th>Total Amount</th>
            
            <?php 
       
        $r = mysqli_query($link,"SELECT tb_members.id,tb_members.name,tb_members.phone_num,tb_house.h_name,tb_house.house_no,tb_meal.meal,tb_meal.rate,tb_meal.amount from tb_members inner join tb_house on tb_members.serial_no=tb_house.serial_no inner join tb_meal on tb_members.serial_no=tb_meal.serial_no");
        while($data=mysqli_fetch_assoc($r)){
        ?>
        <tr>
		<tr id="<?php echo "row".$data['id'];?>">
          
            <td><?php echo $data['name'];?></td>
            <td><?php echo $data['id'];?></td>
            
			<td><?php echo $data['phone_num'];?></td>
			<td><?php echo $data['h_name'];?></td>
			<td><?php echo $data['house_no'];?></td>
            <td><?php echo $data['meal'];?></td>
			<td><?php echo $data['rate'];?></td>
			<td><?php echo $data['amount'];?></td>
			<?php } ?>
			</table>
			<br>
           
           
           
    <center><a href="#"  class="no-print" onClick="printdiv('div_print');" ><button>Print All Information</button></a></center>
    <?php
    if(isset($_GET['us'])){
    echo "<center><h3 style='color:green;padding:30px 0px;text-align:center;'>Customer Information Successfully Updated!</h3></center>";
    }

    if(isset($_GET['ds'])){
    echo "<center><h3 style='color:green;padding:30px 0px;text-align:center;'>Customer Information Successfully Deleted!</h3></center>";
    }
    ?>
</center>
<div class="a_hide print_en">Copyright &copy; Sumiya Akter </div>

</div>

<?php
include 'footer.php';
?>