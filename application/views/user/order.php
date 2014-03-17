<div id='form'>
	<h2 style='padding: 10px'>Заказ № <?=$number?></h2>
	<p style='padding-left: 10px;'>Таблица заказа, ожидающего исполнения</p>
	
	<div id="order_done"><br />
		<table border="1" class="order_done">
		<tr><th>Продукт</th><th>Кол-во</th><th>Цена</th></tr>
		<?php foreach ($purchases as $purchase):?>
		<tr><td><?=$purchase->product->name?></td><td><?=$purchase->amount;?></td><td><?=number_format(($purchase->product->price*$purchase->amount),2,'.','')?>  грн.</td></tr>
		<?php endforeach; ?>
		<tr><td>&nbsp;</td><td><b>Итог</b></td><td style="border-left: 0"><?=$total_price?> грн.</td></tr>
		</table>
	</div>
	
</div>