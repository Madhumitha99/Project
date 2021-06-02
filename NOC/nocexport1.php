<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "userasset");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM nocform";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
         <tr>  
                 <th>Name</th><th>Emp ID</th><th>State</th><th>District</th><th>Department</th><th>DOL</th><th>Disable User ID</th><th>Remove member from groups</th><th>Disable VPN</th><th>Reset User Password</th><th>Move User to Exit OU</th><th>Mail Box</th><th>Mail Box Type</th><th>Hide User from Addressbook</th><th>Remove Sharepoints groups</th><th>Wipe Mobile device</th><th>Convert to Shared Mailbox</th><th>Remove License</th><th>Mail Forwarding</th><th>Extn Name Removal</th><th>Access Card Disable</th><th>Comment</th><th>Machine Type</th><th>Make</th><th>Model</th><th>Serial No</th><th>Adaptor</th><th>HDD</th><th>RAM</th><th>PROC</th><th>OS</th><th>Monitor</th><th>M_SerialNo</th><th>Other</th><th>Category</th><th>Sub Category</th><th>Provider</th><th>IMEI</th><th>RSN</th><th>MobileNo</th><th>Date</th><th>Time</th>
                    
          </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
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
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>













