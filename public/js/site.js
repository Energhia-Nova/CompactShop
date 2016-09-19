$(function(){

	// $.removeCookie('opened',{ path: '/'});
	
	$('#sidebar ul:first-child').ewigkeit();
				
	$('.dropdown').on('click',function(){
		$(this).find('.dd_list').toggle('slide');
	});
	
	$('#total_price').on('click',function(){ return false; });
	
	$('#cart').on('click','li',function(){
	
		amount = $(this).find('.pr_amount').text();
		pr_id = $(this).find('.pr_amount').attr("id").split("pr_")[1];
		
		$.post('/ajax/cart', { product_id: pr_id, func: 'cancel' });
		
		if (amount==1) { $(this).remove(); } else {
			amount--;
			$(this).effect('bounce');
			$(this).find('.pr_amount').text(amount);
		}
		
		pr_pr = $('.products-list a[title="'+pr_id+'"]').parent().find('.prprice').text();
		cart_money = $('#total_price').text();
		result = cart_money - pr_pr;
		
		$('#total_price').text(result.toFixed(2));
		
	});
	
	$('.R').click(function(){
		
		if ($('.choosed').css('display')!='block' && $('#cart li').length>0){
		
			if (!confirm('Is your order finaly formed?')) {

				return false;

			}
		
		}

	});
	
	$('.products-list').on('click','.toCart',function(){

		$this = $(this);
		
		$.post('/ajax/check',function(data){					
	
			if (data==1) {
						
					if ($('.pre-header .choosed').css('display')!='block') {
					
						$('.pre-header #cart').after('<div class="choosed"><a href="/order" style="display:block" class="info-graph-msg">You already have an order in wait -></a></div>');
					
					}
					
				return false;
				
			} else {
				
				$('.choosed').hide();
		
				if ($('#cart li').size()>27) {
				
					alert('Over (28)! (amount of purchases is under limit)');
				
				} else {
				
					pr_id = $this.parent().find('a').attr("title");
					pr_amount = 1;
					
					if ($('#cart li #pr_'+pr_id).length>0) {
					
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
				
						$('#cart').append('<li style="visibility:hidden"><img src="public/img/product.png" width="30" height="30"><span class="pr_amount" id="pr_'+pr_id+'">'+pr_amount+'</span></li>');
									
						total_price=parseFloat($('#total_price').text())+parseFloat($this.parent().find('.prprice').text());
						
						stock = $this.parent().find('.stock').text().replace(")",'').replace("(",'');
						
						stock--;
						
						$this.parent().find('.stock').text("("+stock+")");
					
						$this.parent().find('img').effect('transfer', { to: '#cart li:last-child', className: 'ui-effects-transfer' },function(){
							$('#cart li:last-child').css('visibility','visible');
							
							$('#total_price').text(total_price.toFixed(2));
							
							$.post('/ajax/cart', { product_id: pr_id });
							
						});
												
					}
				}
			}
		});
	});
});