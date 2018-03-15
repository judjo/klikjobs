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

<div class="container">

<div class="col-lg-5 col-md-5">
<img src="img/company_img2.png" class="hidden-md hidden-lg img img-responsive">
<div id="box3">
<h4 id="t1">LOGIN COMPANY</h4><br>
<div class="form-group" id="t1">Email<input type="email" name="email" class="form-control" required></div>
<div class="form-group" id="t1">Password<input type="password" name="password" class="form-control" required></div>
<div class="form-group" id="t1"><input type="submit" name="opt1" value="&emsp;LOGIN&emsp;" class="btn btn-warning" required></div>
</div>
</div>
<div class="col-lg-7 col-md-7">
<img src="img/company_img2.png" class="hidden-xs hidden-sm img img-responsive">
</div>

</div>

<br><br><?php require "footer.php"; ?>

<script src="bs/jquery/jquery-3.1.0.min.js"></script>
<script src="bs/js/bootstrap.min.js"></script>
</body>
</html>