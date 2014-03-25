<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Produkte</a>
  </div>
</div>
<table class="tproducts table table-bordered table-striped table-hover">
<tr>
<th>#</th>
<th>Name</th>
<th>Markenname</th>
<th>Lieferant</th>
<th>Anzahl</th>
<th>Preis</th>
</tr>
<?php $i=1; foreach ($products as $product):?>
<tr>
<td width="10"><?=$i++?></td>
<td><a href="products/edit-product/<?=$product->id?>"><?=$product->name?></a></td>
<td><?=$product->brand->name?></td>
<td><?=$product->supplier->name?></td>
<td><?=$product->stock?></td>
<td><?=number_format($product->price,2,'.','')?> EUR.</td>
</tr>
<?php endforeach; ?>
</table>