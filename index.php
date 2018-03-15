<?php require "systems/config/connect.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>klikjobs.com</title>
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

<?php require "header.php"; ?>

<div class="hidden-xs" style="background:url('img/bg_jobs2.jpeg')no-repeat center center;background-size: 100% 100%;padding-bottom: 180px;">
<div class="container"><br><br><br><br><br><br><br>
<div class="col-lg-4 col-md-4 col-sm-3"></div>
<div class="col-lg-4 col-md-4 col-sm-6" id="box1"><br>
<h1 class="text-center" id="t1">Search Jobs</h1><br>
<div class="form-group" id="t1"><input type="text" class="form-control" placeholder="Company / Skill"></div>
<div class="form-group" id="t1">
<select class="form-control">
<option>Locations</option>	
<option>DKI Jakarta</option>
<option>Bali</option>
</select>	
</div>
<div class="form-group" id="t1"><input type="submit" value="SEARCH" class="btn btn-default btn-block" placeholder="Company / Skill"></div><br><br>	
</div>
<div class="col-lg-4 col-md-4 col-sm-3"></div>
</div>
</div>

<div class="hidden-sm hidden-md hidden-lg container" id="box2"><br>
<h1 class="text-center" id="t1">Search Jobs</h1><br>
<div class="form-group" id="t1"><input type="text" class="form-control" placeholder="Company / Skill"></div>
<div class="form-group" id="t1">
<select class="form-control">
<option>Locations</option>	
<option>DKI Jakarta</option>
<option>Bali</option>
</select>	
</div>
<div class="form-group" id="t1"><input type="submit" value="SEARCH" class="btn btn-default btn-block" placeholder="Company / Skill"></div><br><br>	
</div>

<div class="container"><br>
<h1 class="text-center" id="t1">Choose Your Favorite Jobs</h1><br><br>
  
<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
<a href="" id="a4"><span class="fa-stack fa-5x">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-calculator fa-stack-1x fa-inverse"></i>
</span><br>
<h3 class="text-center">Accounting</h3></a><br>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
<a href="" id="a4"><span class="fa-stack fa-5x">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-users fa-stack-1x fa-inverse"></i>
</span><br>
<h3 class="text-center">Human Resources</h3></a><br>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
<a href="" id="a4"><span class="fa-stack fa-5x">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-building fa-stack-1x fa-inverse"></i>
</span><br>
<h3 class="text-center">Construction</h3></a>
</div>
</div>

<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12"><br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
<a href="" id="a4"><span class="fa-stack fa-5x">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
</span><br>
<h3 class="text-center">Information Technology</h3></a><br>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
<a href="" id="a4"><span class="fa-stack fa-5x">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-university fa-stack-1x fa-inverse"></i>
</span><br>
<h3 class="text-center">Education</h3></a><br>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
<a href="" id="a4"><span class="fa-stack fa-5x">
  <i class="fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-wrench fa-stack-1x fa-inverse"></i>
</span><br>
<h3 class="text-center">Engineering</h3></a><br>
</div>
</div>

</div><br><br>

<?php require "footer.php"; ?>

<script src="bs/jquery/jquery-3.1.0.min.js"></script>
<script src="bs/js/bootstrap.min.js"></script>
</body>
</html>
<?php ob_flush(); ?>