/*global Backbone, jQuery, _ */
var app = app || {};

(function ($) {
	'use strict';
	
	app.ScrollView = Backbone.View.extend({
	
		el : function() {
			return $('.masonry');
		},
	
		initialize: function (opts) {

				var self = this;				

			    var infinityScrollHandler = function (e) {
	                //is position of scroll near by end?

	
	                if (($(window).scrollTop() + $(window).height()) > ($(document).height() - $(window).height())) {
	                	
						self.addMoreItems();
	                    //app.router.getPageContent();
	                }
	            };
	
	            //start of scroll event for touch devices
	            if (document.addEventListener) {
	                document.addEventListener("touchmove", infinityScrollHandler, false);
	                document.addEventListener("scroll", infinityScrollHandler, false);
	            }
		
		},
		gettingMore: false, //lock if it's rendering now 
		addMoreItems : function (onDone) {
					var self = this;
			        if (this.gettingMore === true) {
			            if (onDone) {
						onDone.call(self, true);
			            }
			            return;
			        } else {
			            this.gettingMore = true;
					}
					//console.log('you are unique');
			        //call the router
					app.archive.fetch();
						

		
		}
	
	
	
	});
})(jQuery);