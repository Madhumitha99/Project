
<?php
include("nocmenu1.html");
?>
 <?php
session_start();
?>
 <!DOCTYPE HTML>  
<html>
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

#table_id {
    
}
.myTable { 
  width: 100%;
  text-align: left;
  background-color: white;
  border-collapse: collapse; 
  }
.myTable th { 
  background-color:#0080ff;
  color: white; 
  }
.mytable td {
   font-size: 20px;
   font-weight: bold;
}
.myTable td, 
.myTable th { 
  padding: 10px;
  border: 1px solid #0080ff; 
  }

table, th, td {
    border: 1px solid #A9A9A9;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: center;
    height: 10px;
    width:70px;
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
    height:40px;
    width:130px;
    margin: 4px 2px;
    cursor: pointer;
}
.button {
  border-radius: 2px;
  background-color:black;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size:20px;
  padding: 5px;
  width: 180px;
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
<script>
function onButtonClick(){
  document.getElementById('textInput').className="show";
}
</script>

</head>
<body bgcolor="#e5f2ff">  
  

<?php

   $NameErr =$Emp_IDErr = $LocationErr = $DepartmentErr =$DistErr =$DOLErr =$Disable_IDErr = $Remove_MemErr =$Disable_VPNErr = $Reset_UserErr= $Move_UserErr = $Mail_BoxErr = $Mail_TypeErr = $Hide_UserErr = $Remove_ShareErr = $WipeErr = $Convert_MailErr = $Remove_LicErr = $Mail_ForwErr = $Ext_NameErr = $AccessErr =$DescriptErr =  "";
$Name =$Emp_ID =$Location =$Department =$Dist =$DOL =   $Disable_ID = $Remove_Mem =$Disable_VPN = $Reset_User = $Move_User = $Mail_Box = $Mail_Type = $Hide_User = $Remove_Share = $Wipe = $Convert_Mail = $Remove_Lic = $Mail_Forw = $Ext_Name = $Access =$Descript =  "";

include ('connect.php');
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"userasset");

if(!isset($_POST['update']) ){

    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'userasset';

   $Emp_ID = $_GET['o1'];
  $_SESSION['Emp_ID']=$Emp_ID;

  $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    $result = $db->query("SELECT * FROM nocform where Emp_ID = '$Emp_ID' ");
    
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $Name=$row['Name'];
        $Emp_ID=$row['Emp_ID'];
        $Location=$row['Location'];
        $Department=$row['Department'];
        $Dist=$row['Dist'];
        $DOL=$row['DOL'];
        $Disable_ID=$row['Disable_ID'];
        $Remove_Mem=$row['Remove_Mem'];
        $Disable_VPN=$row['Disable_VPN'];
        $Reset_User=$row['Reset_User'];
        $Move_User=$row['Move_User'];
        $Mail_Box=$row['Mail_Box'];
        $Mail_Type=$row['Mail_Type'];
        $Hide_User=$row['Hide_User'];
        $Remove_Share=$row['Remove_Share'];
        $Wipe=$row['Wipe'];
        $Convert_Mail=$row['Convert_Mail'];
        $Remove_Lic=$row['Remove_Lic'];
        $Mail_Forw=$row['Mail_Forw'];
        $Ext_Name=$row['Ext_Name'];
        $Access=$row['Access'];
        $Descript=$row['Descript'];
        $Date=$row['Date'];
        $Time=$row['Time'];
        
      }
      else
      {
         echo "<script type='text/javascript'>alert('Failed')</script>";
      }
  

}
if(isset($_POST['update'])){
$Emp_ID=$_SESSION['Emp_ID'];

        $Name=$_POST['Name'];
        $Emp_ID=$_POST['Emp_ID'];
        $Location=$_POST['Location'];
        $Department=$_POST['Department'];
        $Dist=$_POST['Dist'];
        $DOL=$_POST['DOL'];
        $Disable_ID=$_POST['Disable_ID'];
        $Remove_Mem=$_POST['Remove_Mem'];
        $Disable_VPN=$_POST['Disable_VPN'];
        $Reset_User=$_POST['Reset_User'];
        $Move_User=$_POST['Move_User'];
        $Mail_Box=$_POST['Mail_Box'];
        $Mail_Type=$_POST['Mail_Type'];
        $Hide_User=$_POST['Hide_User'];
        $Remove_Share=$_POST['Remove_Share'];
        $Wipe=$_POST['Wipe'];
        $Convert_Mail=$_POST['Convert_Mail'];
        $Remove_Lic=$_POST['Remove_Lic'];
        $Mail_Forw=$_POST['Mail_Forw'];
        $Ext_Name=$_POST['Ext_Name'];
        $Access=$_POST['Access'];
         $Descript=$_POST['Descript'];
        
        ;

$query = "UPDATE nocform SET Name='$Name' ,Location='$Location' ,Department='$Department' ,Dist='$Dist',DOL='$DOL',Disable_ID='$Disable_ID' , Remove_Mem='$Remove_Mem', Disable_VPN='$Disable_VPN' , Reset_User='$Reset_User' , Move_User='$Move_User' , Mail_Box='$Mail_Box' , Mail_Type='$Mail_Type' , Hide_User='$Hide_User' , Remove_Share='$Remove_Share' , Wipe='$Wipe' , Convert_Mail='$Convert_Mail' , Remove_Lic='$Remove_Lic' , Mail_Forw='$Mail_Forw' , Ext_Name='$Ext_Name' , Access='$Access', Descript='$Descript' WHERE Emp_ID='$Emp_ID' ";

$query1 = "UPDATE nocform2 SET Name='$Name',Department='$Department,'DOL='$DOL' WHERE  Emp_ID='$Emp_ID' ";

if(mysqli_query($link,$query1)) {}
  else{
die ("failed to query database 4".mysqli_error($link));
  }

if(mysqli_query($link,$query)) 
{
     echo "<script type='text/javascript'>alert('UPDATED.......!!!!')</script>";
    
  
      echo "<script>setTimeout(\"location.href = 'nocview.php';\",20);</script>";
  //ob_clean();
//require('html2pdf.php
}


else{   die ("failed to query database 4".mysqli_error($link));}

mysqli_close($link);

} 
      function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>



 <br><br><br><br>
