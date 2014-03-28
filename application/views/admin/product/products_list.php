<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#"><?=__('Products')?></a>
  </div>
</div>
<table class="tproducts table table-bordered table-striped table-hover">
<tr>
<th>#</th>
<th>Name</th>
<th><?=__('Brand')?></th>
<th><?=__('Supplier')?></th>
<th><?=__('amount')?></th>
<th><?=__('price')?></th>
</tr>
<?php $i=1; foreach ($products as $product):?>
<tr>
<td width="10"><?=$i++?></td>
<td><a href="products/edit-product/<?=$product->id?>"><?=$product->name?></a></td>
<td><?=$product->brand->name?></td>
<td><?=$product->supplier->name?></td>
<td><?=$product->stock?></td>
<td><?=number_format($product->price,2,'.','')?> <?=$currency?></td>
</tr>
<?php endforeach; ?>
</table>