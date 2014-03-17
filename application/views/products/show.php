<div class="products-list"><div class="toCart"><span class="to-cart-icon">+</span></div>
	<a href="<?=URL::base(true).$product->alias."/show/".$product->id?>">
		<img src="<?=URL::base(true)?>public/img/product.png" class="img" alt="<?php $product->name;?>">
		<p style="margin: 2px; text-align:center;"><?php echo $product->name; ?></p>
		<div><?=number_format($product->price,2,'.','')?> грн.</div>
	</a>
</div>