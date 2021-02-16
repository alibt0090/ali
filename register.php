<?php
include ("header.php");
?>
<form style="text-align: center;" dir="rtl" action="form-register.php" method="POST">
<label  for="realname">نام واقعی<span style="color: red;">*</span></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input  type="text" name="realname" id="realname">
<br><br>
<label  for="username">نام کاربری<span style="color: red;">*</span></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input  type="text" name="username" id="username">
<br><br>
<label  for="password">رمز عبور<span style="color: red;">*</span></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input  type="password" name="password" id="password">
<br><br>
<label  for="repassword">تکرار رمز عبور<span style="color: red;">*</span></label>
&nbsp;&nbsp;
<input  type="password" name="repassword" id="repassword">
<br><br>
<label  for="email">پست اکترونیکی<span style="color: red;">*</span></label>
&nbsp;&nbsp;&nbsp;&nbsp;
<input  type="email" name="email" id="email">
<br><br>
<input style="border: yellow solid 1px; padding: 10px; border-radius: 10px; background-color: black; color: yellow; font-size: 15px;"  type="submit" value="ثبت">
&nbsp;&nbsp;&nbsp;
<input style="border: red solid 1px; padding: 10px; border-radius: 10px; background-color: black; color: red; font-size: 15px; "  type="reset" value="حذف">
<br><br><br><br>
</form>
<?php
include ("footer.php");
?>