jQuery(document).ready(function($) {

	App = {
		initLibs: function() {

			if ($('#home-slider').length) {
				$('#home-slider').lightSlider({
					item:1,
					loop:true,
					auto:true,
					pauseOnHover:true,
					slideMargin:0,
					speed:1200,
					pause:4000
				});
			} 
		},

		init: function() {
			this.initLibs();
		}
	};

	App.init();
});
