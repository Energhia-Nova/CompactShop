<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Продукты</a>
  </div>
</div>
<table class="tproducts table table-bordered table-striped table-hover">
<tr>
<th>#</th>
<th>Название</th>
<th>Бренд</th>
<th>Поставщик</th>
<th>Кол-во</th>
<th>Цена</th>
</tr>
<?php $i=1; foreach ($products as $product):?>
<tr>
<td width="10"><?=$i++?></td>
<td><a href="products/edit-product/<?=$product->id?>"><?=$product->name?></a></td>
<td><?=$product->brand->name?></td>
<td><?=$product->supplier->name?></td>
<td><?=$product->stock?></td>
<td><?=number_format($product->price,2,'.','')?> грн.</td>
</tr>
<?php endforeach; ?>
</table>