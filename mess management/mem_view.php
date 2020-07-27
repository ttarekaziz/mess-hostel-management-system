<?php
include 'header.php';
include 'connection.php';
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
	var newstr = "<center><h3>Single Report </h3></center><br /><br /> <table border='1px' width='80%'> <tr>            <th> Member's Id </th>            <th>Member's Name</th>            <th> Occupation </th>            <th> Per. Address </th>            <th> Phone Numbe </th>            <th> Email </th> </tr>";
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
    <h3>Member's Information</h3><hr ><br />
    <table border="1px" width="70%">
        <tr>
            <th>Member's Id</th>
            <th>Member's Name</th>
            <th>Occupation</th>
            <th>Per. Address</th>
            <th>Phone Number</th>
			 <th>Email</th>
            <th class="no-print">Action</th>
        </tr>
        <?php
		
       
        $r = mysqli_query($link,"select * from tb_members");
        while($data=mysqli_fetch_assoc($r)){
        ?>
        <tr id="<?php echo "row".$data['id'];?>">
            
            <td><?php echo $data['id'];?></td>
            <td><?php echo $data['name'];?></td>
            <td><?php echo $data['occup'];?></td>
            <td><?php echo $data['per_addr'];?></td>
			<td><?php echo $data['phone_num'];?></td>
			<td><?php echo $data['email'];?></td>
            <td  class="no-print">
				<a  style="color:green;" href="#" onClick="printrow('<?php echo "row".$data['id'];?>');">Print</a>
                <a href="memedit.php?id=<?php echo $data['id'];?>">Edit</a>
                <a style="color:red;" href="mem_delete.php?id=<?php echo $data['id'];?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <br >
    <br >
    <center><a href="#"  class="no-print" onClick="printdiv('div_print');" ><button>Print All Information</button></a></center>
    <?php
    if(isset($_GET['us'])){
    echo "<center><h3 style='color:green;padding:30px 0px;text-align:center;'>Member Information Successfully Updated!</h3></center>";
    }

    if(isset($_GET['ds'])){
    echo "<center><h3 style='color:green;padding:30px 0px;text-align:center;'>Member Information Successfully Deleted!</h3></center>";
    }
    ?>
</center>
<div class="a_hide print_en">Copyright &copy; Sumiya Akter </div>
</div>

<?php
include 'footer.php';
?>