<div id='form'>
	<h2 style='padding: 10px'>Заказы</h2>
	<p style='padding-left: 10px;'>Таблица заказов.</p>
	
	<div id="orders_done"><br />
		<table border="1" class="orders_done">
			<tr><th>Номер заказа</th><th>Статус заказа</th><th>Общ. сумма</th></tr>
			<?php foreach ($orders as $order):?>
				<tr><td><?=$order->id?></td><td><?=$order->status->name?></td><td><?=$order->total_price()?> грн.</td></tr>
			<?php endforeach; ?>
		</table>
	</div>
	
</div>