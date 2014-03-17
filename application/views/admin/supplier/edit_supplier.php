<form action="" method="post">
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Поставщик</a>
  </div>
</div>
<table class="tnewproduct" border="0">
<tr align="left" valign="middle">
    <td width="90">Поставщик</td>
    <td><input type="text" value="<?php echo $supplier->name;?>" name="name"/></td>
</tr>
<tr align="left" valign="middle">
    <td>Алиас (url):</td>
    <td><input type="text" value="<?php echo $supplier->alias;?>" name="alias" /></td>
</tr>
<tr align="left" valign="middle">
    <td>Описание</td>
    <td><textarea name="description" rows="10" style="width: 100%;"><?php echo $supplier->description; ?></textarea></td>
</tr>
<tr align="right" valign="middle">
    <td>&nbsp;</td>
    <td align="right" style="float: right;">
        <input type="submit" value="Обновить" name="add"  class="btn" style="float:right; width: 100px; padding: 6px; margin-right: -15px;" />
    </td>
</tr>
</table>
</form>