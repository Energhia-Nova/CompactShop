<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Пользователи</a>
  </div>
</div>
<table class="tproducts table table-bordered table-striped table-hover">
<tr>
<th>Имя</th>
<th>Email</th>
<th>Роль</th>
<th>Заказов</th>
<th>Общ. сумма</th>
</tr>
<?php foreach ($users as $user):?>
<tr>
<td><a href="<?=URL::base(true)?>admin/users/edit/<?=$user->id?>"><?=$user->username?></a></td>
<td><?=$user->email?></td>
<td>Покупатель</td>
<td>2</td>
<td>300 грн.</th>
<?php endforeach; ?>
</table>