<!DOCTYPE html>
<?php
include("index1.html");
?>

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
  width: 50%;
  text-align: left;
  background-color: white;
  border-collapse: collapse; 
  font-size: 22px;
  padding: 15px;
  }
.myTable th { 
  background-color:silver;
  color:black; 
  }
.mytable td {
   font-weight: bold;
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
    padding: 15px;
    text-align:center;
    height: 20px;
    width:10px;
}

#search {
    border:1px solid #0080ff;
    border-radius: 4px;
}
.but {
    background-color:black;
    border: none;
    color: white;
    border-radius: 4px;
    /*padding: 15px 32px;*/
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    height:40px;
    width:100px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
</html>
<br><br>
<center>
             <h1>NOC FORM</h1> 
             <br><br><br>
           </center>
<?php
include("connect.php");
$conn= new mysqli("localhost","root","","userasset");
$set=$_GET['search'];
if($set){

$show="SELECT * FROM  lapout where Employee_Code ='$set' ";
$result=$conn->query($show);
if($result->num_rows > 0){

	
 

while($row = $result->fetch_assoc()){

	 echo "<table class='myTable' id='table_id' align='center'>
   
   <tr><th>EMPLOYEE ID</th><td style='font-size:22px;'>" . $row["Employee_Code"]. "</td></tr>
   <tr><th>EMPLOYEE NAME</th><td style='font-size:22px;'>" . $row["User_Name"]. "</td></tr>
   <tr><th>MAKE</th><td style='font-size:22px;'>" . $row["Make"]. "</td></tr>
   <tr><th>MODEL</th><td style='font-size:22px;'>" . $row["Model"]. "</td></tr>
   <tr><th>SERIAL NO</th><td style='font-size:22px;'>" . $row["Serial_No"]. "</td></tr>";
   
       
  
        $Employee_Code =$row['Employee_Code'];
        
         echo "<tr><th>NOC FORM</th><td><form method='GET' action='nocform1.php' ><button name='o1' class='but' value='$Employee_Code'>FORM</button></form></td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}
}

?>
