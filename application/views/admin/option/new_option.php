<form action="" method="post">
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#"><?=__('New Option')?></a>
  </div>
</div>
<table class="tnewproduct" border="0">
<tr align="left" valign="middle">
    <td width="90">Name</td>
    <td><input type="text" value="" name="name" /></td>
</tr>
<tr align="left" valign="middle">
    <td>Alias (url):</td>
    <td><input type="text" value="" name="alias" /></td>
</tr>
<tr align="left" valign="middle">
    <td><?=__('Value')?></td>
    <td><input type="text" value="" name="value" /></td>
</tr>
<tr align="right" valign="middle">
    <td>&nbsp;</td>
    <td align="right"><input type="submit" value="<?=__('add')?>" name="add"  class="btn" style="float:right; width: 100px; padding: 6px; margin-right: -15px;" /></td>
</tr>
</table>
</form>