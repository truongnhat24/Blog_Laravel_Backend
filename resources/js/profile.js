var dashboard = {
	GLOBAL: {},

	CONSTS: {
		
	},

	SELECTORS: {
		image_slide:		".image-slide",
        btncontainer:       ".btn-slide-container"
	},

	init: function () {
		dashboard.imageslide();
	},

	imageslide : function() {
		$(dashboard.SELECTORS.image_slide).slick({
			speed: 300,
			slidesToShow: 1,
			centerMode: false,
			variableWidth: true,
			prevArrow: false,
    		nextArrow: false,
			infinite: false,
            dots:true,
            appendDots: $(dashboard.SELECTORS.btncontainer),
            dotsClass: "slick-dots"
		});
	},
};

$(function () {
	dashboard.init();
});