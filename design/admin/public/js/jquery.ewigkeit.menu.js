/*!
 * jQuery Ewigkeit Menu Plugin v1.0
 * https://github.com/...
 *
 * Copyright 2014 Bawyka Taras
 * Released under the MIT license
 */
(function($){
	
	$.fn.ewigkeit = function(){
		
		var ew = this; ew.addClass('ewigkeit-list');
				
		ew.find('ul').each(function(i){
			
			$(this).addClass('menu-item-'+i);
		
		});
			
		ew.find('ul').hide();
		
		if ($.cookie('opened')!=undefined && $.cookie('opened')!=''){
				
			var jOpen = $.cookie('opened').split(',');
			
			for (var i = 0; i<jOpen.length; i++){
			
				ew.find('.menu-item-'+jOpen[i]).addClass('open').show();
			}
		}
		
		ew.on('click','a',function(){
			
			if ($(this).next('ul').size()>0){
			
				$(this).next('ul').toggleClass('open').toggle('blind');
				
				var opened = new Array();
				
				$.each(ew.find('.open'),function(){
					
					opened.push(/(\d+)/i.exec($(this).attr("class"))[1]);
									
				});
				
				$.cookie('opened',opened.toString(),{ path: '/' });
												
				return false;
				
			}
			
			// $('input[name="subcategory"]').val($(this).text());
			
			// it's only for the admin categories menu
			return false;
			
		});
	
		return this;
	}

}(jQuery));