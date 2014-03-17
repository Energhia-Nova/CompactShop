$(document).ready(function(){
    
    $('#editor').wysiwyg();
	
	$('.categories ul').ewigkeit();
    
    $('#product').submit(function(){
        
        $('input[name="description"]').val($('#editor').html());
                
    });
	
	$('ul.ewigkeit-list').on('click','a',function(){
	
		$('input[name="subcategory"]').val($(this).text());
		
		// sub categories alias
		var sca = $(this).attr("href");
		
		sca = (sca[0]=="/") ? sca.substr(1) : sca;
		
		$('input[name="subcat_alias"]').val(sca);
	
	});
    
    $('.categories-list').on('click','a',function(){
        
        $(this).next('ul').toggle('slide');
        
        if ($(this).find('.arrow').text()=="+") {
            
            $(this).find('.arrow').text("-");
            
        } else {
            $(this).find('.arrow').text("+");
        }
        
        return false;
        
    });
    
    if ($('.categories-list ul.categories-list').length > 0 ) {
     
        $('ul.categories-list ul.categories-list').parent().find('.arrow:eq(0)').show();
               
    }
    
    $('.categories-list a').click(function(){
                
        $('input[name="subcategory"]').val($(this).text());
        
    });
    
    // Удаление категории
    $('.icon-remove').click(function(){
       
       var $this = $(this); 
       var del = $.trim($(this).parent().text());
       
       $.ajax({
          url: '/admin/Ajax.php',
          type: 'post',
          data: { category: del, func: 'del' },
          success: function(data){ 
            if (data) {
                $this.parent().remove();
            }            
          }
       });
        
    });

	// Выбор категории в admin/products/new-product.
	$('select[name="category"]').change(function(){
	
		// Установка aliasa, t.e. url категории.
		$('input[name="url"]').val($(this).val());
		
		// Занесем идентификатор категории в скрытый инпут
		$('input[name="category_id"').val($(this).find('option:selected').attr('data-id'));
	
	});
	
	/* Смена статуса заказа в админке */
	$('select[name="statuses"]').change(function(){
		
		var ordid = $('.ordid').text();
		
		$.post('/ajax/order', { ordid: ordid, status: $(this).val() });
			
	});
	
});