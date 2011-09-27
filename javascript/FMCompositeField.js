(function($) {
	$('.FMCompositeField').livequery(function(){
		var $trigger = $('.trigger', this);
		var $moreContent = $('.more-content', this);
		var $checkbox = $("input[type='checkbox']", this);
		
		if ($trigger.hasClass('open')) {
			$moreContent.css('display', 'block');
		}
		
		$trigger.click(function() {
			
			if ($moreContent.css('display') == 'block') {
				$trigger.removeClass('open');
				$checkbox.attr('checked', false);
			} else {
				$trigger.addClass('open');
				$checkbox.attr('checked', true);
			}
		
			$moreContent.slideToggle();
		});
		
	});
})(jQuery);