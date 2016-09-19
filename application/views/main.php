<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$title?></title>
<meta name="description" content="<?=$description?>" />
<?php foreach($styles as $style): ?>
    <link href="<?=URL::base(true)?>public/css/<?=$style?>.css" 
    rel="stylesheet" type="text/css" />
<?php endforeach; ?>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<?php foreach($scripts as $script): ?>
    <script type="text/javascript" src="<?=URL::base(true)?>public/js/<?=$script?>.js"></script>
<?php endforeach; ?>
</head>
<body>
<div id="wrapper">
	<?php echo $hormenu; ?>
    <div class="layer">
        <div class="container">
			<div class="pre-header">
				<ul id="cart"> 
					<?php if (!empty($purchases)) {					
						foreach ($purchases as $purchase) {
							echo '<li style="visibility: visible;"><img src="public/img/product.png" width="30" height="30"><span class="pr_amount" id="pr_'.$purchase->product_id.'">'.$purchase->amount.'</span></li>';
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