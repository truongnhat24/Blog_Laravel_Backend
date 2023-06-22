var payment = {
	GLOBAL: {},

	CONSTS: {
		
	},

	SELECTORS: {
        open_button:        ".pay-button",
		close_button:		".modal-close",
        payment_modal:      ".pay-modal"
	},

    open_pay_modal: function() {
        $(payment.SELECTORS.open_button).on("click", function() {
            $(payment.SELECTORS.payment_modal).css("display", "block")
        })
    },
    
    close_pay_modal: function(){
        $(payment.SELECTORS.close_button).on("click", function(){
            $(payment.SELECTORS.payment_modal).css("display", "none")
        })
    },

	init: function () {
		payment.open_pay_modal();
        payment.close_pay_modal();
	},

};

$(function () {
	payment.init();
});