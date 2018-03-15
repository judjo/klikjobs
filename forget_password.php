<?php require "systems/config/connect.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Klikjobs.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Homepage & List of Apps" />
<meta name="keywords" content="<?php print $seo_row['meta_keyword']; ?>" />
<meta name="robot" content="index, follow">
<meta name="language" content="<?php print $seo_row['meta_language']; ?>">
<meta name="msvalidate.01" content="<?php print $seo_row['meta_microsoft']; ?>" />
<meta name="google-site-verification" content="<?php print $seo_row['meta_google']; ?>" />
<link rel="stylesheet" type="text/css" href="bs/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bs/fa/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="img/tab_icon.png">
<link href="bs/css/mycss.css" rel="stylesheet">
</head>
<body>

<?php require "header.php"; ?><br><br>

<div class="container"><br><br>

<h1 class="text-center" id="t1">Forget Password</h1>
<div class="col-lg-4 col-md-4"></div>
<div class="col-lg-4 col-md-4" id="box3">
<form method="post">
<div class="form-group"><input type="email" name="email" class="form-control" placeholder="enter your email" required></div>	
<div class="form-group"><input type="submit" name="opt3" value="SEND" class="btn btn-warning btn-sm btn-block"></div>	
<?php
if(isset($_POST['opt3'])){
$email=$_POST['email'];
$cmd=mysqli_query($con,"select * from tbl_employees where email='$email'");
$row=mysqli_fetch_array($cmd);
$employee_id=$row['employee_id'];
if($row['email']==""){
print '<div class="alert alert-danger text-center">email incorrect !</div>';	
}
else{
print "has been send to email";	
}
}
?>
</form>
</div>
<div class="col-lg-4 col-md-4"></div>

</div>

<br><br><br><br><?php require "footer.php"; ?>

<script src="bs/jquery/jquery-3.1.0.min.js"></script>
<script src="bs/js/bootstrap.min.js"></script>
</body>
</html>