<div id='form'>
	<h2 style='padding: 10px'>Bestellungen</h2>
	<p style='padding-left: 10px;'>Inhaltsverzeichnis.</p>
	
	<div id="orders_done"><br />
		<table border="1" class="orders_done">
			<tr><th>Bestellnummer</th><th>Status</th><th>Gesamtbetrag</th></tr>
			<?php foreach ($orders as $order):?>
				<tr><td><?=$order->id?></td><td><?=$order->status->name?></td><td><?=$order->total_price()?> EUR.</td></tr>
			<?php endforeach; ?>
		</table>
	</div>
	
</div>