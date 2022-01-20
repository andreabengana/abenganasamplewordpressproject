jQuery(function(){

	jQuery('#landing-page').append( '<span class="load-more"></span>' );
	var button = jQuery('#landing-page .load-more');
	var page = 2;
	var loading = false;
	var scrollHandling = {
	    allow: true,
	    reallow: function() {
	        scrollHandling.allow = true;
	    },
	    delay: 400 //(milliseconds) adjust to the highest acceptable value
	};

	jQuery(window).scroll(function(){
		if( ! loading && scrollHandling.allow ) {
			scrollHandling.allow = false;
			setTimeout(scrollHandling.reallow, scrollHandling.delay);
			var offset = jQuery(button).offset().top - jQuery(window).scrollTop();
			if( 2000 > offset ) {
				loading = true;
				var data = {
					action: 'filter_projects',
					page: page,
					query: beloadmore.query,
				};
				jQuery.post(beloadmore.url, data, function(res) {
					if( res.success) {
						jQuery('#landing-page').append( res.data );
						jQuery('#landing-page').append( button );
						page = page + 1;
						loading = false;
					} else {
						console.log(res);
					}
				}).fail(function(xhr, textStatus, e) {
					console.log(xhr.responseText);
				});

			}
		}
	});
});