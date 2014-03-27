<div id='form'>
	<h2 style='padding: 10px'><?=__('Orders')?></h2>
	<p style='padding-left: 10px;'><?=__('Orders list.')?></p>
	
	<div id="orders_done"><br />
		<table border="1" class="orders_done">
			<tr><th>№</th><th>Status</th><th><?=__('total')?></th></tr>
			<?php foreach ($orders as $order):?>
				<tr><td><?=$order->id?></td><td><?=$order->status->name?></td><td><?=$order->total_price()?> EUR.</td></tr>
			<?php endforeach; ?>
		</table>
	</div>
	
</div>