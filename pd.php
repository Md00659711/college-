<?php
$username=$_GET["uname"];
$pass=$_GET["psw"];
if($username=="admin" && $pass=="admin1234")
{
include("dashboard.html");
}
else
{
include("login.html");
}
?>