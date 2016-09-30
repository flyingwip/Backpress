<?php

Header("content-type: application/x-javascript");
?>

/*global Backbone */
var app = app || {};

(function () {
	'use strict';

	app.Router = Backbone.Router.extend({
	
	    // Define front-end routes for menu and also categories
	    
	    	        
	    routes: {
	        '':
	            function () {
					this.getPosts(1);
	            },
	
	        'home':
	            function () {
	            	console.log('home');
	            	this.getPosts(1);            
	            },
	
	        'pages':
	            function () {
	            	console.log('pages');
	            	this.getPosts(1);                        
	            },
	
	        '*else':
	            function () {
	            	console.log('else');
	            }
	    },
	    
	    
	    // Fetch the actual content from WP API
	    getPosts: function (pageID) {

			//data: $.param({ type: 'post', 'filter[page_id]': pageID }),
			//data: $.param({ type: 'post', 'filter[page_id]': pageID }),
			
			//app.archive.url = '/backbone/wordpress/wp-json/posts?filter[posts_per_page]=16&page='+this.pagecounter;
			//this.pagecounter++;
	        //console.log( 'do the call',  this.pagecounter);
	        //app.archive.url(this.pagecounter);

	        app.archive.fetch();
	        
	    }
	    
	    	
	
	});
	
	
	// Pages collection
	/*
	var pageCollection = Backbone.Collection.extend({
		
	    url: '/backbone/wordpress/wp-json/posts'
	    
	    
	});
	*/
	
	
	//var page = new pageCollection();
	app.archive = new app.Archive();
	//console.log('haha',page);
	

//	app.router = new app.Router(document.getElementById('container'));
// Use history API
//Backbone.history.start();
/*
	Backbone.history.start( {
		pushState: false,
		silent: false
	} );
*/	
})();