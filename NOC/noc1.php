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
  width: 350%;
  background-color: white;
  border-collapse: collapse; 
  font-size: 18px;
  }
.myTable th { 
  background-color:black;
  color: white; 
  }
.mytable td {
  
   font-weight: bold;
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
  background-color:silver;
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
    font-size: 15px;
    height:30px;
    width:100px;
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
  width: 160px;
  height: 45px;
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
<!DOCTYPE HTML>  

<html>

  <body>
	 <div class="from">
            <form action="nocsearchid.php" method="GET">
	            <br><br><br><br>
	          <center>
             <h1>NOC FORM</h1> 
             <br><br><br>
            <h2> Employee ID : <input type="text" name="search" style="width: 180px; height: 30px;" required /></h2>
                <br><br><br>
                <input class ="button" type="submit" value="Search">
              </center>
            </form>
    </div>

  </body>
</html>