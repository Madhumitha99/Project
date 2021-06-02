
<?php

$connect = new PDO("mysql:host=localhost;dbname=userasset", "root", "");

$start_date_error = '';
$end_date_error = '';

if(isset($_POST["export"]))
{
 if(empty($_POST["start_date"]))
 {
  $start_date_error = '<label class="text-danger">Start Date is required</label>';
 }
 else if(empty($_POST["end_date"]))
 {
  $end_date_error = '<label class="text-danger">End Date is required</label>';
 }
 else
 {
  $file_name = 'Order Data.csv';
  header("Content-Description: File Transfer");
  header("Content-Disposition: attachment; filename=$file_name");
  header("Content-Type: application/csv;");

  $file = fopen('php://output', 'w');

  $header = array("Name", "Emp ID", "State", "District", "Department", "DOL", "Disable User ID" , "Remove member from groups", "Disable VPN", "Reset User Password", "Move User to Exit OU", "Mail Box", "Mail Box Type", "Hide User from Addressbook", "Remove Sharepoints groups", "Wipe Mobile device", "Convert to Shared Mailbox", "Remove License", "Mail Forwarding", "Extn Name Removal", "Access Card Disable","Comment", "Machine_Type", "Make", "Model", "Serial No" , "Adaptor","HDD" ,"RAM", "PROC", "OS", "Monitor", "M_SerialNo" ,"Other", "Category", "Sub Category", "Provider", "IMEI", "RSN","MobileNo" ,"Date", "Time");

  fputcsv($file, $header);

  $query = "
  SELECT * FROM nocform 
  WHERE Date >= '".$_POST["start_date"]."' 
  AND Date <= '".$_POST["end_date"]."' 
  ORDER BY Date DESC
  ";
  $statement = $connect->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  foreach($result as $row)
  {
   $data = array();
   $data[] = $row["Name"];
   $data[] = $row["Emp_ID"];
   $data[] = $row["Location"];
   $data[] = $row["Dist"];
   $data[] = $row["Department"];
    $data[] = $row["DOL"];
   $data[] = $row["Disable_ID"];
   $data[] = $row["Remove_Mem"];
   $data[] = $row["Disable_VPN"];
   $data[] = $row["Reset_User"];
    $data[] = $row["Move_User"];
   $data[] = $row["Mail_Box"];
   $data[] = $row["Mail_Type"];
   $data[] = $row["Hide_User"];
   $data[] = $row["Remove_Share"];
    $data[] = $row["Wipe"];
   $data[] = $row["Convert_Mail"];
   $data[] = $row["Remove_Lic"];
   $data[] = $row["Mail_Forw"];
   $data[] = $row["Ext_Name"];
    $data[] = $row["Access"];
    $data[] = $row["Descript"];
     $data[] = $row["Machine_Type"];
    $data[] = $row["Make"];
   $data[] = $row["Model"];
   $data[] = $row["Serial_No"];
      $data[] = $row["Adaptor"];
   $data[] = $row["HDD"];
    $data[] = $row["RAM"];
    $data[] = $row["PROC"];
     $data[] = $row["OS"];
    $data[] = $row["Monitor"];
   $data[] = $row["Monitor_Sno"];
    $data[] = $row["other"];
   $data[] = $row["cat"];
   $data[] = $row["sub"];
 $data[] = $row["provider"];
   $data[] = $row["imei"];
   $data[] = $row["rsn"];
   $data[] = $row["mobno"];
   $data[] = $row["Date"];
   $data[] = $row["Time"];
  
   fputcsv($file, $data);
  }
  fclose($file);
  exit;
 }
}

$query = "
SELECT * FROM nocform 
ORDER BY Date DESC;
";

$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

?>
<?php
include("nocmenu1.html");
?>

<html>
 <head>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
 </head>
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
 <body bgcolor="#e5f2ff">

 <br><br><br>
 <center> 
  <h2>NOC FORM</h2> 
</center>
  <div class="container box">
   <div class="table-responsive">
    <div class="row">
     <form method="post">
      <div class="input-daterange">
       <div class="col-md-4">
        <h4>From Date</h4>
        <input type="text" name="start_date" class="form-control" readonly />
        <?php echo $start_date_error; ?>
       </div>
       <div class="col-md-4">
        <h4>To Date</h4>
        <input type="text" name="end_date" class="form-control" readonly />
        <?php echo $end_date_error; ?>
       </div>
      </div>
      <br><br>
      <div class="col-md-2">
        
       <input type="submit" name="export" value="Export to Excel" class="btn btn-info" />
      </div>
     </form>
    </div>
    <br />
    <table class="table table-bordered table-striped" >
     <thead>
      <tr>
    <th>Name</th><th>Emp ID</th><th>State</th><th>District</th><th>Department</th><th>DOL</th><th>Disable User ID</th><th>Remove member from groups</th><th>Disable VPN</th><th>Reset User Password</th><th>Move User to Exit OU</th><th>Mail Box</th><th>Mail Box Type</th><th>Hide User from Addressbook</th><th>Remove Sharepoints groups</th><th>Wipe Mobile device</th><th>Convert to Shared Mailbox</th><th>Remove License</th><th>Mail Forwarding</th><th>Extn Name Removal</th><th>Access Card Disable</th><th>Comment</th><th>Machine Type</th><th>Make</th><th>Model</th><th>Serial No</th><th>Adaptor</th><th>HDD</th><th>RAM</th><th>PROC</th><th>OS</th><th>Monitor</th><th>M_SerialNo</th><th>Other</th><th>Category</th><th>Sub Category</th><th>Provider</th><th>IMEI</th><th>RSN</th><th>MobileNo</th><th>Date</th><th>Time</th>
      </tr>
     </thead>
     <tbody>
      <?php
      foreach($result as $row)
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
     </tbody>
    </table>
    <br />
    <br />
   </div>
  </div>
 </body>
 <br><br>
</html>

<script>

$(document).ready(function(){
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy-mm-dd",
  
  autoclose: true
 });
});

</script>
