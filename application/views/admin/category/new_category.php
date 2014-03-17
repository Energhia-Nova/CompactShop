<form action="" method="post">
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Новая Категория</a>
  </div>
</div>

<div class="block-new">

<div class="categories">
<?php echo $categories; ?>
</div>
<p>&nbsp;</p>
<table class="new-category">
<tr>
    <td>Подкатегория</td>
    <td><input type="text" value="" class="cat-input" name="subcategory" /></td>
</tr>
<tr>
    <td>Имя</td>
    <td><input type="text" value="" class="cat-input" name="name" /></td>
</tr>
<tr>
    <td>Алиас</td>
    <td><input type="text" class="cat-input" value="" name="url"/></td>
</tr>
<tr>
    <td><input type="hidden" value="" name="subcat_alias" /></td>
    <td><input type="submit" value="Добавить" class="btn" name="submit" /></td>
</tr>
</form>
</table>
</div>
</form>