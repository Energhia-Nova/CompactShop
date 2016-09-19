<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#"><?=__('Brands')?></a>
  </div>
</div>
<table class="tproducts table table-bordered table-striped table-hover">
<tr>
<th>Name</th>
<th>Alias</th>
<th><?=__('Description')?></th>
<th></th>
</tr>
<?php foreach ($brands as $brand):?>
<tr>
<td><a href="<?=URL::base(true)?>admin/brands/edit/<?=$brand->id?>"><?=$brand->name?></td>
<td><?=$brand->alias?></td>
<td><?=$brand->description?></td>
<td style="text-align:center; width: 15px;"><a href="<?=URL::base(true)?>admin/brands/remove/<?=$brand->id?>" class="icon-remove" style="float:none;"></a></td>
</tr>
<?php endforeach; ?>
</table>