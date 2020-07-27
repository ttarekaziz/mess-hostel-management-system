<html lang="en">
<head>

<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<style type="text/css" media="screen">
.myMainContent{
    padding:20px 5px;
}

</style>
</head>
<body>
		<?php
            include 'header.php';
            
        ?>
<div class="flex-container">
<div id="header">
</div>


<form method="POST" style="text-align:center">
<br><br>
<h3>WOrker's Information </h3><br>
Search By Worker ID:<br>
 <input name="search_id" value="" type="number"><br>
<br>



<br>
<input type="submit" class="button" value="Search"><br><br>
</form>
<article class="article">
<div class="myMainContent"  id="div_print">
<center>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mess_management";
$id="";
if(isset($_POST["search_id"])){
$id=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id,name,phone,address,type FROM tb_workers where id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border=1>";
	echo "<tr><th> Worker's Id   </th><th>Worker's Name:</th><th>Phone No:</th><th>Worker's Address:</th><th>Worker's Type: </th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>". $row["id"]. "</td><td>" . $row["name"]."</td><td>" . $row["phone"]."</td><td>" . $row["address"]."</td><td>" . $row["type"]."</td>"; 
	echo "</tr>";
    }
echo "</table>";
} else {
    echo " <center> No results Found </center>";
}

mysqli_close($conn);
?> 
<br><br><br>
<div class="a_hide print_en">Copyright &copy; Sumiya Akter </div>
</div>
</div>
</center>
 <center><a href="#"  class="no-print" onClick="printdiv('div_print');" ><button>Print All Information</button></a></center>
<br><br><br><br>
</article>

<?php
            include 'footer.php';
           
        ?>

</body>
</html>
