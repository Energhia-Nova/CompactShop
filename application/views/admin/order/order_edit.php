<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#"><?=__('Order')?> № <span class="ordid"><?=$order->id?></span> <?=__('from')?> <?=$order->user->username?></a>
  </div>
</div>
<table class="tproducts table table-bordered table-striped table-hover">
<tr>
<th><?=__('Product')?></th>
<th><?=__('amount')?></th>
<th><?=__('price')?></th>
</tr>
<?php foreach ($order->purchases->find_all() as $purchase):?>
<tr>
<td><?=$purchase->product->name?></td>
<td><?=$purchase->amount?></td>
<td><?=number_format(($purchase->product->price*$purchase->amount),2,'.','')?> EUR.</td>
</tr>
<?php endforeach; ?>
<tr>
	<td><b>Status</b></td>
	<td style="text-align:center">
		<select name="statuses">
			<?php foreach ($statuses as $status):?>
				<option value="<?=$status->id?>" <?=($order->status->id==$status->id)?'selected':''?>><?=$status->name?></option>
			<?php endforeach; ?>
		</select>	
	</td>
	<td><?=number_format($order->total_price(),2,'.','')?> EUR.</td>
</tr>
</table>