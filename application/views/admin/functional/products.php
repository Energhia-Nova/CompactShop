<ul class="nav nav-tabs nav-stacked">
	<li><a href="/admin/products">Список продуктов</a></li>
    <li><a href="/admin/products/new-product">Добавить продукт</a></li>
	<?php
		if (strtolower(Request::current()->controller())=='products' and strtolower(Request::current()->action()=='edit_product'))
		{
			if (isset($image) and !empty($image))
			{
				echo "<li><img class='img' src='".URL::base(true)."uploads/products/".$image."'></li>";
			}
		}
	?>
</ul>