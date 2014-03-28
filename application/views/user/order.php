<div id='form'>
	<h2 style='padding: 10px'><?=__('Order')?> № <?=$number?></h2>
	<p style='padding-left: 10px;'><?=__('Order in wait')?></p>
	
	<div id="order_done"><br />
		<table border="1" class="order_done">
		<tr><th><?=__('Product')?></th><th><?=__('amount')?></th><th><?=__('price')?></th></tr>
		<?php foreach ($purchases as $purchase):?>
		<tr><td><?=$purchase->product->name?></td><td><?=$purchase->amount;?></td><td><?=number_format(($purchase->product->price*$purchase->amount),2,'.','')?>  <?=$currency?></td></tr>
		<?php endforeach; ?>
		<tr><td>&nbsp;</td><td><b><?=__('total')?></b></td><td style="border-left: 0"><?=$total_price?> <?=$currency?></td></tr>
		</table>
	</div>
	
</div>