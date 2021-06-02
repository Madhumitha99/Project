<?php
require_once "connect.php";
$rowCount = count($_POST["nocform"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($conn, "DELETE FROM nocform WHERE Emp_ID='" . $_POST["nocform"][$i] . "'");
}
header("Location:nocviewud.php");
?>