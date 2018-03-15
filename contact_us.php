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
<h3 id="t1"><i class="fa fa-tty"></i> Contact Us</h3>
<hr></hr>

<div class="col-lg-12">
<div class="row">

<div class="col-lg-8">
<strong id="t1">Write Message...</strong><br><br>
<div class="form-group"><input type="text" name="name" placeholder="Name" class="form-control" required></div>
<div class="form-group"><input type="email" name="email" placeholder="Email" class="form-control" required></div>
<div class="form-group"><textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea></div>
<div class="form-group"><input type="submit" name="opt1" value="&ensp;SEND&ensp;" class="btn btn-warning"></div>
</div>
<div class="col-lg-4"><br><br>
<div id="box3">
<strong id="t1">Phone Number</strong>
<hr></hr>
<small id="t1"><i class="fa fa-mobile"></i> +62858 8510 7209</small><br>
<small id="t1"><i class="fa fa-mobile"></i> +62858 8510 7209</small><br>
</div><br>
<div id="box3">
<strong id="t1">Email</strong>
<hr></hr>
<small id="t1"><i class="fa fa-envelope-o"></i> marketing@klikjobs.com</small><br>
<small id="t1"><i class="fa fa-envelope-o"></i> support@klikjobs.com</small><br>
</div>
</div>

</div>
</div>

</div>

<br><br><?php require "footer.php"; ?>

<script src="bs/jquery/jquery-3.1.0.min.js"></script>
<script src="bs/js/bootstrap.min.js"></script>
</body>
</html>