import flatpickr from "flatpickr/dist/flatpickr";
import { type } from "jquery";

var dashboard = {
	GLOBAL: {},

	CONSTS: {
		
	},

	SELECTORS: {
		modal_destination: 	"main .modal-destination",
		modal_explore: 		"main .modal-explore",
		modal_tripdate:		"main .modal-tripdate",
        modal_button:       ".modal-close",
        button_desti:       ".button-destination",
		button_explore:		".button-explore",
		interest_tag:		".interest-tag",
		button_tripdate:	".button-tripdate",
		tripdate_group:		"#tripdate-group",
		tripdate_group_top:	"#tripdate-group-top",
		starttimepicker:	"#start-time-picker",
		endtimepicker:		"#end-time-picker",
		timeinput:			"#time-input",
		promo_slide:		".promo-slide",
		promo_country:		".promo-country",
		nav_button:			".nav-button",
		yeartest: 			".year-test"
	},

	init: function () {
		dashboard.showModalDestination();
        dashboard.hideModalDestination();
		dashboard.showModalExplore();
        dashboard.hideModalExplore();
		dashboard.activeChoose();
		dashboard.showModalTripDate();
		dashboard.hideModalTripDate();
		dashboard.tripdatepicker();
		dashboard.tripdatepickertop();
		dashboard.starttimepicker();
		dashboard.endtimepicker();
		dashboard.promoslide();
		dashboard.promocountry();
		dashboard.changefoot();
		dashboard.year_change();
	},

	// Destination
	showModalDestination: function () {
		$(dashboard.SELECTORS.button_desti).on("click", function (event) {
			event.stopPropagation();
            $(dashboard.SELECTORS.modal_destination).show();
		});
	},

    hideModalDestination: function() {
        $(dashboard.SELECTORS.modal_button).on("click", function (event) {
            event.stopPropagation();
            $(dashboard.SELECTORS.modal_destination).hide();
        })
    },

	// Explore
	showModalExplore: function () {
		$(dashboard.SELECTORS.button_explore).on("click", function (event) {
			event.stopPropagation();
            $(dashboard.SELECTORS.modal_explore).show();
		});
	},

    hideModalExplore: function() {
        $(dashboard.SELECTORS.modal_button).on("click", function (event) {
            event.stopPropagation();
            $(dashboard.SELECTORS.modal_explore).hide();
        })
    },

	activeChoose: function() {
		$(dashboard.SELECTORS.interest_tag).on('click', function(event) {
			event.stopPropagation();
			if($(this).hasClass("active")) {
				$(this).removeClass("active");
			} else {
				$(this).addClass("active");
			}
		})
	},

	// Trip Date
	showModalTripDate: function () {
		$(dashboard.SELECTORS.button_tripdate).on("click", function (event) {
			event.stopPropagation();
            $(dashboard.SELECTORS.modal_tripdate).show();
		});
	},

    hideModalTripDate: function() {
        $(dashboard.SELECTORS.modal_button).on("click", function (event) {
            event.stopPropagation();
            $(dashboard.SELECTORS.modal_tripdate).hide();
        })
    },

	tripdatepickertop: function(){
		$(dashboard.SELECTORS.tripdate_group_top).datetimepicker({
			inline:true,
			dayOfWeekStart: 1,
			calendar: false,
			timepicker: false
		})
	},

	tripdatepicker: function() {
		$(dashboard.SELECTORS.tripdate_group).flatpickr({
			inline:true,
			locale: {
				firstDayOfWeek: 1,				
			},
			mode: "range"
		});
	},

	starttimepicker: function() {
		$(dashboard.SELECTORS.starttimepicker).flatpickr({
			enableTime: true,
			noCalendar: true,
			dateFormat: "H:i",
			time_24hr: true
		})
	},

	endtimepicker: function() {
		$(dashboard.SELECTORS.endtimepicker).flatpickr({
			enableTime: true,
			noCalendar: true,
			dateFormat: "H:i",
			time_24hr: true
		})
	},

	promoslide : function() {
		$(dashboard.SELECTORS.promo_slide).slick({
			speed: 300,
			slidesToShow: 1,
			centerMode: false,
			variableWidth: true,
			prevArrow: false,
    		nextArrow: false,
			infinite: false
		});
	},

	promocountry : function() {
		$(dashboard.SELECTORS.promo_country).slick({
			speed: 300,
			slidesToShow: 2,
			centerMode: false,
			variableWidth: true,
			prevArrow: false,
    		nextArrow: false,
			infinite: false
		})
	},

	changefoot: function()  {
		$(dashboard.SELECTORS.nav_button).on("click", function() {
			if(!$(this).hasClass('active-footer')) {
				$(dashboard.SELECTORS.nav_button).removeClass('active-footer');
				$(this).addClass('active-footer');
			}
		})
	},

	year_change: function() {
		$("div.xdsoft_datetimepicker.xdsoft_noselect.xdsoft_.xdsoft_inline").on("xchange.xdsoft", function() {
			setTimeout(() => {
				let year = $(".xdsoft_datepicker.active .xdsoft_monthpicker .xdsoft_year .xdsoft_select div .xdsoft_current").text()
				let month = $(".xdsoft_datepicker.active .xdsoft_monthpicker .xdsoft_month .xdsoft_select div .xdsoft_current").attr("data-value")
				let calendar = flatpickr(document.querySelector("#tripdate-group"), {
					inline:true,
					locale: {
						firstDayOfWeek: 1				
					},
					mode: "range"
				});
				calendar.jumpToDate(new Date(year), true)
				calendar.changeMonth(month, false)

			}, 10);
		})
	},

	alt: function (id) {
		return `[alt = "${id}"]`;
	}
};

$(function () {
	dashboard.init();
});