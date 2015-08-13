
xv_mariosantacreu = (typeof(xv_mariosantacreu) === 'undefined')? {} : xv_mariosantacreu;
xv_mariosantacreu.languages = ['EN', 'ES', 'CA'];

(function($) {
	$(document).ready(function() {
		if(typeof xv_mariosantacreu.basepath === 'undefined') {
			return;
		}
		
		$('.nav-links li a').each(function() { 
			var text = $(this).text()
			
			if($.inArray(text, xv_mariosantacreu.languages) > -1) {
				
				$(this).closest('li').addClass('li-lang');
				
				var path = xv_mariosantacreu.basepath;
				
				path = path.replace('__LANG__', text);
				
				var html = '<img class="img-lang" src="' + path + '" alt="' + text + '" title="' + text + '">';
				
				$(this).html(html);
			}
		});
	});

})(jQuery);
