<?php
include("nocmenu1.html");
?>
<?php
require_once "connect.php";
$result = mysqli_query($conn, "SELECT * FROM nocform");
?>
<html>
<head>
<title>NOC FORM</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="nocusers.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.hide{
  display:none;
}
.t1
{
  width: 50%;
  margin-left: 200px;
}
</style>
<style>
.selected {
  background-color:white;
  color:#1a75ff;
  
}

.high{
  background-color:white;
  color:#cc3300;
}
.low{
  background-color:white;
  color:#00b359;
}
.medium{
  background-color:white;
  color:#FFA500;
}

#table_id {
    
}
.myTable { 
  width: 350%;
  background-color: white;
  border-collapse: collapse; 
  font-size: 18px;
  }
.myTable th { 
  background-color:darkslategray;
  color: white; 
  }
.mytable td {
  
   font-weight: ;
}
.myTable td, 
.myTable th { 
  border: 1px solid black; 
  }

table, th, td {
    border: 1px solid #A9A9A9;
    border-collapse: collapse;
}

th, td {
    padding: 15px;
    text-align: center;
    height: 30px;
    width:20px;
}
tr:nth-child(even) {
  background-color:#e5f2ff;
}
#search {
    border:1px solid #0080ff;
    border-radius: 4px;
}
.but {
    background-color:darkslategray;
    border: none;
    color: white;
    border-radius: 4px;
    /*padding: 15px 32px;*/
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    height:30px;
    width:100px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
<style>
#myInput
{
    border-radius: 4px;
    border: 1px solid #A9A9A9;
    /*padding: 20px;*/ 
    width: 230px;
    height: 30px;
}
#myInput1
{
    border-radius: 4px;
    border: 1px solid #A9A9A9;
    /*padding: 20px;*/ 
    width: 230px;
    height: 30px;
}
</style>
</head>
<body>
	<br><br><br>
<form name="frmUser" method="post" action="">
	<center>
	<h1>NOC FORM</h1>
</center>
<div style="width:800px;">

	<input type="button" name="update" value="Update" class='but' onClick="setUpdateAction();" /> 

	<input type="button" name="delete" value="Delete" class='but' onClick="setDeleteAction();" />

	<br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<b>Emp ID</b> :<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search" title="Type in a Emp Id">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Emp Name</b> :<input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search" title="Type in a name">

<br><br><br>
<table border="0" cellpadding="10" cellspacing="1" width="500" class='myTable' id='table_id'  align='center'>
<tr>
	<th></th>
<th>Name</th><th>Emp ID</th><th>State</th><th>District</th><th>Department</th><th>DOL</th><th>Disable User ID</th><th>Remove member from groups</th><th>Disable VPN</th><th>Reset User Password</th><th>Move User to Exit OU</th><th>Mail Box</th><th>Mail Box Type</th><th>Hide User from Addressbook</th><th>Remove Sharepoints groups</th><th>Wipe Mobile device</th><th>Convert to Shared Mailbox</th><th>Remove License</th><th>Mail Forwarding</th><th>Extn Name Removal</th><th>Access Card Disable</th><th>Comment</th><th>Machine Type</th><th>Make</th><th>Model</th><th>Serial No</th><th>Adaptor</th><th>HDD</th><th>RAM</th><th>PROC</th><th>OS</th><th>Monitor</th><th>M_SerialNo</th><th>Other</th><th>Category</th><th>Sub Category</th><th>Provider</th><th>IMEI</th><th>RSN</th><th>MobileNo</th><th>Date</th><th>Time</th>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>

<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="nocform[]" value="<?php echo $row["Emp_ID"]; ?>" ></td>
<td style='font-size:16px;'><?php echo $row["Name"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Emp_ID"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Location"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Dist"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Department"]; ?></td>
<td style='font-size:16px;'><?php echo $row["DOL"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Disable_ID"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Remove_Mem"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Disable_VPN"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Reset_User"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Move_User"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Mail_Box"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Mail_Type"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Hide_User"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Remove_Share"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Wipe"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Convert_Mail"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Remove_Lic"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Mail_Forw"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Ext_Name"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Access"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Descript"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Machine_Type"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Make"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Model"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Serial_No"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Adaptor"]; ?></td>
<td style='font-size:16px;'><?php echo $row["HDD"]; ?></td>
<td style='font-size:16px;'><?php echo $row["RAM"]; ?></td>
<td style='font-size:16px;'><?php echo $row["PROC"]; ?></td>
<td style='font-size:16px;'><?php echo $row["OS"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Monitor"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Monitor_Sno"]; ?></td>
<td style='font-size:16px;'><?php echo $row["other"]; ?></td>
<td style='font-size:16px;'><?php echo $row["cat"]; ?></td>
<td style='font-size:16px;'><?php echo $row["sub"]; ?></td>
<td style='font-size:16px;'><?php echo $row["provider"]; ?></td>
<td style='font-size:16px;'><?php echo $row["imei"]; ?></td>
<td style='font-size:16px;'><?php echo $row["rsn"]; ?></td>
<td style='font-size:16px;'><?php echo $row["mobno"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Date"]; ?></td>
<td style='font-size:16px;'><?php echo $row["Time"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table_id");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
  td = tr[i].getElementsByTagName("td")[2];
  if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("table_id");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
  td = tr[i].getElementsByTagName("td")[1];
  if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</form>
</div>
</body></html>