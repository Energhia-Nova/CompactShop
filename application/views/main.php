<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$title?></title>
<meta name="description" content="<?=$description?>" />
<!-- <link rel="stylesheet" type="text/css" href="/public/bootstrap/css/bootstrap.css" media="all" /> -->
<?php foreach($styles as $style): ?>
    <link href="<?=URL::base(true)?>public/css/<?=$style?>.css" 
    rel="stylesheet" type="text/css" />
<?php endforeach; ?>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<!-- Twitter Bootstrap as well -->
<?php if (strtolower(Request::initial()->action())==strtolower('facebook')) {?>
<link href="<?=URL::base(true)?>public/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" src="<?=URL::base(true)?>public/bootstrap/js/bootstrap.js"></script>
<?php } ?>
<!-- End. -->
<?php foreach($scripts as $script): ?>
    <script type="text/javascript" src="<?=URL::base(true)?>public/js/<?=$script?>.js"></script>
<?php endforeach; ?>
<!-- <script type="text/javascript" src="/public/bootstrap/js/bootstrap.min.js"></script>-->
</head>
<body>
<div id="wrapper">
	<?php echo $hormenu; ?>
    <div class="layer">
        <div class="container">
			<div class="pre-header">
				<ul id="cart">
					<!--<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>-->
					<?php if (!empty($purchases)) {					
						foreach ($purchases as $purchase) {
							echo '<li style="visibility: visible;"><img src="http://magazin.test/public/img/product.png" width="30" height="30"><span class="pr_amount" id="pr_'.$purchase->product_id.'">'.$purchase->amount.'</span></li>';
							} 
					    }
					?>
				</ul>
				 <?php if (empty($purchases)) echo '<h2 class="choosed">'.__('Selected Products').'</h2>'; ?>
			</div>
			<div id="sidebar" class="sidebar">
				<?=$categories?>
			</div>
			<div class="main">
				<?=$content?>
			</div>
			<div class="pages"><?=$pagination?></div>
        </div>
    </div>
</div>
</body>
</html>