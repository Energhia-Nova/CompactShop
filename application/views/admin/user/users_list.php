<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#"><?=__('Users list')?></a>
  </div>
</div>
<table class="tproducts table table-bordered table-striped table-hover">
<tr>
<th>Name</th>
<th>Email</th>
<th><?=__('Role')?></th>
<th><?=__('orders amount')?></th>
<th><?=__('Total Price')?></th>
</tr>
<?php foreach ($users as $user):?>
<tr>
<td><a href="<?=URL::base(true)?>admin/users/edit/<?=$user->id?>"><?=$user->username?></a></td>
<td><?=$user->email?></td>
<td><? foreach ($user->get_roles() as $role) echo $role->name.'<br />';?></td>
<td><?=$user->orders->count_all()?></td>
<td><?=$user->orders_sum()?> <?=$currency?></th>
<?php endforeach; ?>
</table>