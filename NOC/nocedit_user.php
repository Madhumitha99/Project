<?php
include("nocmenu1.html");
?>
<br><br><br>
<?php
require_once "connect.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$nocformCount = count($_POST["Name"]);
for($i=0;$i<$nocformCount;$i++) {
mysqli_query($conn, "UPDATE nocform set Name='" . $_POST["Name"][$i] . "', Location='" . $_POST["Location"][$i] . "', Dist='" . $_POST["Dist"][$i] . "', Department='" . $_POST["Department"][$i] . "', DOL='" . $_POST["DOL"][$i] . "', Disable_ID='" . $_POST["Disable_ID"][$i] . "', Remove_Mem='" . $_POST["Remove_Mem"][$i] . "', Disable_VPN='" . $_POST["Disable_VPN"][$i] . "', Reset_User='" . $_POST["Reset_User"][$i] . "',  Move_User='" . $_POST["Move_User"][$i] . "', Mail_Box='" . $_POST["Mail_Box"][$i] . "', Mail_Type='" . $_POST["Mail_Type"][$i] . "', Hide_User='" . $_POST["Hide_User"][$i] . "', Remove_Share='" . $_POST["Remove_Share"][$i] . "', Wipe='" . $_POST["Wipe"][$i] . "', Convert_Mail='" . $_POST["Convert_Mail"][$i] . "', Remove_Lic='" . $_POST["Remove_Lic"][$i] . "', Mail_Forw='" . $_POST["Mail_Forw"][$i] . "', Ext_Name='" . $_POST["Ext_Name"][$i] . "', Access='" . $_POST["Access"][$i] . "', Descript='" . $_POST["Descript"][$i] . "'  WHERE Emp_ID='" . $_POST["Emp_ID"][$i] . "'");
}
header("Location:nocviewud.php");
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body bgcolor="#e5f2ff">
<form name="frmUser" method="post" action="">
<div style="width:1000px;">
  <center>
  <h2>NOC FORM</h2>
