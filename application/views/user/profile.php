 <div id='form'>
 <form action="" method="post">
 <table class="profile">
 <caption>Профиль</caption>
 <tr><td align="right">Email</td><td><input type="text" value="<?=$user->email?>" name="email" /></td></tr>
 <tr><td align="right">логин</td><td><input type="text" value="<?=$user->username?>" name="username" /></td></tr>
 <tr><td align="right">лет</td><td><input type="text" value="<?=$user->profile->age?>" name="age" /></td></tr>
 <tr><td align="right">контакты</td><td><input type="text" value="<?=$user->profile->contacts?>" name="contacts" /></td></tr>
 <tr><td align="right">пароль</td><td><input type="password" value="<?=$user->password?>" name="password" /></td></tr>
 <tr><td>&nbsp;</td><td align="center" style="text-align:center"><input type="submit" value="обновить" name="update" /></td></tr>
 </table>
 </form>
 </div>