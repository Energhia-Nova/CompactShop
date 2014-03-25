<div id='form'>
	<h2 style='padding: 10px'>Bestellung № <?=$number?></h2>
	<p style='padding-left: 10px;'>Bestelltabelle auf ihre Hinrichtung warten.</p>
	
	<div id="order_done"><br />
		<table border="1" class="order_done">
		<tr><th>Produkt</th><th>Anzahl</th><th>Preis</th></tr>
		<?php foreach ($purchases as $purchase):?>
		<tr><td><?=$purchase->product->name?></td><td><?=$purchase->amount;?></td><td><?=number_format(($purchase->product->price*$purchase->amount),2,'.','')?>  EUR.</td></tr>
		<?php endforeach; ?>
		<tr><td>&nbsp;</td><td><b>Summe</b></td><td style="border-left: 0"><?=$total_price?> EUR.</td></tr>
		</table>
	</div>
	
</div>