</center>
<table border="0" cellpadding="50" cellspacing="0" width="1200" height="1000" align="center">
<tr class="tableheader">
</tr>
<?php
$rowCount = count($_POST["nocform"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn, "SELECT * FROM nocform WHERE Emp_ID='" . $_POST["nocform"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="50" cellspacing="0" width="1200" height="1000" align="center" class="tblSaveForm">

<tr>
<th>Name</th>
<td><input type="hidden" name="Emp_ID[]" class="txtField" value="<?php echo $row[$i]['Emp_ID']; ?>">
	<input type="text" name="Name[]" class="txtField" value="<?php echo $row[$i]['Name']; ?>"></td>

<th>State</th>
<td>
	<select id="Location" name="Location[]" style="width: 200px; height: 30px;">  
	<option><?php echo $row[$i]['Location']; ?></option>                    
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
</td>
</tr>

<tr>
<th>Department</th>
<td>
	<select id="Department" name="Department[]" style="width: 200px; height: 30px;">     
    <option><?php echo $row[$i]['Department']; ?></option> 
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
</td>

<th>District</th>
<td><input type="text" name="Dist[]" class="txtField" value="<?php echo $row[$i]['Dist']; ?>"></td>
</tr>

<tr>
<th>DOL</th>
<td><input type="date" name="DOL[]" class="txtField" value="<?php echo $row[$i]['DOL']; ?>"></td>

<th>Disable User Id</th>
<td>
	<input type="radio"   name="Disable_ID[]"  value="Yes" 
                      <?php
                      if($row[$i]['Disable_ID']=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                     style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Disable_ID[]"  value="No" 
                     <?php
                      if($row[$i]['Disable_ID']=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
</td>
</tr>

<tr>
<th>Remove Member from groups</th>
<td>
	<input type="radio"   name="Remove_Mem[]"  value="Yes" 
                     <?php
                      if($row[$i]['Remove_Mem']=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Mem[]"  value="No" 
                    <?php
                      if($row[$i]['Remove_Mem']=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Mem[]"  value="NA" 
                    <?php
                      if($row[$i]['Remove_Mem']=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA
</td>

<th>Disable VPN</th>
<td>
	<input type="radio"   name="Disable_VPN[]"  value="Yes" 
                    <?php
                      if($row[$i]['Disable_VPN']=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Disable_VPN[]"  value="No" 
                     <?php
                      if($row[$i]['Disable_VPN']=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Disable_VPN[]"  value="NA"
                     <?php
                      if($row[$i]['Disable_VPN']=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA
</td>
</tr>

<tr>
<th>Reset User Password</th>
<td>
	<input type="radio"   name="Reset_User[]"  value="Yes" 
                      <?php
                      if($row[$i]['Reset_User']=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                     style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Reset_User[]"  value="No" 
                     <?php
                      if($row[$i]['Reset_User']=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
</td>

<th>Move User to Exit OU</th>
<td>
	<input type="radio"   name="Move_User[]"  value="Yes" 
                      <?php
                      if($row[$i]['Move_User']=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                     style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Move_User[]"  value="No" 
                     <?php
                      if($row[$i]['Move_User']=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
</td>
</tr>

<tr>
<th>Mail Box</th>
<td>
	<input type="radio"   name="Mail_Box[]"  value="Yes" 
                      <?php
                      if($row[$i]['Mail_Box']=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                     style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Mail_Box[]"  value="No" 
                     <?php
                      if($row[$i]['Mail_Box']=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
</td>

<th>Mail Box Type</th>
<td>
	<input type="radio"   name="Mail_Type[]"  value="O365" 
                     <?php
                      if($row[$i]['Mail_Type']=='O365')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">O365
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Mail_Type[]"  value="Onpermise" 
                     <?php
                      if($row[$i]['Mail_Type']=='Onpermise')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Onpermise
</td>
</tr>

<tr>
<th>Hide User from Addressbook</th>
<td>
	<input type="radio"   name="Hide_User[]"  value="Yes"
                     <?php
                      if($row[$i]['Hide_User']=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Hide_User[]"  value="No" 
                     <?php
                      if($row[$i]['Hide_User']=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Hide_User[]"  value="NA" 
                     <?php
                      if($row[$i]['Hide_User']=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA
</td>

<th>Remove Sharepoints groups</th>
<td>
	<input type="radio"   name="Remove_Share[]"  value="Yes" 
                     <?php
                      if($row[$i]['Remove_Share']=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Share[]"  value="No" 
                     <?php
                      if($row[$i]['Remove_Share']=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Share[]"  value="NA"
                     <?php
                      if($row[$i]['Remove_Share']=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA
</td>
</tr>

<tr>
<th>Wipe Mobile device</th>
<td>
	<input type="radio"   name="Wipe[]"  value="Yes" 
                     <?php
                      if($row[$i]['Wipe']=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Wipe[]"  value="No" 
                     <?php
                      if($row[$i]['Wipe']=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Wipe[]"  value="NA" 
                     <?php
                      if($row[$i]['Wipe']=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA
</td>

<th>Convert to Shared Mailbox</th>
<td>
	<input type="radio"   name="Convert_Mail[]"  value="Yes" 
                     <?php
                      if($row[$i]['Convert_Mail']=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Convert_Mail[]"  value="No" 
                     <?php
                      if($row[$i]['Convert_Mail']=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Convert_Mail[]"  value="NA" 
                     <?php
                      if($row[$i]['Convert_Mail']=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA
</td>
</tr>

<tr>
<th>Remove License</th>
<td>
	<input type="radio"   name="Remove_Lic[]"  value="Yes" 
                     <?php
                      if($row[$i]['Remove_Lic']=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Lic[]"  value="No" 
                    <?php
                      if($row[$i]['Remove_Lic']=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Lic[]"  value="NA" 
                    <?php
                      if($row[$i]['Remove_Lic']=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA
</td>

<th>Mail Forwarding</th>
<td>
	<input type="radio"   name="Mail_Forw[]"  value="Yes"    
                      <?php
                      if($row[$i]['Mail_Forw']=='Yes')
                      {
                        echo "checked";
                      }
                      ?>  onclick="onButtonClick()" style="height:16px; width:16px;" >Yes
                        <input class="hide" type="text" id="textInput" name="Mail_Forw[]" value="<?php echo $row[$i]['Mail_Forw']; ?>"  />
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Mail_Forw[]"  value="No" 
                       <?php
                      if($row[$i]['Mail_Forw']=='No')
                      {
                        echo "checked";
                      }
                      ?>
                   style="height:16px; width:16px;" >No
</td>
</tr>

<tr>
<th>Extn Name Removal</th>
<td>
	<input type="radio"   name="Ext_Name[]"  value="Yes" 
                       <?php
                      if($row[$i]['Ext_Name']=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Ext_Name[]"  value="No" 
                         <?php
                      if($row[$i]['Ext_Name']=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Ext_Name[]"  value="NA" 
                         <?php
                      if($row[$i]['Ext_Name']=='NA')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">NA
</td>

<th>Access Card Disable</th>
<td>
	<input type="radio"   name="Access[]"  value="Yes" 
                         <?php
                      if($row[$i]['Access']=='Yes')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Access[]"  value="No" 
                       <?php
                      if($row[$i]['Access']=='No')
                      {
                        echo "checked";
                      }
                      ?>
                    style="height:16px; width:16px;">No
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Access[]"  value="NA" 
                       <?php
                      if($row[$i]['Access']=='NA')
                      {
                        echo "checked";
                      }
                      ?>

                    style="height:16px; width:16px;">NA
</td>
</tr>

<tr>
<th>Comment</th>
<td>
	<input type="text" name="Descript[]" value="<?php echo $row[$i]['Descript']; ?>" style="width: 300px; height: 70px;"> 
</td>
</tr>

</table>
</td>
</tr>
<?php
}
?>
<tr>
<td colspan="5"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
<br><br>
</body></html>
