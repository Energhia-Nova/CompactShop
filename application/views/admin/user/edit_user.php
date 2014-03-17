<form action="" method="post" id="product">
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Пользователь</a>
  </div>
</div>
<table class="tnewuser" border="0">
<tr>
	<td><input type="text" value="<?php echo $user->username; ?>" name="login" /> </td>
</tr>
<tr>
	<td><input type="text" value="<?php echo $user->email;?>" name="email" /></td>
</tr>
<tr>
	<td><input type="submit" value="Обновить" name="save" class="btn" /></td>
</tr>
</table>