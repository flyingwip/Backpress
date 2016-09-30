/*global Backbone, jQuery, _, wp */
var app = app || {};

(function ($) {
	'use strict';

	app.List = Backbone.View.extend({
		el : $('.masonry__item'),
		
		//todo events
		
		initialize: function(){
			_.bindAll(this, 'render', 'addItem', 'appendItem'); 
			
			//listen to models parsed event
			app.event_bus.on('models_parsed', this.onModelsParsed, this);
 
			
			
			
		},
		
		//parse post models into views
		onModelsParsed : function(data) {
			for(var i = 0; i < data.length; i++){
				var d = data[i];
				this.appendItem(d);
			}
			
			
			app.event_bus.trigger('app_ready');

			this.is_rendered = true;
			
		},
		
		
		render: function(){
			var self = this;
		},
		
		addItem: function(){
		},
		
		is_rendered : false,
		appendItem: function(item){
			//console.log('yo'); 
			var postView = new app.PostView({
		        model: item
		    });
		    
		    if(!this.is_rendered){
				$('.masonry').append(postView.render().el);    
		    } else {
				var $boxes = postView.render().el;
				$('.masonry').append( $boxes ).masonry( 'appended', $boxes );
		    }
			
			
		}
		
		
		
	});
})(jQuery);