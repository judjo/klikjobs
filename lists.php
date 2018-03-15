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

<?php require "header.php"; ?>

<div class="container"><br><br>
<div class="row">

<div class="col-lg-3 col-md-3">
<div class="form-group" id="t1"><input type="text" class="form-control" placeholder="Company / Skill"></div>
<div class="form-group">
<select class="form-control">
<option>Locations</option>	
<option>DKI Jakarta</option>
<option>Bali</option>	
</select>	
</div>	
<div class="form-group" id="t1"><input type="submit" name="submit" value="SEARCH JOB RESULTS" class="btn btn-block btn-warning"></div><br>

<h4 id="t1">Categories</h4>
<hr></hr>
<input type="checkbox"> <small id="t1">Accounting</small><br>
<input type="checkbox"> <small id="t1">Human Resources</small><br>
<input type="checkbox"> <small id="t1">Construction</small><br>
<input type="checkbox"> <small id="t1">Education</small><br>
<input type="checkbox"> <small id="t1">Engineering</small><br>
<input type="checkbox"> <small id="t1">Healthcare</small><br>
<input type="checkbox"> <small id="t1">Information Technology</small><br>
<input type="checkbox"> <small id="t1">Restaurant</small><br>
<input type="checkbox"> <small id="t1">Marketing</small><br><br><br>
</div>
<div class="col-lg-9 col-md-9">
<div id="box3">	
<a href="" id="a4"><b>Android Programmer</b></a><br>
<a href="" id="a5">Google Indonesia</a><br><br>
<p id="p2">Job Descriptions : - Create an android application - Make a design of android application - Create an Front End and Back End applications - Make a responsive design and User Friendly...</p><br>
<p class="hidden-xs hidden-sm" id="p2"><i class="fa fa-map-marker fa-lg"> Jakarta</i> - <i class="fa fa-dollar fa-lg"> 3.500.000</i> <small style="float:right;letter-spacing: 1px;"><i class="fa fa-clock-o fa-lg"> 13/05/17</i></small></p>
<p class="hidden-md hidden-lg" id="p2">
<i class="fa fa-map-marker fa-lg"></i> Jakarta<br>	
<i class="fa fa-dollar fa-lg"></i> 3.500.000<br>
<i class="fa fa-clock-o fa-lg"></i> 13/05/17
</p>
</div><br>


</div>

</div>
</div><br><br>

<?php require "footer.php"; ?>

<script src="bs/jquery/jquery-3.1.0.min.js"></script>
<script src="bs/js/bootstrap.min.js"></script>
</body>
</html>