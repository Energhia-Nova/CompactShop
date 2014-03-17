<form action="" method="post" id="product" enctype="multipart/form-data">
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Продукт</a>
  </div>
</div>
<table class="tnewproduct" border="0">
<tr align="left" valign="middle">
    <td width="90">Имя продукта</td>
    <td><input type="text" value="<?php echo $product->name; ?>" name="name" /></td>
</tr>
<tr align="left" valign="middle">
    <td>Алиас (url):</td>
    <td><input type="text" value="<?php echo $product->alias; ?>" name="url" /></td>
</tr>
<tr align="left" valign="middle">
    <!-- <td>Кол-во на складе</td> -->
	<td>Категория</td>
    <td>
		<select name="category">
		<?php 
			foreach($categories as $category)
			{
				echo '<option value="'.$category->url.'" data-id="'.$category->id.'" ';
				if ($category->id==$product->category_id) echo "selected";
				echo '>'.$category->title.'</option>';
			}
		?>
		</select>
        <span style="float: right; margin-right: -14px;">
		Кол-во на складе <input type="text" value="<?php echo $product->stock; ?>" name="stock" style="width:50px"> &nbsp;
		Цена: <input type="text" value="<?php printf("%.2f",$product->price);?>" name="price" style="width: 50px;" /></span>
		<input type="hidden" name="category_id" value="" />
    </td>
</tr>
<tr align="left" valign="middle">
    <td>Описание</td>
    <td>
		<textarea name="description" style="width: 100%; height: 300px;"><?php echo trim($product->description);?></textarea>
    </td>
</tr>
<tr>
	<td>Изображение</td>
	<td><input type="file" name="picture" /></td>
</tr>
<tr align="right" valign="middle">
    <td>&nbsp;</td>
    <td align="right"><input type="submit" value="Обновить" name="add"  class="btn" style="float:right; width: 100px; padding: 6px; margin-right: -15px;" /></td>
</tr>
</table>
</form>