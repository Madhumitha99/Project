<!DOCTYPE HTML>  
<html>
<head>

</head>
<body>
<?php

session_start();
/*if(!isset($_SESSION['login_user'])) 
      header("Location: main.php"); */ 
 $Emp_ID=$_GET['generate_pdf'];
      $output = '';  
      $conn = mysqli_connect("localhost", "root", "", "userasset");  
      $sql = "SELECT * FROM nocform where Emp_ID='$Emp_ID' ";  
      $result = mysqli_query($conn, $sql);  
      $row = mysqli_fetch_array($result);
     // $sub=$row['subcategory'];
        



 if(isset($_GET["generate_pdf"]))  
{
require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("NOC FORM");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica','', 11);  
      $obj_pdf->AddPage();  
      $content = '';  
      
  $content .=  '<center>
  <table>
 <p><img src="logo.jpg" width="100" height="40" style="display:inline;" align="left">
<h2 align="center"style="display:inline;"><b>QUBECINEMA TECHNOLOGIES PVT. LTD.</b></h2>
<h5 align="center">No.42,Dr.Ranga Road,Mylapore,Chennai-600004.</h5>
</table>
</body>
<br>
<table style="padding:-1px;">
  <tr>
    <td align="center" style="background-color:silver;border: 1px solid black;"><h3> <b>NOC FORM</b></h3></td>
</tr>
</table>
 <br>
 <hr>
   <h5 align="right" style="float:left;margin-bottom:90px;margin-left:-60px;">Date : '.$row['Date'].'</h5>
      <h5 align="right" style="float:left;margin-bottom:90px;margin-left:-60px;">Time : '.$row['Time'].'</h5>
  <div>
  <table align="center" cellpadding="3" border="1">
  <tr>
    <th align="left">Name</th>
    <td>'.$row['Name'].'</td>
    </tr>
    <tr>
    <th align="left">Emp ID</th>
     <td>'.$row['Emp_ID'].'</td>
  </tr>
  <tr>
  <th align="left">State</th>
    <td>'.$row['Location'].'</td>
    </tr>
    <tr>
  <th align="left">District</th>
     <td>'.$row['Dist'].'</td> 
  </tr> 
  <tr>
  <th align="left">Department</th>
     <td>'.$row['Department'].'</td> 
     </tr>
     <tr>
  <th align="left">DOL</th>
     <td>'.$row['DOL'].'</td> 
     </tr>
     <tr>
    <th align="left">Disable User ID</th>
    <td>'.$row['Disable_ID'].'</td>  
  </tr>
  <tr>
  <th align="left">Remove Member from groups</th>
     <td>'.$row['Remove_Mem'].'</td>
     </tr>
     <tr>
  <th align="left">Disable VPN</th>
    <td>'.$row['Disable_VPN'].'</td> 
  </tr> 
  <tr>
  <th align="left">Reset User Password</th>
     <td>'.$row['Reset_User'].'</td> 
     </tr>
     <tr>
    <th align="left">Move User to Exit OU</th>
    <td>'.$row['Move_User'].'</td>
  </tr>  
   
   <tr>
    <th align="left">Mail Box</th>
    <td>'.$row['Mail_Box'].'</td>
    </tr>
    <tr>
    <th align="left">Mail Box Type</th>
     <td>'.$row['Mail_Type'].'</td>
  </tr>
  <tr>
  <th align="left">Hide User from Adddressbook</th>
    <td>'.$row['Hide_User'].'</td>
    </tr>
    <tr>
    <th align="left">Remove Sharepoint groups</th>
     <td>'.$row['Remove_Share'].'</td> 
  </tr> 
   <tr>
  <th align="left">Wipe Mobile device</th>
    <td>'.$row['Wipe'].'</td>
    </tr>
    <tr>
    <th align="left">Convert to Shared Mailbox</th>
     <td>'.$row['Convert_Mail'].'</td> 
  </tr> 
   <tr>
  <th align="left">Remove License</th>
    <td>'.$row['Remove_Lic'].'</td>
    </tr>
    <tr>
    <th align="left">Mail Forwarding</th>
     <td>'.$row['Mail_Forw'].'</td> 
  </tr> 
   <tr>
    <th align="left">Extn Name Removal</th>
    <td>'.$row['Ext_Name'].'</td>
    </tr>
    <tr>
    <th  align="left">Access Card disable</th>
    <td>'.$row['Access'].'</td>
  </tr>
  
   <tr>
    <th align="left">Machine Type</th>
    <td>'.$row['Machine_Type'].'</td>
    </tr>
    <tr>
    <th  align="left">Make</th>
    <td>'.$row['Make'].'</td>
  </tr>
   <tr>
    <th align="left">Model</th>
    <td>'.$row['Model'].'</td>
    </tr>
    <tr>
    <th  align="left">Serial No</th>
    <td>'.$row['Serial_No'].'</td>
  </tr>
    <tr>
    <th  align="left">Adaptor</th>
    <td>'.$row['Adaptor'].'</td>
  </tr>
  <tr>
    <th align="left">HDD</th>
    <td>'.$row['HDD'].'</td>
    </tr>
    <tr>
    <th  align="left">RAM</th>
    <td>'.$row['RAM'].'</td>
  </tr>
  <tr>
    <th align="left">PROC</th>
    <td>'.$row['PROC'].'</td>
    </tr>
    <tr>
    <th  align="left">OS</th>
    <td>'.$row['OS'].'</td>
  </tr>
<tr>
    <th align="left">Monitor</th>
    <td>'.$row['Monitor'].'</td>
    </tr>
    <tr>
    <th  align="left">Monitor SNo</th>
    <td>'.$row['Monitor_Sno'].'</td>
  </tr>
   
    <tr>
    <th align="left">Other</th>
    <td>'.$row['other'].'</td>
    </tr>
    <tr>
    <th  align="left">Category</th>
    <td>'.$row['cat'].'</td>
  </tr>
  <tr>
    <th align="left">subCategory</th>
    <td>'.$row['sub'].'</td>
    </tr>
     <tr>
    <th align="left">Provider</th>
    <td>'.$row['provider'].'</td>
    </tr>
    <tr>
    <th  align="left">IMEI</th>
    <td>'.$row['imei'].'</td>
  </tr>
  <tr>
    <th align="left">RSN</th>
    <td>'.$row['rsn'].'</td>
    </tr>
     <tr>
    <th align="left">MobileNo</th>
    <td>'.$row['mobno'].'</td>
    </tr>
    <tr>
    <th  align="left">Comment</th>
    <td>'.$row['Descript'].'</td>
  </tr>
</table>
</div>
 <h4 align="right" style="float:right;width:50%;margin-right:170px;">For QubeCinema Technologies Pvt Ltd. </h4>
      
      <h4 align="right" style="float:right;width:50%;margin-right:170px;">SIGNATURE</h4>

';

 $content .= ''; 
  $obj_pdf->writeHTML($content,true,false,true,false,''); 

      ob_end_clean(); 
      $obj_pdf->Output($_SERVER['DOCUMENT_ROOT'].'/'.'Noc Form.pdf', 'I');
}

?>