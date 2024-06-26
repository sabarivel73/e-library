<?php
if(isset($_GET["id"]))
{
	$BID=$_GET["id"];
$db=new mysqli("localhost","projectgsv","psggsv123@123","pro");
if(!$db)
{
	echo('Connection error' .mysqli_connect_error());
}
$sql="DELETE FROM book WHERE BID=$BID";
$res=$db->query($sql);
if ($res)
{
	header('location:view_books.php');
}
else
  {
    echo"<p class='error'>Failed to Delete Book</p>";
  }
}
?>