<center> <h1>NOC FORM</h1> </center> 
 <br><br><br><br>
         <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" autocomplete="off">
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Name</b> : <input type="text"  name="Name" value="<?php echo $Name; ?>"  style="width: 200px; height: 30px;" required>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Emp ID</b> : <input type="text"  name="Emp_ID" value="<?php echo $Emp_ID; ?>" style="width: 200px; height: 30px;"  required> 
<br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp
<b>State</b>:<select id="Location" name="Location" style="width: 200px; height: 30px;" required>  
<option><?php echo $Location; ?></option>                    
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
    <option value="Jharkhand">Jharkhand</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Kerala">Kerala</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">izoram</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Odisha">Odisha</option>
    <option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarkhand">Uttarkhand</option>
    <option value="West Bengal">West Bengal</option>
</select>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Department</b>:<select id="Department" name="Department" style="width: 200px; height: 30px;" required>     
    <option><?php echo $Department; ?></option>
    <option value="Administration">Administration</option>
    <option value="Commerical">Commerical</option>
    <option value="Content Coping">Content Coping</option>
    <option value="Corporate">Corporate</option>
    <option value="Corporate Communications">Corporate Communications</option>
    <option value="Corporate Special Event">Corporate Special Event</option>
    <option value="Corporate Special Event(Justickets)">Corporate Special Event(Justickets)</option>
    <option value="Corporate Special Event(Icount)">Corporate Special Event(Icount)</option>
    <option value="Duplication">Duplication</option>
    <option value="ERP Development">ERP Development</option>
    <option value="F&A">F&A</option>
    <option value="Front Office">Front Office</option>
    <option value="General">General</option>
    <option value="HR">HR</option>
    <option value="Icount">Icount</option>
    <option value="Immersive Audio">Immersive Audio</option>
    <option value="Interactive Media">Interactive Media</option>
    <option value="IT(Systems)">IT(Systems)</option>
     <option value="Justicket">Justicket</option>
    <option value="Legal">Legal</option>
    <option value="L2 Support">L2 Support</option>
     <option value="Marketing">Marketing</option>
    <option value="Marketing-Domain">Marketing-Domain</option>
    <option value="Marketing-QCN">Marketing-QCN</option>
    <option value="Marketing-Qube">Marketing-Qube</option>
    <option value="Marketing-Qube(Operations)">Marketing-Qube(Operations)</option>
    <option value="Marketing-Qube Theatre MRKT">Marketing-Qube Theatre MRKT</option>
    <option value="Mastering">Mastering</option>
    <option value="Pro Tools">Pro Tools</option>
    <option value="QPN">QPN</option>
    <option value="QCN-Marketing Operations">QCN-Marketing Operations</option>
    <option value="QCN-Operations">QCN-Operations</option>
    <option value="QCN-Technical Operations">QCN-Technical Operations</option>
    <option value="Qube Theatre Marketing">Qube Theatre Marketing</option>
    <option value="Qube Operation">Qube Operation</option>
    <option value="Qube biling">Qube biling</option>
    <option value="Qube Wire">Qube Wire</option>
    <option value="Qube MKtg">Qube MKtg</option>
    <option value="Qube">Qube</option>
    <option value="Qts">Qts</option>
    <option value="Qtc & Commerical">Qtc & Commerical</option>
    <option value="Software">Software</option>
    <option value="Support Services">Support Services</option>
    <option value="Support Services(Administration)">Support Services(Administration)</option>
    <option value="Support Services(Commerical)">Support Services(Commerical)</option>
    <option value="Support Services(F&A)">Support Services(F&A)</option>
     <option value="Support Services(HR)">Support Services(HR)</option>
    <option value="Support Services(Infrastructure)">Support Services(Infrastructure)</option>
     <option value="Support Services(Legal)">Support Services(Legal)</option>
    <option value="Support Services(Marketing-Qube)">Support Services(Marketing-Qube)</option>
    <option value="Support Services(QCN-Marketing)">Support Services(QCN-Marketing)</option>
    <option value="Support Services(QCN-Operations)">Support Services(QCN-Operations)</option>
    <option value="Support Services(Qube Theatre Marketing)">Support Services(Qube Theatre Marketing)</option>
    <option value="Support Services(Qube Testing Center)">Support Services(Qube Testing Center)</option>
    <option value="Technical Services-AVID">Technical Services-AVID</option>
    <option value="Technical Services-Delta Services">Technical Services-Delta Services</option>
     <option value="Technical Services-Digi/Qube Service">Technical Services-Digi/Qube Service</option>
    <option value="Technical Services-Pro Audio">Technical Services-Pro Audio</option>
     <option value="Technical Services-Qube">Technical Services-Qube</option>
     <option value="Technical Services-Qube Support">Technical Services-Qube Support</option>
    <option value="Technical Services-Qube(CS)">Technical Services-Qube(CS)</option>
     <option value="Technical Services-Qube Testing Center">Technical Services-Qube Testing Center</option>
    <option value="Technical Services(Qube ARC)">Technical Services(Qube ARC)</option>
     <option value="Technology Marketing">Technology Marketing</option>   
