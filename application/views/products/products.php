<?php foreach ($products as $product):?>
	<div class="products-list"><div class="toCart"><span class="to-cart-icon">+</span></div>
		<a href="<?=URL::base(true).$product->alias."/show/".$product->id?>" title="<?=$product->id?>">
			<img src="<?=URL::base(true)?>public/img/product.png" class="img" alt="<?php $product->name;?>">
			<div class="outStock"><span class="stock">(<?=$product->stock?>)</span></div>
			<p><?=$product->name?> <span class="prprice"><?=number_format($product->price, 2, '.', '')?></span> <span class="prcur">EUR.</span></p>
		</a>
	</div>
<?php endforeach; ?>