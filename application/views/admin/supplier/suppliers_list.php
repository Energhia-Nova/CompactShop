<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Lieferanten</a>
  </div>
</div>
<table class="tproducts table table-bordered table-striped table-hover">
<tr>
<th>Name</th>
<th>Alias</th>
<th>Beschreibung</th>
<th></th>
</tr>
<?php foreach ($suppliers as $supplier):?>
<tr>
<td><a href="<?php echo URL::base(true)."admin/suppliers/edit/".$supplier->id;?>"><?=$supplier->name?></a></td>
<td><?=$supplier->alias?></td>
<td><?=$supplier->description?></td>
<td style="text-align:center;"><a href="<?=URL::base(true)."admin/suppliers/remove/".$supplier->id;?>" class="icon-remove" style="float:none;"></a></td>
</tr>
<?php endforeach; ?>
</table>