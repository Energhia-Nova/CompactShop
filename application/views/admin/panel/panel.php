<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
<link href="<?php echo URL::base();?>design/admin/public/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo URL::base();?>design/admin/public/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo URL::base();?>design/admin/public/jqvam/css/dcaccordion.css" rel="stylesheet" type="text/css" media="all" />
<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>design/admin/public/css/<?php echo $style; ?>.css" 
    rel="stylesheet" type="text/css" />
<?php endforeach; ?>
<?php foreach($scripts as $script): ?>
    <script type="text/javascript" src="<?php echo URL::base(); ?>design/admin/public/js/<?php echo $script; ?>.js"></script>
<?php endforeach; ?>
<script type="text/javascript" src="<?php echo URL::base();?>design/admin/public/js/jquery.hotkeys.js"></script>
<script type="text/javascript" src="<?php echo URL::base();?>design/admin/public/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL::base();?>design/admin/public/bootstrap/js/bootstrap-wysiwyg.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true);?>design/admin/public/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true);?>design/admin/public/js/jquery.ewigkeit.menu.js"></script>
<script type="text/javascript" src="<?php echo URL::base(true);?>design/admin/public/js/admin.js"></script>
</head>
<body>
<div id="header">
<div id="menu">
<ul id="nav">
    <li>
        <a class="atem" href="/admin">Platte</a>
    </li>
	<li>
        <a href="/admin/orders">Bestellungen</a>
    </li>
    <li>
        <a href="/admin/users">Benutzer</a>
    </li>
    <li>
        <a href="/admin/products">Produkte</a>
    </li>
    <li>
        <a href="/admin/categories">Kategorien</a>
    </li>
    <li>
        <a href="/admin/brands">Marken</a>
    </li>
        <li>
        <a href="/admin/suppliers">Lieferanten</a>
    </li>
	<li>
        <a href="/admin/options">Optionen</a>
    </li>
</ul>
<a style="float:right; margin-right: 5px; padding-top:1px;" href="/"><small>im</small> Geschäft</a>
</div>
</div>
 <div id="leftsidebar">
  <div id="container">
		<?php echo $functional; ?>
  </div>
 </div>
<div id="content">
    <div class="container">
        <?php echo $content; ?>
    </div>
</div>
</body>
</html>