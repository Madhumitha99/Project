

<?php
include("nocmenu1.html");
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
body{
  background-image: url("");
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
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
    height: 20px;
    width:10px;
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
<title>
       
        </title>
</head>
<body bgcolor="#e5f2ff">
 <br><br><br><br>
 <center> 
  <h1>NOC FORM</h1> 
</center> 
<br>
<b>Emp ID</b> :<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search" title="Type in a Emp Id">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Emp Name</b> :<input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search" title="Type in a name">
<br>
<?php
include ("connect.php"); 
$sql = "SELECT * FROM nocform ORDER BY S_No DESC";
$result = $conn->query($sql);

echo "<br><br>";
if ($result->num_rows > 0) {
    //echo "<br><br>";
 echo "<table class='myTable' id='table_id' align='center'><tr><th>Name</th><th>Emp ID</th><th>State</th><th>District</th><th>Department</th><th>DOL</th><th>Disable User ID</th><th>Remove member from groups</th><th>Disable VPN</th><th>Reset User Password</th><th>Move User to Exit OU</th><th>Mail Box</th><th>Mail Box Type</th><th>Hide User from Addressbook</th><th>Remove Sharepoints groups</th><th>Wipe Mobile device</th><th>Convert to Shared Mailbox</th><th>Remove License</th><th>Mail Forwarding</th><th>Extn Name Removal</th><th>Access Card Disable</th><th>Comment</th><th>Machine Type</th><th>Make</th><th>Model</th><th>Serial No</th><th>Adaptor</th><th>HDD</th><th>RAM</th><th>PROC</th><th>OS</th><th>Monitor</th><th>M_SerialNo</th><th>Other</th><th>Category</th><th>Sub Category</th><th>Provider</th><th>IMEI</th><th>RSN</th><th>MobileNo</th><th>Date</th><th>Time</th><th>File View</th><th>Edit</th><th>Print</th>
 </tr>";
 while($row = $result->fetch_assoc()) {
    
  
        echo "<tr><td style='font-size:18px;'>" . $row["Name"]. "</td>
        <td style='font-size:18px;'>" . $row["Emp_ID"]. "</td>
        <td style='font-size:18px;'>" . $row["Location"]. "</td>
        <td style='font-size:18px;'>" . $row["Dist"]. "</td>
        <td style='font-size:18px;'>" . $row["Department"]. "</td>
        <td style='font-size:18px;'>" . $row["DOL"]. "</td>
        <td style='font-size:18px;'>" . $row["Disable_ID"]. "</td>
        <td style='font-size:18px;'>" . $row["Remove_Mem"]. "</td>
        <td style='font-size:18px;'>" . $row["Disable_VPN"]. "</td>
        <td style='font-size:18px;'>" . $row["Reset_User"]. "</td>
        <td style='font-size:18px;'>" . $row["Move_User"]. "</td>
        <td style='font-size:18px;'>" . $row["Mail_Box"]. "</td>
        <td style='font-size:18px;'>" . $row["Mail_Type"]. "</td>
        <td style='font-size:18px;'>" . $row["Hide_User"]. "</td>
        <td style='font-size:18px;'>" . $row["Remove_Share"]. "</td>
        <td style='font-size:18px;'>" . $row["Wipe"]. "</td>
        <td style='font-size:18px;'>" . $row["Convert_Mail"]. "</td>
        <td style='font-size:18px;'>" . $row["Remove_Lic"]. "</td>
        <td style='font-size:18px;'>" . $row["Mail_Forw"]. "</td>
        <td style='font-size:18px;'>" . $row["Ext_Name"]. "</td>
        <td style='font-size:18px;'>" . $row["Access"]. "</td>
        <td style='font-size:18px;'>" . $row["Descript"]. "</td>
        <td style='font-size:18px;'>" . $row["Machine_Type"]. "</td>
        <td style='font-size:18px;'>" . $row["Make"]. "</td>
        <td style='font-size:18px;'>" . $row["Model"]. "</td>
        <td style='font-size:18px;'>" . $row["Serial_No"]. "</td>
        <td style='font-size:18px;'>" . $row["Adaptor"]. "</td>
        <td style='font-size:18px;'>" . $row["HDD"]. "</td>
        <td style='font-size:18px;'>" . $row["RAM"]. "</td>
        <td style='font-size:18px;'>" . $row["PROC"]. "</td>
        <td style='font-size:18px;'>" . $row["OS"]. "</td>
        <td style='font-size:18px;'>" . $row["Monitor"]. "</td>
        <td style='font-size:18px;'>" . $row["Monitor_Sno"]. "</td>
        <td style='font-size:18px;'>" . $row["other"]. "</td>
        <td style='font-size:18px;'>" . $row["cat"]. "</td>
        <td style='font-size:18px;'>" . $row["sub"]. "</td>
        <td style='font-size:18px;'>" . $row["provider"]. "</td>
        <td style='font-size:18px;'>" . $row["imei"]. "</td>
        <td style='font-size:18px;'>" . $row["rsn"]. "</td>
        <td style='font-size:18px;'>" . $row["mobno"]. "</td>
        <td style='font-size:18px;'>" . $row["Date"]. "</td>
        <td style='font-size:18px;'>" . $row["Time"]. "</td>" ;
  
        $Emp_ID=$row['Emp_ID'];
        //$_SESSION['varname'] = $sno;

       // echo "<td><form method='GET' action='edit.php' ><button name='o' class='but' value='$sno'>Edit</button></form></td>";
         echo "<td><form method='GET' action='nocfileview.php' ><button name='o1' class='but' value='$Emp_ID'>File View</button></form></td>";
        echo "<td><form method='GET' action='nocupdate.php' ><button name='o1' class='but' value='$Emp_ID'>Edit</button></form></td>";
        echo "<td><form method='GET' action='nocpdf.php' ><button name='generate_pdf' class='but' value='$Emp_ID' target='blank'>Print</button></form></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



$conn->close();
?> 
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
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
<script>
function myFunction1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("table_id");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
  td = tr[i].getElementsByTagName("td")[0];
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
<br><br>
</body>
</html>
