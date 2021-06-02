<?php
include ("index1.html");

      ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width:200px;
  
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 1px 16px;
}
</style>
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 20.33%;
  padding: 20px;
  height: 200px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<style>

table, th, td {
  
  margin-left: 40px;
  margin-top: 1px;
}
th, td {
  padding: 4px;
  text-align: center;
font-family:Georgia;   
}
th
{
background-color:;
}
td
{
background-color:;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  background-color: darkslategray;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
}

.button:hover {
  background-color:darkslategray;
}
a
{
  text-decoration: none;
  color: white;
}
</style>
</head>
<body bgcolor="#e5f2ff"> 


<br><br><br><br><br><br><br><br><br>
  <table style="width:80%" align="center">




    <tr>
      <td><b><h4>INVENTORY---</h4></b></td>
      <td>
<div class="row">
  <div class="column">
<div class="card">
 
  <img src="desktop1.jpg" alt="Avatar" style="width:50px;height:50px;">
  <div class="container">
    <br>
    <h4><b>DESKTOP</b></h4> 
    <p><?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db = 'userasset';

$conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$db);


 $sql="select ( select count(M_Type) from desktop ) + ( select count(Machine_Type) from deskout ) 
  as total";

$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>   </p> 
  </div>
</div>
</div>
</td>

<td>
<div class="column">
<div class="card">
  
  <img src="laptop4.jpg" alt="Avatar" style="width:50px;height:50px;">
  <div class="container">
    <br>
    <h4><b>LAPTOP</b></h4> 
    <p>
    <?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db = 'userasset';

$conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$db);


 $sql="select ( select count(M_Type) from conew ) + ( select count(Machine_Type) from lapout ) 
  as total";

$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>   </p> 
  </div>
</div>
</div>
</td>
<td>
<div class="column">
<div class="card">
 
  <img src="datacard.jpg" alt="Avatar" style="width:50px;height:50px;">
  <div class="container">
    <br>
    <h4><b>DATACARD</b></h4> 
    <p>
    <?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db = 'userasset';

$conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$db);
 $sql="select ( select count(provider) from datacard ) + ( select count(provider) from dataout) 
  as total";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>  </p> 
  </div>
</div>
</div>
</td>
<td>
<div class="column">
<div class="card">

  <img src="accessories.jpg" alt="Avatar" style="width:50px;height:50px;">
  <div class="container">
    <br>
    <h4><b>ACCESSORIES</b></h4> 
    <p>
    <?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db = 'userasset';

$conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$db);
 $sql="select ( select count(other) from other1 ) + ( select count(other) from othererout) 
  as total";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?></p> 
  </div>
</div>
</div>
</td>
<td><b><h4>---INVENTORY</h4></b></td>
</tr>
    <tr>
      <td><b><h4>INWARD---</h4></b></td>
      <td>
<div class="row">
  <div class="column">
<div class="card">
  <a href="desknewview.php">
  <img src="desktop1.jpg" alt="Avatar" style="width:50px;height:50px;"></a>
  <div class="container">
    <br>
    <h4><b>DESKTOP</b></h4> 
    <p><?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db = 'userasset';

$conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$db);
$sql="SELECT count(M_Type) AS total FROM desktop ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>   </p> 
  </div>
</div>
</div>
</td>
<td>
<div class="column">
<div class="card">
  <a href="accessview.php">
  <img src="laptop4.jpg" alt="Avatar" style="width:50px;height:50px;"></a>
  <div class="container">
    <br>
    <h4><b>LAPTOP</b></h4> 
    <p>
    <?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db = 'userasset';

$conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$db);
$sql="SELECT count(M_Type) AS total FROM conew ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>   </p> 
  </div>
</div>
</div>
</td>
<td>
<div class="column">
<div class="card">
  <a href="data1.php">
  <img src="datacard.jpg" alt="Avatar" style="width:50px;height:50px;"></a>
  <div class="container">
    <br>
    <h4><b>DATACARD</b></h4> 
    <p>
    <?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db = 'userasset';

$conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$db);
$sql="SELECT count(S_No) AS total FROM datacard ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>  </p> 
  </div>
</div>
</div>
</td>
<td>
<div class="column">
<div class="card">
  <a  href="otherinview.php">
  <img src="accessories.jpg" alt="Avatar" style="width:50px;height:50px;"></a>
  <div class="container">
    <br>
    <h4><b>ACCESSORIES</b></h4> 
    <p>
    <?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db = 'userasset';

$conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$db);
$sql="SELECT count(sno) AS total FROM other1 ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?></p> 
  </div>
</div>
</div>
</td></td> <td><b><h4>---INWARD</h4></b></td>
</tr>
 <tr>
  <td><b><h4>ASSIGNED---</h4></b></td>
      <td>
<div class="row">
  <div class="column">
<div class="card">
  <a href="deskoutviewnew.php">
  <img src="desktop1.jpg" alt="Avatar" style="width:50px;height:50px;"></a>
  <div class="container">
    <br>
    <h4><b>DESKTOP</b></h4> 
    <p><?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db = 'userasset';

$conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$db);
$sql="SELECT count(Machine_Type) AS total FROM deskout "; 
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>  </p> 
  </div>
</div>
</div>
</td>
<td>
<div class="column">
<div class="card">
  <a href="lapoutviewnew.php">
  <img src="laptop4.jpg" alt="Avatar" style="width:50px;height:50px;"></a>
  <div class="container">
    <br>
    <h4><b>LAPTOP</b></h4> 
    <p>
    <?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db = 'userasset';

$conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$db);
$sql="SELECT count(Machine_Type) AS total FROM lapout ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>   </p> 
  </div>
</div>
</div>
</td>
<td>
<div class="column">
<div class="card">
  <a href="dataout.php">
  <img src="datacard.jpg" alt="Avatar" style="width:50px;height:50px;"></a>
  <div class="container">
    <br>
    <h4><b>DATACARD</b></h4> 
    <p>
    <?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db = 'userasset';

$conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$db);
$sql="SELECT count(S_No) AS total FROM dataout ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>    </p> 
  </div>
</div>
</div>
</div>
</td>
<td>
<div class="column">
<div class="card">
  <a href="otheroutview.php">
  <img src="accessories.jpg" alt="Avatar" style="width:50px;height:50px;"></a>
  <div class="container">
    <br>
    <h4><b>ACCESSORIES</b></h4> 
    <p>
    <?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db = 'userasset';

$conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$db);
$sql="SELECT count(other) AS total FROM othererout ";
$result=mysqli_query($conn,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>  </p> 
  </div>
</div>
</div>
</td> <td><b><h4>---ASSIGNED</h4></b></td>
</tr>

 
</table>
</body>
</html> 


