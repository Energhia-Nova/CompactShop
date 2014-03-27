<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#"><?=__('Orders')?></a>
  </div>
</div>
<table class="tproducts table table-bordered table-striped table-hover">
<tr>
<th>№</th>
<th>Autor</th>
<th>Status</th>
<th><?=__('total')?></th>
</tr>
<?php foreach ($orders as $order):?>
<tr>
<td><a href="<?=URL::base(true)?>admin/order/edit/<?=$order->id?>"><?=$order->id?></td>
<td><?=$order->user->username?></td>
<td><?=$order->status->name?></td>
<td><?=number_format($order->total_price(),2,'.','')?></td>
</tr>
<?php endforeach; ?>
</table>