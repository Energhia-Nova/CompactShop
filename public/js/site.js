$(function(){

	// $.removeCookie('opened',{ path: '/'});
	
	$('#sidebar ul:first-child').ewigkeit();
				
	$('.dropdown').on('click',function(){
		$(this).find('.dd_list').toggle('slide');
	});
	
	$('#total_price').on('click',function(){ return false; });
	
	/* Обратный клик, т.е. мы должны убрать из корзины покупку */
	$('#cart').on('click','li',function(){
		/* Возьмем кол-во в корзине */
		amount = $(this).find('.pr_amount').text();
		/* а так же узнаем идентификатор */
		pr_id = $(this).find('.pr_amount').attr("id").split("pr_")[1];
		/* отправим пост запрос и вычтим его из корзины */
		$.post('/ajax/cart', { product_id: pr_id, func: 'cancel' });
		/* если кол-во равно 1, то удалим вообще этот продукт из корзины */
		if (amount==1) { $(this).remove(); } else {
			amount--;
			$(this).effect('bounce');
			$(this).find('.pr_amount').text(amount);
		}
		
		/* Деньги, надо отнимать деньги */
		// Узнаем сколько стоил данный продукт и вычтим из корзины 
		pr_pr = $('.products-list a[title="'+pr_id+'"]').parent().find('.prprice').text();
		
		/* сколько денег в корзине */
		cart_money = $('#total_price').text();
		
		result = cart_money - pr_pr;
		
		$('#total_price').text(result.toFixed(2));
		
	});
		
	$('.products-list').on('click','.toCart',function(){
	
		/* Первое что сделаем, это проверим нету ли у пользователя заказа */
		$.post('/ajax/check',function(data){					
			// Если у пользователя есть заказ, то перенаправляем его к этому заказу
			if (data==1) {
				window.location.href = '/order';
				return false;
			}
		});
		
		$this = $(this);

		$('.choosed').hide();
		
		if ($('#cart li').size()>27) {
		
			alert('Превышен лимит (28)');
		
		} else {
		
			pr_id = $this.parent().find('a').attr("title");
			pr_amount = 1;
			
			// if exists than up
			if ($('#cart li #pr_'+pr_id).length>0) {
				// getting current amount			
				amount = $('#cart li #pr_'+pr_id).text();
				amount++;
				total_price=parseFloat($('#total_price').text())+parseFloat($this.parent().find('.prprice').text());				
				stock = $this.parent().find('.stock').text().replace(")",'').replace("(",'');
				stock--;
				$this.parent().find('.stock').text("("+stock+")");
				$this.parent().find('img').effect('transfer', { to: '#cart li #pr_'+pr_id, className: 'ui-effects-transfer' }, function(){				
					$('#total_price').text(total_price.toFixed(2));
					$.post('/ajax/cart', { product_id: pr_id });
				});
				$('#cart li #pr_'+pr_id).text(amount);
			} else {
		
				$('#cart').append('<li style="visibility:hidden"><img src="http://magazin.test/public/img/product.png" width="30" height="30"><span class="pr_amount" id="pr_'+pr_id+'">'+pr_amount+'</span></li>');
							
				total_price=parseFloat($('#total_price').text())+parseFloat($(this).parent().find('.prprice').text());
				
				stock = $this.parent().find('.stock').text().replace(")",'').replace("(",'');
				
				stock--;
				
				$this.parent().find('.stock').text("("+stock+")");
			
				$this.parent().find('img').effect('transfer', { to: '#cart li:last-child', className: 'ui-effects-transfer' },function(){
					$('#cart li:last-child').css('visibility','visible');
					
					$('#total_price').text(total_price.toFixed(2));
					
					// adding to cart
					$.post('/ajax/cart', { product_id: pr_id });
					
				});
				
			}
		
		}
	
	});
	
});