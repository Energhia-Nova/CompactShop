<form action="" method="post">
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Marke</a>
  </div>
</div>
<table class="tnewproduct" border="0">
<tr align="left" valign="middle">
    <td width="90">Markenname</td>
    <td><input type="text" value="<?php echo $brand->name; ?>" name="name" /></td>
</tr>
<tr align="left" valign="middle">
    <td>Alias (url):</td>
    <td><input type="text" value="<?php echo $brand->alias;?>" name="alias" /></td>
</tr>
<tr align="left" valign="middle">
    <td>Beschreibung</td>
    <td><textarea name="description" rows="10"  style="width: 100%;"><?php echo $brand->description;?></textarea></td>
</tr>
<tr align="right" valign="middle">
    <td>&nbsp;</td>
    <td align="right"><input type="submit" value="Update" name="add"  class="btn" style="float:right; width: 100px; padding: 6px; margin-right: -15px;" /></td>
</tr>
</table>
</form>