<?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$db = 'userasset';

$conn = new mysqli ($dbhost,$dbUsername,$dbPassword,$db);

if(!$conn)
{
echo "Connection failed!!".mysql_error();
}
else
{
  echo "";
}
?>
