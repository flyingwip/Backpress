//jQuery(document).ready(function($) {
  
  
  
  
//});


/*global jQuery */
var app = app || {};

jQuery(function () {
	'use strict';

	// Put this where ever it makes sense for your application, possibly
	// a global, possible something your your app's global namespace, ...
	app.event_bus = _({}).extend(Backbone.Events);
	app.event_bus.on('app_ready', onAppready, this);
	
	//first the router
	app.router = new app.Router();
	
	app.reload = false ;
	
	
	new app.CoreView();
	
	//console.log( 'go', event_bus);
	
	
	Backbone.history.start( {
		pushState: false,
		silent: false
	} );
	
	
	function onAppready(){
	
		app.$masonryContainer = $('.masonry');

		  app.$masonryContainer.imagesLoaded(function() {
		  
		      if(!app.reload){
				  var $grid = app.$masonryContainer.masonry({
				      columnWidth: '.masonry__column',
				      gutter: '.masonry__gutter',
				      itemSelector: '.masonry__item',
				      isAnimated:true,
				      isAnimatedFromBottom:true
				      
				  });
				  app.reload = true ;
			  } else {
				  
				app.$masonryContainer.masonry('layout');  
			  }		
			  
			  
			  app.scrollview = new app.ScrollView();
			  //
			  //app.$masonryContainer.masonry('reloadItems');
			  //setTimeout(function(  ){  console.log('time out'); }, 3000);
			  

			  /*	
			  var $boxes = $('<div class="box"/><div class="box"/><div class="box"/>');
			  app.$masonryContainer.append( $boxes ).masonry( 'appended', $boxes );
		  
			  app.$masonryContainer.infinitescroll({
				  itemSelector : '.box',     // selector for all items you'll retrieve
				  loading: {
				      finishedMsg: 'No more pages to load.',
				      img: 'http://i.imgur.com/6RMhx.gif',
				      msgText: "<em>Loading the next set of posts...</em>"
				    },
					errorCallback: function() { 
						///$('#infscr-loading').animate({opacity: 0.8},2000).fadeOut('normal'); 
						alert('error');
					}
					},
				// call masonry as a callback
				    function( newElements ) {
						console.log(newElements);
						//var $newElems = $( newElements );
						//$container.masonry( 'appended', $newElems );
					}
				);      
				*/
	

		  });
		  
		  
		  //catch recommend click
		  $(".recommend").click(function() {
			  console.log(this.id);
			  //id 
			  
			  
		  });
		  
		  //console.log('hier komt de bind');			  
		  

	}
	
	$("#btn_search").click(function() {
		  		
	//app.archive.reset();	
	$('.masonry').masonry( 'remove', $('.masonry').find('.masonry__item') );		  
		//Set the search filter
		//reset the pagecounter
		app.archive.search($("#s").val()); 
		app.archive.fetch();
	});

	

	

});

