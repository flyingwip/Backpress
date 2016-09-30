/*global Backbone, jQuery, _, wp */
var app = app || {};

(function ($) {
	'use strict';

	app.PostView = Backbone.View.extend({

		tagName : 'div',

		className : 'masonry__item',
		
		//template : _.template("<strong><%= id %></strong> <%= title %> - <%= content %>"),
		template : _.template($('#post-template').html()),
		
		
		
		
		render : function () {
			//console.log( this.el );
			
			//$(this.el).html( this.model.get('title'));
			//return this;			
			//$('.masonry').append("<div class='masonry__item'> "+ item.get("title") +"</div>");
			
			this.id = 'post-' + this.model.get('id');
			this.$el.html( this.template( this.model.toJSON() ) );
			return this;
			
		}

	});
})(jQuery);