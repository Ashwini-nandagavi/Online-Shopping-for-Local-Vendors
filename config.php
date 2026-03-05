<?php
$connect=mysqli_connect("localhost","root","","onlineshopy");
if(!$connect)
{
	die("could not connect mysql database".mysqli_error());
}
?>