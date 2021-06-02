<?php
include("nocmenu1.html");
?>

<!DOCTYPE html>
<html>
 <head>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head> 
<head>
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
.button {
  border-radius: 2px;
  background-color:darkslategray;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size:20px;
  padding: 5px;
  width: 130px;
  height: 40px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;


}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
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
 <br><br>
 <center> 
  <h2>NOC FORM</h2> 
</center>
    <form method="post" action="nocexport1.php">
     <input type="submit" name="export" class="button" value="Export" />
    </form>

<br>
<?php
$connect = mysqli_connect("localhost", "root", "", "userasset");
$sql = "SELECT * FROM nocform ORDER BY Date DESC";  
$result = mysqli_query($connect, $sql);
?> 
   
    <table class="myTable">
     <tr style="font-size: 16px">  
        <th>Name</th><th>Emp ID</th><th>State</th><th>District</th><th>Department</th><th>DOL</th><th>Disable User ID</th><th>Remove member from groups</th><th>Disable VPN</th><th>Reset User Password</th><th>Move User to Exit OU</th><th>Mail Box</th><th>Mail Box Type</th><th>Hide User from Addressbook</th><th>Remove Sharepoints groups</th><th>Wipe Mobile device</th><th>Convert to Shared Mailbox</th><th>Remove License</th><th>Mail Forwarding</th><th>Extn Name Removal</th><th>Access Card Disable</th><th>Comment</th><th>Machine Type</th><th>Make</th><th>Model</th><th>Serial No</th><th>Adaptor</th><th>HDD</th><th>RAM</th><th>PROC</th><th>OS</th><th>Monitor</th><th>M_SerialNo</th><th>Other</th><th>Category</th><th>Sub Category</th><th>Provider</th><th>IMEI</th><th>RSN</th><th>MobileNo</th><th>Date</th><th>Time</th>
      </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
           <td>'.$row["Name"].'</td>   <td>'.$row["Emp_ID"].'</td>   <td>'.$row["Location"].'</td>  
         <td>'.$row["Dist"].'</td>  <td>'.$row["Department"].'</td> <td>'.$row["DOL"].'</td>  
         <td>'.$row["Disable_ID"].'</td>   
         <td>'.$row["Remove_Mem"].'</td> <td>'.$row["Disable_VPN"].'</td> 
         <td>'.$row["Reset_User"].'</td>   <td>'.$row["Move_User"].'</td>
         <td>'.$row["Mail_Box"].'</td>  <td>'.$row["Mail_Type"].'</td>   <td>'.$row["Hide_User"].'</td>
         <td>'.$row["Remove_Share"].'</td>  <td>'.$row["Wipe"].'</td>   <td>'.$row["Convert_Mail"].'</td>
         <td>'.$row["Remove_Lic"].'</td>  <td>'.$row["Mail_Forw"].'</td>   <td>'.$row["Ext_Name"].'</td>  
         <td>'.$row["Access"].'</td>  <td>'.$row["Descript"].'</td> 
          <td>'.$row["Machine_Type"].'</td> <td>'.$row["Make"].'</td> <td>'.$row["Model"].'</td> <td>'.$row["Serial_No"].'</td>  <td>'.$row["Adaptor"].'</td> 
 <td>'.$row["HDD"].'</td> <td>'.$row["RAM"].'</td> <td>'.$row["PROC"].'</td> <td>'.$row["OS"].'</td>  <td>'.$row["Monitor"].'</td> <td>'.$row["Monitor_Sno"].'</td>  <td>'.$row["other"].'</td> <td>'.$row["cat"].'</td> <td>'.$row["sub"].'</td>  <td>'.$row["provider"].'</td> <td>'.$row["imei"].'</td> <td>'.$row["rsn"].'</td>
 <td>'.$row["mobno"].'</td>
           <td>'.$row["Date"].'</td> <td>'.$row["Time"].'</td> 


         
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    
   <br><br>
 </body>  
</html>