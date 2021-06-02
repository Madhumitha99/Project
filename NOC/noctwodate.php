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
<body bgcolor="#e5f2ff">
 <br><br><br><br>
 <center> 
  <h1>NOC FORM</h1> 
    <form method="post">
      <br><br><br>
    <h2>
     From: <input type="date" name="txtStartDate" style="width: 180px; height: 30px;" required>
      To: <input type="date" name="txtEndDate" style="width: 180px; height: 30px;" required>
    </h2>
    <br><br><br>
      <p>
        <input class ="button" type="submit" name="search" value="Search">
      </p> 
    </form>
  </center>
<br><br>
<?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db = 'userasset';
$conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$db);

if(!$conn)
{
    die("connection failed.!" .mysqli_error());
}

if(isset($_POST['search']))
{
  $txtStartDate=$_POST['txtStartDate'] ;
  $txtEndDate=$_POST['txtEndDate'] ;
  $query=mysqli_query($conn,"Select * From nocform where Date Between '$txtStartDate' and '$txtEndDate' order by Date");
  $count=mysqli_num_rows($query);

  if($count == "0")
      {
        echo '<h2>Nothing found !</h2>';
      }
           



      else
      {
         
         echo "<table class='myTable' id='table_id' align='center'><tr><th>Name</th><th>Emp ID</th><th>State</th><th>District</th><th>Department</th><th>DOL</th><th>Disable User ID</th><th>Remove member from groups</th><th>Disable VPN</th><th>Reset User Password</th><th>Move User to Exit OU</th><th>Mail Box</th><th>Mail Box Type</th><th>Hide User from Addressbook</th><th>Remove Sharepoints groups</th><th>Wipe Mobile device</th><th>Convert to Shared Mailbox</th><th>Remove License</th><th>Mail Forwarding</th><th>Extn Name Removal</th><th>Access Card Disable</th><th>Comment</th><th>Machine Type</th><th>Make</th><th>Model</th><th>Serial No</th><th>Adaptor</th><th>HDD</th><th>RAM</th><th>PROC</th><th>OS</th><th>Monitor</th><th>M_SerialNo</th><th>Other</th><th>Category</th><th>Sub Category</th><th>Provider</th><th>IMEI</th><th>RSN</th><th>MobileNo</th><th>Date</th><th>Time</th><th>File View</th><th>Edit</th><th>Print</th></tr>";




        while($row =mysqli_fetch_array($query)){

                           $result=$row['Name'];
                           $result1=$row['Emp_ID'];
                           $result2=$row['Location'];
                           $result3=$row['Dist'];
                           $result4=$row['Department'];
                           $result5=$row['DOL'];
                           $result6=$row['Disable_ID'];
                           $result7=$row['Remove_Mem'];
                           $result8=$row['Disable_VPN'];
                           $result9=$row['Reset_User'];
                           $result10=$row['Move_User'];
                           $result11=$row['Mail_Box'];
                           $result12=$row['Mail_Type'];
                           $result13=$row['Hide_User'];
                           $result14=$row['Remove_Share'];
                           $result15=$row['Wipe'];
                           $result16=$row['Convert_Mail'];
                           $result17=$row['Remove_Lic'];
                           $result18=$row['Mail_Forw'];
                           $result19=$row['Ext_Name'];
                           $result20=$row['Access'];
                            $result21=$row['Descript'];
                           $result22=$row['Machine_Type'];
                           $result23=$row['Make'];
                           $result24=$row['Model'];
                           $result25=$row['Serial_No'];
                           $result26=$row['Adaptor'];
                           $result27=$row['HDD'];
                            $result28=$row['RAM'];
                           $result29=$row['PROC'];
                           $result30=$row['OS'];
                           $result31=$row['Monitor'];
                           $result32=$row['Monitor_Sno'];
                            $result33=$row['other'];
                           $result34=$row['sub'];
                           $result35=$row['cat'];
                           $result36=$row['provider'];
                            $result37=$row['imei'];
                           $result38=$row['rsn'];
                           $result39=$row['mobno'];
                           $result40=$row['Date'];
                           $result41=$row['Time'];


                        $Emp_ID=$row['Emp_ID'];

                       echo "<tr>
                       <td style='font-size:18px;'>" . $result. "</td
                       ><td style='font-size:18px;'>" . $result1. "</td>
                       <td style='font-size:18px;'>" . $result2. "</td>
                       <td style='font-size:18px;'>" . $result3. "</td>
                       <td style='font-size:18px;'>" . $result4. "</td>
                       <td style='font-size:18px;'>" . $result5. "</td>
                       <td style='font-size:18px;'>" . $result6. "</td>
                       <td style='font-size:18px;'>" . $result7. "</td>
                       <td style='font-size:18px;'>" . $result8. "</td>
                       <td style='font-size:18px;'>" . $result9. "</td>
                       <td style='font-size:18px;'>" . $result10. "</td>
                       <td style='font-size:18px;'>" . $result11. "</td>
                       <td style='font-size:18px;'>" . $result12. "</td>
                       <td style='font-size:18px;'>" . $result13. "</td>
                       <td style='font-size:18px;'>" . $result14. "</td>
                       <td style='font-size:18px;'>" . $result15. "</td>
                       <td style='font-size:18px;'>" . $result16. "</td>
                       <td style='font-size:18px;'>" . $result17. "</td>
                       <td style='font-size:18px;'>" . $result18. "</td>
                       <td style='font-size:18px;'>" .  $result19. "</td>
                       <td style='font-size:18px;'>" .  $result20. "</td>
                       <td style='font-size:18px;'>" .  $result21. "</td>
                       <td style='font-size:18px;'>" .  $result22. "</td>
                       <td style='font-size:18px;'>" .  $result23. "</td>
                       <td style='font-size:18px;'>" .  $result24. "</td>
                       <td style='font-size:18px;'>" .  $result25. "</td>
                       <td style='font-size:18px;'>" .  $result26. "</td>
                       <td style='font-size:18px;'>" .  $result27. "</td>
                       <td style='font-size:18px;'>" .  $result28. "</td>
                       <td style='font-size:18px;'>" .  $result29. "</td>
                       <td style='font-size:18px;'>" .  $result30. "</td>
                       <td style='font-size:18px;'>" .  $result31. "</td>
                       <td style='font-size:18px;'>" .  $result32. "</td>
                       <td style='font-size:18px;'>" .  $result33. "</td>
                       <td style='font-size:18px;'>" .  $result34. "</td>
                       <td style='font-size:18px;'>" .  $result35. "</td>
                       <td style='font-size:18px;'>" .  $result36. "</td>
                       <td style='font-size:18px;'>" .  $result37. "</td>
                       <td style='font-size:18px;'>" .  $result38. "</td>
                       <td style='font-size:18px;'>" .  $result39. "</td>
                       <td style='font-size:18px;'>" .  $result40. "</td>
                       <td style='font-size:18px;'>" .  $result41. "</td>
                       <td><form method='GET' action='nocfileview.php' ><button name='o1' class='but' value='$Emp_ID'>File View</button></form></td>
                       <td><form method='GET' action='nocupdate.php' ><button name='o1' class='but' value='$Emp_ID'>Edit</button></form></td>
                       
                       <td><form method='GET' action='nocpdf.php' ><button name='generate_pdf' class='but' value='$Emp_ID'>Print</button></form></td> </tr> ";
                          
                         
      

     
         
        }

        

      }
      
}



?>
 



<!DOCTYPE html>
<html> 
  
  <body>
    
  </body>
</html>

