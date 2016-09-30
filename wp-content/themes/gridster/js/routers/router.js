/*global Backbone */
var app = app || {};

(function () {
	'use strict';

	app.Router = Backbone.Router.extend({
	
	    // Define front-end routes for menu and also categories
	    
	    routes: {
	        '':
	            function () {

					app.archive.pagecounter = 1;
					app.archive.fetch();
	            },
			//categories	
	         "category/:name": 
	            function (name) {
					 //remove all items
	            	$('.masonry').masonry( 'remove', $('.masonry').find('.masonry__item') );
	            	//$('.masonry').masonry('destroy');
	            	//reset the pagecounter
	            	app.archive.pagecounter = 1;
	            	app.archive.category = name; 
	            	
	            	app.archive.fetch();
	            	//this.getPosts(1);
	            	//set the url in collection 
	            	//alert('catgory = ' + name );
	            	//console.log('else');
	            }
	            
	    }
	    
	    	
	
	});
	
	
	app.archive = new app.Archive();
})();