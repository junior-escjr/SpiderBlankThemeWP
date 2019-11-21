(function( $ ){

	var funcoes = {
		init: function(){
			this.menuMobile();
		},

		menuMobile: function(){
	        $('.hamburguer').on('click', function(){
	            $('html').toggleClass('show-menu');
	        });

	        $('html, body').on('click', function (e) {
	            if (e.target == document.documentElement) {
	                $('html').removeClass('show-menu');
	            }
	        });

	        $('.btn-close-menu').on('click', 'a', function (e) {
	            $('html').removeClass('show-menu');
	        });
	    },
	}

	funcoes.init();
	
}( jQuery ))