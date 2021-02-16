<?php
include ("header.php");
if (isset($_POST["realname"])&&!empty($_POST["realname"])&&
isset($_POST["username"])&&!empty($_POST["username"])&&
isset($_POST["password"])&&!empty($_POST["password"])&&
isset($_POST["repassword"])&&!empty($_POST["repassword"])&&
isset($_POST["email"])&&!empty($_POST["email"]))
{
$realname=$_POST["realname"];
$username=$_POST["username"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];
$email=$_POST["email"];
}
else 
 exit ("مشخصات را به درستی وارد کنید");
 if ($password!=$repassword)
 exit("پسورد ها باهم مطابقت ندارند");
?>
<div style="margin-left:20px ; text-align: left;">
<?php
echo ("realname=".$realname."<br>");
echo ("username=".$username."<br>");
echo ("password=".$password."<br>");
echo ("repassword=".$repassword."<br>");
echo ("email=".$email."<br>");
?>
</div>
<?php
include ("footer.php");
?>