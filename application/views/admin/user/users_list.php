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
<td><?=__('Buyer')?></td>
<td>2</td>
<td>300 EUR.</th>
<?php endforeach; ?>
</table>