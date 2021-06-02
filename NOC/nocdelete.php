<?php
include("connect.php");
$Emp_ID= $_GET['o1'];


$query = "DELETE FROM nocform where Emp_ID = '$Emp_ID' ";

$data = mysqli_query($conn, $query);
if($data)
{
   echo "<script type='text/javascript'>alert('RECORD DELETED.......!!!!')</script>";
    
  
      echo "<script>setTimeout(\"location.href = 'nocview.php';\",500);</script>";
}
else
{
  echo "<script type='text/javascript'>alert('Failed')</script>"; 
}


?>