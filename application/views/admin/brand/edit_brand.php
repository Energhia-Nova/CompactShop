<form action="" method="post">
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Бренд</a>
  </div>
</div>
<table class="tnewproduct" border="0">
<tr align="left" valign="middle">
    <td width="90">Имя Бренда</td>
    <td><input type="text" value="<?php echo $brand->name; ?>" name="name" /></td>
</tr>
<tr align="left" valign="middle">
    <td>Алиас (url):</td>
    <td><input type="text" value="<?php echo $brand->alias;?>" name="alias" /></td>
</tr>
<tr align="left" valign="middle">
    <td>Описание</td>
    <td><textarea name="description" rows="10"  style="width: 100%;"><?php echo $brand->description;?></textarea></td>
</tr>
<tr align="right" valign="middle">
    <td>&nbsp;</td>
    <td align="right"><input type="submit" value="Обновить" name="add"  class="btn" style="float:right; width: 100px; padding: 6px; margin-right: -15px;" /></td>
</tr>
</table>
</form>