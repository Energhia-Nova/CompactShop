<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Опции</a>
  </div>
</div>
<table class="tproducts table table-bordered table-striped table-hover">
<tr>
<th>Имя Опции</th>
<th>Значение</th>
<th>Алиас</th>
<th></th>
</tr>
<?php foreach ($options as $option):?>
<tr>
<td><a href="<?=URL::base(true)?>admin/options/edit/<?=$option->id?>"><?=$option->name?></a></td>
<td><?=$option->value?></td>
<td><?=$option->alias?></td>
<td style="text-align:center"><a href="<?=URL::base(true)?>admin/options/remove/<?=$option->id?>" style="float:none;" class="icon-remove"></a></td>
</tr>
<?php endforeach; ?>
</table>