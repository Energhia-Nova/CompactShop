 <div id='form'>
 <form action="" method="post">
 <table class="profile">
 <caption><?=__('Profile')?></caption>
  <tr><td align="right">Name</td><td><input type="text" value="<?=$user->profile->name?>" name="name" /></td></tr>
 <tr><td align="right">Email</td><td><input type="text" value="<?=$user->email?>" name="email" /></td></tr>
 <tr><td align="right"><?=__('Login')?></td><td><input type="text" value="<?=$user->username?>" name="username" /></td></tr>
 <tr><td align="right"><?=__('Age')?></td><td><input type="text" value="<?=$user->profile->age?>" name="age" /></td></tr>
 <tr><td align="right"><?=__('Contact')?></td><td><input type="text" value="<?=$user->profile->contacts?>" name="contacts" /></td></tr>
 <tr><td align="right"><?=__('Password')?></td><td><input type="password" value="<?=$user->password?>" name="password" /></td></tr>
 <tr><td>&nbsp;</td><td align="center" style="text-align:center"><input type="submit" value="Update" name="update" /></td></tr>
 </table>
 </form>
 </div>