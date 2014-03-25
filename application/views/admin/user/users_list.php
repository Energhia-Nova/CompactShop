<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Liste der Mitglieder.</a>
  </div>
</div>
<table class="tproducts table table-bordered table-striped table-hover">
<tr>
<th>Name</th>
<th>Email</th>
<th>Rolle</th>
<th>Anzahl der Bestellungen</th>
<th>Gesamtbetrag</th>
</tr>
<?php foreach ($users as $user):?>
<tr>
<td><a href="<?=URL::base(true)?>admin/users/edit/<?=$user->id?>"><?=$user->username?></a></td>
<td><?=$user->email?></td>
<td>Käufer</td>
<td>2</td>
<td>300 EUR.</th>
<?php endforeach; ?>
</table>