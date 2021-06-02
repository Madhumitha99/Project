
<?php
include("nocmenu1.html");
?>

<!DOCTYPE html>
<html>
<head>
  

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
  width: 60%;
  text-align: left;
  background-color: white;
  border-collapse: collapse; 
  font-size: 20px;
  }
.myTable th { 
  background-color:silver;
  color:black; 
  }
.mytable td {
  
}
.myTable td, 
.myTable th { 
 
  border: 1px solid black; 
  }
  tr:nth-child(even) {
  background-color:white;
}
 th:nth-child(odd) {
  background-color:white;
}

table, th, td {
    border: 1px solid #A9A9A9;
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    text-align:center;
    height: 20px;
    width:10px;
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
    font-size: 16px;
    height:30px;
    width:100px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
</head>
<body bgcolor="#e5f2ff">
 <br><br><br>
 <center><h1>NOC FORM</h1></center> 

<center>
<?php
include ("connect.php"); 
$sql = "SELECT * FROM nocform ORDER BY S_No DESC LIMIT 1";
$result = $conn->query($sql);

echo "<br><br>";
if ($result->num_rows > 0) {
  
 while($row = $result->fetch_assoc()) {
    
         echo "<table class='myTable' id='table_id' align='center'>
              <tr><th>Name</th><td style='font-size:20px;'>" . $row["Name"]. "</td></tr>
              <tr><th>Emp ID</th><td style='font-size:20px;'>" . $row["Emp_ID"]. "</td></tr>
              <tr><th>State</th><td style='font-size:20px;'>" . $row["Location"]. "</td></tr>
              <tr><th>District</th><td style='font-size:20px;'>" . $row["Dist"]. "</td></tr>
              <tr><th>Department</th><td style='font-size:20px;'>" . $row["Department"]. "</td></tr>
               <tr><th>DOL</th><td style='font-size:20px;'>" . $row["DOL"]. "</td></tr>
              <tr><th>Disable User ID</th><td style='font-size:20px;'>" . $row["Disable_ID"]. "</td></tr>
              <tr><th>Remove member from groups</th><td style='font-size:20px;'>" . $row["Remove_Mem"]. "</td></tr>
              <tr><th>Disable VPN</th><td style='font-size:20px;'>" . $row["Disable_VPN"]. "</td></tr>
              <tr><th>Reset User Password</th><td style='font-size:20px;'>" . $row["Reset_User"]. "</td></tr>
              <tr><th>Move User to Exit OU</th><td style='font-size:20px;'>" . $row["Move_User"]. "</td></tr>
              <tr><th>Mail Box</th><td style='font-size:20px;'>" . $row["Mail_Box"]. "</td></tr>
              <tr><th>Mail Box Type</th><td style='font-size:20px;'>" . $row["Mail_Type"]. "</td></tr>
              <tr><th>Hide User from Addressbook</th><td style='font-size:20px;'>" . $row["Hide_User"]. "</td></tr>
              <tr><th>Remove Sharepoints groups</th><td style='font-size:20px;'>" . $row["Remove_Share"]. "</td></tr>
              <tr><th>Wipe Mobile device</th><td style='font-size:20px;'>" . $row["Wipe"]. "</td></tr>
              <tr><th>Convert to Shared Mailbox</th><td style='font-size:20px;'>" . $row["Convert_Mail"]. "</td></tr>
              <tr><th>Remove License</th><td style='font-size:20px;'>" . $row["Remove_Lic"]. "</td></tr>
              <tr><th>Mail Forwarding</th><td style='font-size:20px;'>" . $row["Mail_Forw"]. "</td></tr>
              <tr><th>Extn Name Removal</th><td style='font-size:20px;'>" . $row["Ext_Name"]. "</td></tr>
              <tr><th>Access Card Disable</th><td style='font-size:20px;'>" . $row["Access"]. "</td></tr>
               <tr><th>Comment</th><td style='font-size:20px;'>" . $row["Descript"]. "</td></tr>
              <tr><th>Machine Type</th><td style='font-size:20px;'>" . $row["Machine_Type"]. "</td></tr>
              <tr><th>Make</th><td style='font-size:20px;'>" . $row["Make"]. "</td></tr>
              <tr><th>Model</th><td style='font-size:20px;'>" . $row["Model"]. "</td></tr>
              <tr><th>Serial No</th><td style='font-size:20px;'>" . $row["Serial_No"]. "</td></tr>
              <tr><th>Adaptor</th><td style='font-size:20px;'>" . $row["Adaptor"]. "</td></tr>
              <tr><th>HDD</th><td style='font-size:20px;'>" . $row["HDD"]. "</td></tr>
              <tr><th>RAM</th><td style='font-size:20px;'>" . $row["RAM"]. "</td></tr>
              <tr><th>PROC</th><td style='font-size:20px;'>" . $row["PROC"]. "</td></tr>
              <tr><th>OS</th><td style='font-size:20px;'>" . $row["OS"]. "</td></tr>
               <tr><th>Monitor</th><td style='font-size:20px;'>" . $row["Monitor"]. "</td></tr>
              <tr><th>M_SerialNo</th><td style='font-size:20px;'>" . $row["Monitor_Sno"]. "</td></tr>
               <tr><th>Other</th><td style='font-size:20px;'>" . $row["other"]. "</td></tr>
              <tr><th>Category</th><td style='font-size:20px;'>" . $row["cat"]. "</td></tr>
              <tr><th>Sub Category</th><td style='font-size:20px;'>" . $row["sub"]. "</td></tr>
               <tr><th>Provider</th><td style='font-size:20px;'>" . $row["provider"]. "</td></tr>
               <tr><th>IMEI</th><td style='font-size:20px;'>" . $row["imei"]. "</td></tr>
              <tr><th>RSN</th><td style='font-size:20px;'>" . $row["rsn"]. "</td></tr>
              <tr><th>Mobile No</th><td style='font-size:20px;'>" . $row["mobno"]. "</td></tr>
              <tr><th>Date</th><td style='font-size:20px;'>" . $row["Date"]. "</td></tr>
              <tr><th>Time</th><td style='font-size:20px;'>" . $row["Time"]. "</td></tr>";
             
          
        $Emp_ID=$row['Emp_ID'];

        echo "<tr><th>Attachment</th><td><form method='GET' action='nocfileview.php' ><button name='o1' class='but' value='$Emp_ID'>File View</button></form></td></tr>";
        echo "<tr><th>Edit</th><td><form method='GET' action='nocupdate.php' ><button name='o1' class='but' value='$Emp_ID'>Edit</button></form></td></tr>";
        echo "<tr><th>Delete</th><td><form method='GET' action='nocdelete.php' ><button name='o1' class='but' value='$Emp_ID'>Delete</button></form></td></tr>";
        echo "<tr><th>Print</th><td><form method='GET' action='nocpdf.php' ><button name='generate_pdf' class='but' value='$Emp_ID'>Print</button></form></td></tr>";
      
    }
    echo "</table>";
} else {
    echo "0 results";
}



$conn->close();
?> 
</center>
<br><br>
</body>
</html>
