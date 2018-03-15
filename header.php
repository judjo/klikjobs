<?php
$employee_nmbr=1;
$cmdn=mysqli_query($con,"select * from tbl_employees");
while($rown=mysqli_fetch_array($cmdn)){
$employee_nmbr=$rown['employee_id'];
$employee_nmbr++;  
}
if($employee_nmbr<10){
$employee_nmbr="000".$employee_nmbr;
}
else if($employee_nmbr>9 && $employee_nmbr<99){
$employee_nmbr="00".$employee_nmbr;
}
else if($employee_nmbr>99){
$employee_nmbr="0".$employee_nmbr;
}
?>
<div id="nav1">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#hide1" id="set1">
<span class="icon-bar" id="bg_bar1"></span>
<span class="icon-bar" id="bg_bar1"></span>
<span class="icon-bar" id="bg_bar1"></span> 
</button>
<a class="navbar-brand" href="index"><img src="img/logo_header.png" title="Klik Jobs" alt="Klik Jobs"></a>
</div>
<div class="collapse navbar-collapse" id="hide1">
<ul class="nav navbar-nav navbar-right hidden-xs">
<li><a data-toggle="modal" data-target="#signin1" id="a1"><i class="fa fa-sign-in"></i>&nbsp; Sign In</a></li>
<li><a data-toggle="modal" data-target="#signup1" id="a1"><i class="fa fa-file-text-o"></i>&nbsp; Sign Up&emsp;</a></li>
<li id="set1"><a href="company" id="a3"><i class="fa fa-building"></i>&nbsp; Company&ensp;</a></li>
</ul>
<ul class="nav navbar-nav navbar-right hidden-sm hidden-md hidden-lg">
<li><a data-toggle="modal" data-target="#signin1" id="a2"><i class="fa fa-sign-in"></i>&nbsp; Sign In</a></li>
<li><a data-toggle="modal" data-target="#signup1" id="a2"><i class="fa fa-file-text-o"></i>&nbsp; Sign Up</a></li>  
<li><a href="company" id="a2"><i class="fa fa-building"></i>&nbsp; Company</a></li>  
</ul>
</div>
</div>
</div>

<div class="modal fade" id="signin1" role="dialog">
<div class="modal-dialog" id="set2">
<div class="modal-content">
<div class="modal-header"><br>
<h4 class="modal-title text-center" id="t1">Sign In</h4>
</div>
<div class="modal-body">
<form method="post">
<div class="form-group" id="t1"><input type="email" name="email" placeholder="Email" class="form-control" autofocus required></div>
<div class="form-group" id="t1"><input type="password" name="password" maxlength="25" placeholder="Password" class="form-control" pattern=".{0}|.{8,}" required title="minimum 8 characters"></div>        
<div class="form-group" id="t1"><input type="submit" name="opt1" value="SIGN IN" class="btn btn-block btn-warning btn-md"></div>
<?php 
if(isset($_POST['opt1']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$cmd=mysqli_query($con,"select * from tbl_employees where email='$email' and password='$password'");
$row=mysqli_fetch_array($cmd);
$employee_id=$row['employee_id'];
if($row['email']=="" && $row['password']=="")
{
print '<div class="alert alert-danger text-center">username or password incorrect !</div>';
}
else
{
if($row['verification_status']=="disable"){
header("location:verification_code");	
}
else{
$_SESSION['employee_id']=$employee_id;
header("location:dashboard/index?employee_id=".$employee_id."");
}
}
}
?>
</form>
</div>
<div class="modal-footer"><a href="forget_password" id="a5">forget password ?</a></div>
</div>      
</div>
</div> 

<div class="modal fade" id="signup1" role="dialog">
<div class="modal-dialog" id="set2">
<div class="modal-content">
<div class="modal-header"><br>
<h4 class="modal-title text-center" id="t1">Sign Up</h4>
</div>
<div class="modal-body">
<form method="post">
<div class="form-group" id="t1"><input type="text" name="fullname" placeholder="Fullname" class="form-control" required></div>
<div class="form-group" id="t1"><input type="email" name="email" placeholder="Email" class="form-control" required></div>        
<div class="form-group" id="t1"><input type="password" name="password" placeholder="Password" maxlength="25" class="form-control" pattern=".{0}|.{8,}" required title="minimum 8 characters"></div> 
<div class="form-group" id="t1"><select name="genre" class="form-control"><option>Gender</option><option>Male</option><option>Female</option></select></div>                
<div class="form-group" id="t1"><input type="submit" name="opt2" value="SIGN UP" class="btn btn-block btn-warning btn-md"></div>
<?php      
if(isset($_POST['opt2']))
{
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$genre=$_POST['genre'];
$verification_code=rand(11111111,99999999);
date_default_timezone_set('Asia/Jakarta');
$createon=date('d/m/y H:i:s');
if($genre=="Genre"){
print '<div class="alert alert-danger text-center">please, enter your genre !</div>';	
}
else if(mysqli_num_rows(mysqli_query($con,"select * from tbl_employees where email='$email'"))>0){
print '<div class="alert alert-danger text-center">email already exist !</div>';	
}
else{
$cmd1=mysqli_query($con,"insert into tbl_employees (employee_id,fullname,email,password,genre,verification_code,verification_status,createon) values ('$employee_nmbr','$fullname','$email','$password','$genre','$verification_code','disable','$createon')");
$cmd2=mysqli_query($con,"insert into tbl_skill (employee_id,skill_name) values ('$employee_nmbr','-')");
$cmd3=mysqli_query($con,"insert into tbl_language (employee_id,language_name) values ('$employee_nmbr','-')");
header("location:verification_code");  
}
}
?>
</form>
</div>
<div class="modal-footer"><div class="text-center">By clicking Sign Up, you agree to our <a href="terms_of_condition" id="a5">Terms and Conditions</a> and <a href="privacy_policy" id="a5">Privacy Policy</a>.</div></div>
</div>      
</div>
</div> 