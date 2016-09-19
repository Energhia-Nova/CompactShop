<form action="" method="post" id="product">
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#"><?=__('User')?></a>
  </div>
</div>
<table class="tnewuser" border="0">
<tr>
	<td><input type="text" value="<?=$user->profile->name?>" name="name" placeholder="Name" /></td>	
</tr>
<tr>
	<td><input type="text" value="<?=$user->username?>" name="login" placeholder="Login" /></td>	
</tr>
<tr>
	<td><input type="text" value="<?=$user->profile->age?>" name="age" placeholder="Age" /></td>
</tr>
<tr>
	<td><input type="text" value="<?=$user->email?>" name="email" placeholder="Email" /></td>
</tr>
<tr>	
	<td><input type="text" value="<?=$user->profile->contacts?>" name="contacts" placeholder="Contacts" /></td>
</tr>
<tr>
	<td><input type="submit" value="Update" name="save" class="btn" /></td>
</tr>
</table>