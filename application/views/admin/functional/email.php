<form action="" method="post">
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Email</a>
  </div>
</div>
<table class="tnewproduct" border="0">
<tr align="left" valign="middle">
    <td width="90"><?=__('To')?></td>
    <td><input type="text" value="" name="email" /></td>
</tr>
<tr align="left" valign="middle">
    <td>Thema</td>
    <td><input type="text" value="" name="subject" /></td>
</tr>
<tr align="left" valign="middle">
    <td><?=__('Text')?></td>
    <td><textarea name="message" rows="10"  style="width: 100%;"></textarea></td>
</tr>
<tr align="right" valign="middle">
    <td>&nbsp;</td>
    <td align="right"><input type="submit" value="<?=__('Send')?>" name="send"  class="btn" style="float:right; width: 100px; padding: 6px; margin-right: -15px;" /></td>
</tr>
</table>
</form>