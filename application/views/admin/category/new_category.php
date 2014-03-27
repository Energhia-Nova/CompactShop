<form action="" method="post">
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#"><?=__('New Category')?></a>
  </div>
</div>

<div class="block-new">

<div class="categories">
<?php echo $categories; ?>
</div>
<p>&nbsp;</p>
<table class="new-category">
<tr>
    <td><?=__('SubCategory')?></td>
    <td><input type="text" value="" class="cat-input" name="subcategory" /></td>
</tr>
<tr>
    <td>Name</td>
    <td><input type="text" value="" class="cat-input" name="name" /></td>
</tr>
<tr>
    <td>Alias</td>
    <td><input type="text" class="cat-input" value="" name="url"/></td>
</tr>
<tr>
    <td><input type="hidden" value="" name="subcat_alias" /></td>
    <td><input type="submit" value="<?=__('add')?>" class="btn" name="submit" /></td>
</tr>
</form>
</table>
</div>
</form>