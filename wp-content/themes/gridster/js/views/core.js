/*global Backbone, jQuery, _ */
var app = app || {};

(function ($) {
	'use strict';

	app.CoreView = Backbone.View.extend({
		el : function() {
			return document.getElementById( 'container' );
		},

		currentViews: {},

		events : {
			
		},

		initialize : function() {
			
			
			//let us see if we can get a listview
			var list = new app.List();
			
			//initilize the  router
			//this.listenTo( app.archive, 'reset', this.addAll );
			//app.event_bus.on('data_loaded', this.onDataLoaded, this);
	    },

		onDataLoaded : function(data) {
			console.log('onCustomEvent Handler',data);
		},

		

		addAll : function() {
		},

		addOne: function ( post ) {
		}
	});
})(jQuery);