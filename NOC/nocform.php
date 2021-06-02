<?php
include("nocmenu1.html");
?>

<!DOCTYPE HTML>  
<html>

<head>
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<script language="JavaScript">
function myFunction() {
//$('#myDIV').hide();
//$('#myDIV2').hide();

    var x = document.getElementById("myDIV");
    
    if (x.style.display === "none") {
 
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function myFunction1() {
$('#myDIV').hide();
//$('#myDIV2').hide();

    var x = document.getElementById("myDIV1");
    
    if (x.style.display === "none") {
 
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

</script>
<style type="text/css">
.hidden-div
{
  display: none;
}
</style>
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
.error {color: #FF0000;}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
th {
  text-align: left;
}
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}

</style>
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
</style>
<body>

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
    background-color:#0080ff;
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
<script>
function onButtonClick(){
  document.getElementById('textInput').className="show";
}
</script>


</head>
</head>
<body bgcolor="#e5f2ff"> 
 <?php
error_reporting(0);
include ('connect.php');



$NameErr  = $Emp_IDErr = $Disable_ID = $LocationErr = $DepartmentErr =$DistErr =$DOLErr = $Remove_Mem = $Disable_VPN = $Reset_User = $Move_UserErr = $Mail_BoxErr = $Mail_TypeErr = $Hide_UserErr = $Remove_ShareErr = $WipeErr = $Convert_MailErr = $Remove_LicErr = $Mail_ForwErr = $Ext_NameErr =  $AccessErr  = $MakeErr = $ModelErr = $Serial_NoErr =$Machine_TypeErr =$otherErr = $catErr =  $subErr  = $DescriptErr = $AdaptorErr = $MonitorErr =$Monitor_SnoErr =$HDDErr = $RAMErr =  $PROCErr  = $OSErr =   "";

 $Emp_ID = $Disable_IDerr = $Location = $Department = $Dist =$DOL = $Remove_Memerr = $Disable_VPNerr = $Reset_User2err = $Name = $Mail_Type = $Move_User = $Mail_Box = $Hide_User = $Remove_Share = $Wipe = $Convert_Mail = $Remove_Lic = $Mail_Forw = $Ext_Name = $Access  = $Make = $Model = $Serial_No = $Machine_Type =$other = $cat =  $sub  = $Descript = $Adaptor = $Monitor =$Monitor_Sno =$HDD = $RAM =  $PROC  = $OS =  "";

 $statusMsg = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["Name"])) {
    $NameErr = "Name is required";
  } else {
    $Name = test_input($_POST["Name"]);
  }

  if (empty($_POST["Emp_ID"])) {
    $Emp_IDErr = "Emp_ID is required";
  } else {
    $Emp_ID = test_input($_POST["Emp_ID"]);
  }



  if (empty($_POST["Disable_ID"])) {
    $Disable_IDErr = "Disable_ID is required";
  } else {
    $Disable_ID = test_input($_POST["Disable_ID"]);
    
  }

   if (empty($_POST["Location"])) {
    $LocationErr = "Location is required";
  } else {
    $Location = test_input($_POST["Location"]);
    
  }
  if (empty($_POST["Department"])) {
    $DepartmentErr = "Department is required";
  } else {
    $Department = test_input($_POST["Department"]);
    
  }
  if (empty($_POST["Dist"])) {
    $DistErr = "Dist is required";
  } else {
    $Dist = test_input($_POST["Dist"]);
    
  }
  if (empty($_POST["DOL"])) {
    $DOLErr = "DOL is required";
  } else {
    $DOL = test_input($_POST["DOL"]);
    
  }
 
  if (empty($_POST["Remove_Mem"])) {
    $Remove_MemErr = "Remove_Mem is required";
  } else {
    $Remove_Mem = test_input($_POST["Remove_Mem"]);
  }

if (empty($_POST["Disable_VPN"])) {
    $Disable_VPNerr = "Disable_VPN is required";
  } else {
    $Disable_VPN = test_input($_POST["Disable_VPN"]);
  }

if (empty($_POST["Reset_User"])) {
    $Reset_Usererr = "Reset_User is required";
  } else {
    $Reset_User = test_input($_POST["Reset_User"]);
  }
}

if (empty($_POST["Move_User"])) {
    $Move_UserErr = "Move_User is required";
  } else {
    $Move_User = test_input($_POST["Move_User"]);
  }

if (empty($_POST["Mail_Box"])) {
    $Mail_BoxErr = "Mail_Box is required";
  } else {
    $Mail_Box= test_input($_POST["Mail_Box"]);
  }


  if (empty($_POST["Mail_Type"])) {
    $Mail_TypeErr = "Mail_Type is required";
  } else {
    $Mail_Type = test_input($_POST["Mail_Type"]);
  }


if (empty($_POST["Hide_User"])) {
    $Hide_UserErr = "Hide_User is required";
  } else {
    $Hide_User = test_input($_POST["Hide_User"]);
  }

if (empty($_POST["Remove_Share"])) {
    $Remove_ShareErr = "Remove_Share is required ";
  } else {
    $Remove_Share = test_input($_POST["Remove_Share"]);
  }

if (empty($_POST["Wipe"])) {
    $WipeErr = "Wipe is required";
  } else {
    $Wipe = test_input($_POST["Wipe"]);
  }

if (empty($_POST["Convert_Mail"])) {
    $Convert_MailErr = "Convert_Mail is required";
  } else {
    $Convert_Mail = test_input($_POST["Convert_Mail"]);
  }

if (empty($_POST["Remove_Lic"])) {
    $Remove_LicErr = "Remove_Lic is required";
  } else {
    $Remove_Lic = test_input($_POST["Remove_Lic"]);
  }

if (empty($_POST["Mail_Forw"])) {
    $Mail_ForwErr = "Mail_Forw is required";
  } else {
    $Mail_Forw = test_input($_POST["Mail_Forw"]);
  }

if (empty($_POST["Ext_Name"])) {
    $Ext_NameErr = "Ext_Name is required";
  } else {
    $Ext_Name = test_input($_POST["Ext_Name"]);
  }

if (empty($_POST["Access"])) {
    $AccessErr = "Access is required";
  } else {
    $Access = test_input($_POST["Access"]);
  }

  if (empty($_POST["Descript"])) {
    $DescriptErr = "Descript is required";
  } else {
    $Descript = test_input($_POST["Descript"]);
  }

  if (empty($_POST["Machine_Type"])) {
    $Machine_TypeErr = "Machine_Type is required";
  } else {
    $Machine_Type = test_input($_POST["Machine_Type"]);
  }

if (empty($_POST["Make"])) {
    $MakeErr = "Make is required";
  } else {
    $Make = test_input($_POST["Make"]);
  }

if (empty($_POST["Model"])) {
    $ModelErr = "Model is required";
  } else {
    $Model = test_input($_POST["Model"]);
  }

if (empty($_POST["Serial_No"])) {
    $Serial_NoErr = "Serial_No is required";
  } else {
    $Serial_No = test_input($_POST["Serial_No"]);
  }
  
  if (empty($_POST["other"])) {
    $otherErr = "other is required";
  } else {
    $other = test_input($_POST["other"]);
  }

if (empty($_POST["cat"])) {
    $catErr = "cat is required";
  } else {
    $cat = test_input($_POST["cat"]);
  }

if (empty($_POST["sub"])) {
    $subErr = "sub is required";
  } else {
    $sub = test_input($_POST["sub"]);
  }

  if (empty($_POST["Adaptor"])) {
    $AdaptorErr = "Adaptor is required";
  } else {
    $Adaptor = test_input($_POST["Adaptor"]);
  }

  if (empty($_POST["HDD"])) {
    $HDDErr = "HDD is required";
  } else {
    $HDD = test_input($_POST["HDD"]);
  }

  if (empty($_POST["RAM"])) {
    $RAMErr = "RAM is required";
  } else {
    $RAM = test_input($_POST["RAM"]);
  }
if (empty($_POST["PROC"])) {
    $PROCErr = "PROC is required";
  } else {
    $PROC = test_input($_POST["PROC"]);
  }
if (empty($_POST["OS"])) {
    $OSErr = "OS is required";
  } else {
    $OS = test_input($_POST["OS"]);
  }

  if (empty($_POST["Monitor"])) {
    $MonitorErr = "Monitor is required";
  } else {
    $Monitor = test_input($_POST["Monitor"]);
  }

  if (empty($_POST["Monitor_Sno"])) {
    $Monitor_SnoErr = "Monitor_Sno is required";
  } else {
    $Monitor_Sno = test_input($_POST["Monitor_Sno"]);
  }


if($Remove_MemErr=="" && $Hide_UserErr=="")
{

$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["form_submitted"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','msg','svg','xlsx','xls','docx');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into nocimages (Name,Emp_ID,file_name) VALUES ('$Name','$Emp_ID','".$fileName."')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

echo $statusMsg;

  
$sql = "INSERT INTO nocform (Name,Emp_ID,Disable_ID,Location,Department,Dist,DOL,Remove_Mem,Disable_VPN,Reset_User,Move_User,Mail_Box,Mail_Type,Hide_User,Remove_Share,Wipe,Convert_Mail,Remove_Lic,Mail_Forw,Ext_Name,Access,Make,Model,Serial_No,Machine_Type,other,cat,sub,Descript,Adaptor,Monitor,Monitor_Sno,HDD,RAM,PROC,OS,Date,Time) VALUES ('$Name','$Emp_ID','$Disable_ID','$Location','$Department','$Dist','$DOL','$Remove_Mem','$Disable_VPN','$Reset_User','$Move_User','$Mail_Box','$Mail_Type','$Hide_User','$Remove_Share','$Wipe','$Convert_Mail','$Remove_Lic','$Mail_Forw','$Ext_Name','$Access','$Make','$Model','$Serial_No','$Machine_Type','$other','$cat','$sub','$Descript','$Adaptor','$Monitor','$Monitor_Sno','$HDD','$RAM','$PROC','$OS',NOW(),NOW())";

if(mysqli_query($conn,$sql))
{
require 'PHPMailerAutoload.php';
if(isset($_POST['send']))
{
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug outpu
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'postman.realimage.co.in';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'upn1@qubecinema.com';                 // SMTP username
$mail->Password = 'R!UPN@12';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'upn1@qubecinema.com';
$mail->FromName = 'Mailer';
$mail->addAddress('itteam@qubecinema.com');     // Add a recipient              // Name is optional
$mail->addReplyTo('upn1@qubecinema.com', 'Information');
$mail->addCC('');
$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->addAttachment('localhost/NOC/view1.php');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'NOC FORM';
$mail->Body    ="<h2>NOC FORM</h2>
                  <p>Approval/Reject the form</p>
              <table  border='1'>
              <tr>
              <th style='font-size:20px;' style='text-align:left;'>Name</th><td style='font-size:20px;'>" . $Name. "</td>
              <th style='font-size:20px;' style='text-align:left;'>Emp ID</th><td style='font-size:20px;'>" . $Emp_ID. "</td>
              </tr>

              <tr>
              <th style='font-size:20px;' style='text-align:left;'>State</th><td style='font-size:20px;'>" . $Location. "</td>
              <th style='font-size:20px;' style='text-align:left;'>District</th><td style='font-size:20px;'>" . $Dist. "</td>
              </tr>
              <tr>
              <th style='font-size:20px;' style='text-align:left;'>Department</th><td style='font-size:20px;'>" . $Department. "</td>
              <th style='font-size:20px;' style='text-align:left;'>DOL</th><td style='font-size:20px;'>" . $DOL. "</td>
              </tr>
                <tr>
               <th style='font-size:20px;' style='text-align:left;'>Disable User ID</th><td style='font-size:20px;'>" . $Disable_ID. "</td>
               <th style='font-size:20px;' style='text-align:left;'>Remove Member from Group</th><td style='font-size:20px;'>" . $Remove_Mem. "</td>
               </tr>
              <tr>
              <th style='font-size:20px;' style='text-align:left;'>Disable VPN</th><td style='font-size:20px;'>" . $Disable_VPN. "</td>
              <th style='font-size:20px;' style='text-align:left;'>Reset User Password</th><td style='font-size:20px;'>" . $Reset_User. "</td>
              </tr>
              <tr>
               <th style='font-size:20px;' style='text-align:left;'>Move User to Exit OU</th><td style='font-size:20px;'>" . $Move_User. "</td>
               <th style='font-size:20px;' style='text-align:left;'>Mail Box</th><td style='font-size:20px;'>" . $Mail_Box. "</td>
               </tr>
              <tr>
              <th style='font-size:20px;' style='text-align:left;'>Mail Box Type</th><td style='font-size:20px;'>" . $Mail_Type. "</td>
              <th style='font-size:20px;' style='text-align:left;'>Hide User from Addressbook</th><td style='font-size:20px;'>" . $Hide_User. "</td>
              </tr>

              <tr>
               <th style='font-size:20px;' style='text-align:left;'>Remove Sharepoints Groups</th><td style='font-size:20px;'>" . $Remove_Share. "</td>
               <th style='font-size:20px;' style='text-align:left;'>Wipe Mobile device</th><td style='font-size:20px;'>" . $Wipe. "</td>
               </tr>
              <tr>
             <th style='font-size:20px;' style='text-align:left;'>Convert to shared Mailbox</th><td style='font-size:20px;'>" . $Convert_Mail. "</td>
             <th style='font-size:20px;' style='text-align:left;'>Remove License</th><td style='font-size:20px;'>" . $Remove_Lic. "</td>
             </tr>

              <tr>
              <th style='font-size:20px;' style='text-align:left;'>Mail Forwarding</th><td style='font-size:20px;'>" . $Mail_Forw. "</td>
              <th style='font-size:20px;' style='text-align:left;'>Extn Name Removal </th><td style='font-size:20px;'>" . $Ext_Name. "</td>
              </tr>
              <tr>
              <th style='font-size:20px;' style='text-align:left;'>Access Card Disable</th><td style='font-size:20px;'>" . $Access. "</td>
              <th style='font-size:20px;' style='text-align:left;'>Comment</th><td style='font-size:20px;'>" . $Descript. "</td>
              </tr>
              </table>";
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<script type='text/javascript'>alert('SUBMITTED SUCCESSFULLY...!!!!')</script>";
   echo "<script>setTimeout(\"location.href = 'nocview2.php';\",200);</script>";

}
}
}
  else
    echo "<script type='text/javascript'>alert('Failed')</script>"; 
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
<?php if (isset($_POST['form_submitted'])): ?>
 
            <?php else: ?>
<br><br><br><br>
<center> <h1>NOC FORM</h1> </center> 
 <br><br><br><br>  

<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Name</b>:<input type="text" placeholder="Name..." name="Name" style="width: 200px; height: 30px;" required>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Emp ID</b>:<input type="text" placeholder="Emp_ID..." name="Emp_ID" style="width: 200px; height: 30px;" required>
 <br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp
<b>State</b>:<select id="Location" name="Location" style="width: 200px; height: 30px;" required>                      
    <option value="">----Select Location----</option>
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
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Department</b>:<select id="Department" name="Department" style="width: 200px; height: 30px;" required>                      
    <option value="">----Select Department----</option>
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
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>District</b>:<input type="text" placeholder="District..." name="Dist" style="width: 200px; height: 30px;" required>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>DOL</b>:<input type="date" placeholder="Emp_ID..." name="DOL" style="width: 200px; height: 30px;" required>
 <br><br><br><br>
 <hr> 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h2>USER ID</h2>
  <br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Disable User ID</b>: &nbsp <input type="radio"   name="Disable_ID"  value="Yes" style="height:18px; width:18px;"  required>Yes
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Disable_ID"  value="No" style="height:18px; width:18px;"  required>No
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Remove Member from Groups</b>: &nbsp <input type="radio"   name="Remove_Mem"  value="Yes" style="height:18px; width:18px;"  required>Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Mem"  value="No" style="height:18px; width:18px;"  required>No
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Mem"  value="NA" style="height:18px; width:18px;"  required>NA
<br><br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Disable VPN</b>: &nbsp <input type="radio"   name="Disable_VPN"  value="Yes" style="height:18px; width:18px;"   required>Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Disable_VPN"  value="No" style="height:18px; width:18px;"   required>No
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Disable_VPN"  value="NA" style="height:18px; width:18px;"   required>NA
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Reset User Password</b>: &nbsp <input type="radio"   name="Reset_User"  value="Yes" style="height:18px; width:18px;"  required>Yes
                           &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Reset_User"  value="No" style="height:18px; width:18px;"  required>No
<br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Move User to Exit OU</b>: &nbsp <input type="radio" name="Move_User" value="Yes"  style="height:18px; width:18px;" required>Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" name="Move_User" value="No" style="height:18px; width:18px;" required>No 
<br><br><br><br>
<hr>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h2>MAIL BOX</h2>
  <br><br>
 
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Mail Box</b>: &nbsp <input type="radio" name="Mail_Box" id="yesCheck"  value="Yes" style="height:18px; width:18px;" required>Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
                    <input type="radio" name="Mail_Box" id="noCheck" value="No" style="height:18px; width:18px;" required>No
 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b> Mail Box Type</b>: &nbsp <input type="radio"   name="Mail_Type"  value="O365" style="height:18px; width:18px;" required>O365
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Mail_Type"  value="Onpermise"  style="height:18px; width:18px;" required>Onpermise       
       
<br><br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Hide User from Addressbook </b>: &nbsp <input type="radio"   name="Hide_User"  value="Yes" style="height:18px; width:18px;"   required>Yes
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Hide_User"  value="No" style="height:18px; width:18px;"  required>No
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     <input type="radio"   name="Hide_User"  value="NA" style="height:18px; width:18px;"  required>NA

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Remove Sharepoints Group</b> : &nbsp <input type="radio"   name="Remove_Share"  value="Yes" style="height:18px; width:18px;"  required>Yes
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Share"  value="No" style="height:18px; width:18px;"  required>No
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     <input type="radio"   name="Remove_Share"  value="NA" style="height:18px; width:18px;"  required>NA
<br><br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<b>Wipe Mobile device </b>: &nbsp <input type="radio"   name="Wipe"  value="Yes" style="height:18px; width:18px;" required>Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Wipe"  value="No" style="height:18px; width:18px;" required>No
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     <input type="radio"   name="Wipe"  value="NA" style="height:18px; width:18px;" required>NA

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Convert to Shared MailBox </b>: &nbsp <input type="radio"   name="Convert_Mail"  value="Yes" style="height:18px; width:18px;" required>Yes
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Convert_Mail"  value="No" style="height:18px; width:18px;" required>No
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     <input type="radio"   name="Convert_Mail"  value="NA" style="height:18px; width:18px;" required>NA

<br><br><br>

  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Remove License</b> : &nbsp <input type="radio"   name="Remove_Lic"  value="Yes" style="height:18px; width:18px;"  required>Yes
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Remove_Lic"  value="No" style="height:18px; width:18px;"  required>No
                     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     <input type="radio"   name="Remove_Lic"  value="NA" style="height:18px; width:18px;"  required>NA
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<b>Mail Forwarding </b>: &nbsp<input type="radio"   name="Mail_Forw"  value="Yes" onclick="onButtonClick()"  style="height:18px; width:18px;"  required>Yes
                      <input class="hide" type="text" id="textInput" name="Mail_Forw" value="" style="width: 200px; height: 30px;" />
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Mail_Forw"  value="No" style="height:18px; width:18px;"   required>No                     
<br><br><br><br>
<hr>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h2>EXTN</h2>
  <br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Extn Name Removal</b>  : &nbsp <input type="radio"   name="Ext_Name"  value="Yes"style="height:18px; width:18px;"   required>Yes
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Ext_Name"  value="No" style="height:18px; width:18px;"   required>No
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     <input type="radio"   name="Ext_Name"  value="NA" style="height:18px; width:18px;"   required>NA
<br><br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h2>ACCESS CARD</h2>
 <br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Access Card Disable </b> : &nbsp <input type="radio"   name="Access"  value="Yes" style="height:18px; width:18px;"   required>Yes
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio"   name="Access"  value="No" style="height:18px; width:18px;"   required>No
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     <input type="radio"   name="Access"  value="NA" style="height:18px; width:18px;"   required>NA

<br><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Attachement</b>:&nbsp&nbsp<input type="file" name="file" style="width: 300px; height: 25px;">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Comment</b>:&nbsp&nbsp<textarea name="Descript" rows="5" cols="40" required></textarea> 
<br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp



                            <input type="hidden" name="form_submitted" value="1" />
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<center>
<input class="button" type="submit" value="submit" name="send"> 
</center>
<br><br>
</form>

</div>
<?php endif; ?>
</body>
</html>