</select>
<br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>District</b>: <input type="text"  name="Dist" value="<?php echo $Dist; ?>" style="width: 200px; height: 30px;" required>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>DOL</b> : <input type="date"  name="DOL" value="<?php echo $DOL; ?>" style="width: 200px; height: 30px;"  required> 
<br><br><br><br><br>                      
<hr>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h2>USER ID</h2>
  <br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <b>Disable User ID</b> :&nbsp
                     <input type="radio"   name="Disable_ID"  value="Yes" 
                      <?php
                      if($row["Disable_ID"]=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                     style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Disable_ID"  value="No" 
                     <?php
                      if($row["Disable_ID"]=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Remove Member from groups</b> :&nbsp <input type="radio"   name="Remove_Mem"  value="Yes" 
                     <?php
                      if($row["Remove_Mem"]=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Mem"  value="No" 
                    <?php
                      if($row["Remove_Mem"]=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Mem"  value="NA" 
                    <?php
                      if($row["Remove_Mem"]=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA

<br><br><br>

  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <b>Disable VPN</b> :&nbsp <input type="radio"   name="Disable_VPN"  value="Yes" 
                    <?php
                      if($row["Disable_VPN"]=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Disable_VPN"  value="No" 
                     <?php
                      if($row["Disable_VPN"]=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Disable_VPN"  value="NA"
                     <?php
                      if($row["Disable_VPN"]=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Reset User Password</b> :&nbsp <input type="radio"   name="Reset_User"  value="Yes" 
                     <?php
                      if($row["Reset_User"]=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Reset_User"  value="No"
                     <?php
                      if($row["Reset_User"]=='No')
                      {
                        echo "checked";
                      }
                      ?>
                   style="height:16px; width:16px;" >No

<br><br><br>

  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <b>Move User to Exit OU</b> :&nbsp <input type="radio"   name="Move_User"  value="Yes"
                     <?php
                      if($row["Move_User"]=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Move_User"  value="No" 
                    <?php
                      if($row["Move_User"]=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                    <br><br><br><br>                      
<hr>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h2>MAIL BOX</h2>
  <br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <b>Mail Box</b> :&nbsp <input type="radio"   name="Mail_Box"  value="Yes" 
                    <?php
                      if($row["Mail_Box"]=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Mail_Box"  value="No" 
                     <?php
                      if($row["Mail_Box"]=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Mail Box Type</b> :&nbsp <input type="radio"   name="Mail_Type"  value="O365" 
                     <?php
                      if($row["Mail_Type"]=='O365')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">O365
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Mail_Type"  value="Onpermise" 
                     <?php
                      if($row["Mail_Type"]=='Onpermise')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Onpermise
                    

<br><br><br>

  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <b>Hide User from Addressbook</b> :&nbsp <input type="radio"   name="Hide_User"  value="Yes"
                     <?php
                      if($row["Hide_User"]=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Hide_User"  value="No" 
                     <?php
                      if($row["Hide_User"]=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Hide_User"  value="NA" 
                     <?php
                      if($row["Hide_User"]=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Remove Sharepoints groups</b> :&nbsp <input type="radio"   name="Remove_Share"  value="Yes" 
                     <?php
                      if($row["Remove_Share"]=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Share"  value="No" 
                     <?php
                      if($row["Remove_Share"]=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Share"  value="NA"
                     <?php
                      if($row["Remove_Share"]=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA

<br><br><br>

  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <b>Wipe Mobile device</b> :&nbsp <input type="radio"   name="Wipe"  value="Yes" 
                     <?php
                      if($row["Wipe"]=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Wipe"  value="No" 
                     <?php
                      if($row["Wipe"]=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Wipe"  value="NA" 
                     <?php
                      if($row["Wipe"]=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Convert to Shared Mailbox</b> :&nbsp <input type="radio"   name="Convert_Mail"  value="Yes" 
                     <?php
                      if($row["Convert_Mail"]=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Convert_Mail"  value="No" 
                     <?php
                      if($row["Convert_Mail"]=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Convert_Mail"  value="NA" 
                     <?php
                      if($row["Convert_Mail"]=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA

<br><br><br>

  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <b>Remove License</b> :&nbsp <input type="radio"   name="Remove_Lic"  value="Yes" 
                     <?php
                      if($row["Remove_Lic"]=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Lic"  value="No" 
                    <?php
                      if($row["Remove_Lic"]=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Lic"  value="NA" 
                    <?php
                      if($row["Remove_Lic"]=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Mail Forwarding </b>:&nbsp <input type="radio"   name="Mail_Forw"  value="Yes"    
                      <?php
                      if($row["Mail_Forw"]=='Yes')
                      {
                        echo "checked";
                      }
                      ?>  onclick="onButtonClick()" style="height:16px; width:16px;" >Yes
                        <input class="hide" type="text" id="textInput" name="Mail_Forw" value="<?php echo $Mail_Forw; ?>"  />
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Mail_Forw"  value="No" 
                       <?php
                      if($row["Mail_Forw"]=='No')
                      {
                        echo "checked";
                      }
                      ?>
                   style="height:16px; width:16px;" >No
                  
<br><br><br>                      
<hr>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h2>EXTN</h2>
  <br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <b>Extn Name Removal</b> :&nbsp <input type="radio"   name="Ext_Name"  value="Yes" 
                       <?php
                      if($row["Ext_Name"]=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Ext_Name"  value="No" 
                         <?php
                      if($row["Ext_Name"]=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Ext_Name"  value="NA" 
                         <?php
                      if($row["Ext_Name"]=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA
                    <br><br><br>  
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h2>ACCESS CARD</h2>
 <br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <b>Access Card Disable</b> :&nbsp <input type="radio"   name="Access"  value="Yes" 
                         <?php
                      if($row["Access"]=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Access"  value="No" 
                       <?php
                      if($row["Access"]=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Access"  value="NA" 
                       <?php
                      if($row["Access"]=='NA')
                      {
                        echo "checked";
                      }
                      ?>

                    style="height:16px; width:16px;">NA

<br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Comment</b>:&nbsp&nbsp<input type="text" name="Descript" value="<?php echo $Descript; ?>" style="width: 300px; height: 70px;"   required> 
<br><br><br>


                            
          <div class="row">
            <div class="col-sm-12 text-center">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp




              <input type="submit" id="btn" class="but" name="update" value="Update">
            
            </div>
          </div><!--row19 ends-->
          <div class="row">
            <div class="col-sm-12">
              <br>
            </div>
          </div><!--row20 ends-->
          </form>
      </div>
        </div><!--col-sm-6 is getting closed-->
        
        <div class="col-sm-3">
        </div>
     
      
    <!-- </div> -->
  </body>
</html>