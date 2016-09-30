/*global Backbone */
var app = app || {};

(function () {
	'use strict';
	
	
	app.Archive = Backbone.Collection.extend({
		model: app.Post,
		pagecounter:1,
		category:'',
		search_term:'',
		search:function(term){
			this.category = '';
			this.search_term = term;
			//this.fetch();
		},
		//url: '/backbone/wordpress/wp-json/posts?filter[posts_per_page]=16&page=1',
		url: function(){
			//var url = '/backbone/wordpress/wp-json/posts?filter[posts_per_page]=16&page='+this.pagecounter;
			var url = '/backbone/wordpress/wp-json/posts?page='+this.pagecounter;
			if(this.category){
				 url = url + '&filter[category_name]=' + this.category;
			} else if (this.search_term){
				url = '/backbone/wordpress/wp-json/posts?filter[s]='+this.search_term;
			} else {
				url = '/backbone/wordpress/wp-json/posts?page='+this.pagecounter;
			}
			

			
			this.pagecounter++;

			return url;
		},
		
		parse: function (response) {
		
			function formattedDate(date) {
				
				var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun","Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
				var d = new Date(date || Date.now()),
			        month = '' + monthNames[(d.getMonth())],
			        day = '' + d.getDate(),
			        year = d.getFullYear();
			
			    if (month.length < 2) month = '0' + month;
			    //if (day.length < 2) day = '0' + day;
			
			    return [day, month, year].join(' ');
			}
			
			for(var i = 0; i<response.length; i++){
				var entry = response[i];
				
				var categories = new Array();
				//var category_links = new Array();
				
				for (var j = 0 ; j < entry.terms.category.length; j++ ){
					var object = new Object();
					object.id = entry.terms.category[j].ID;
					object.name = entry.terms.category[j].name;
					object.link = entry.terms.category[j].link;
					categories.push(object);
										
				}
				
				var post = new app.Post();
				console.log(entry.featured_image.source);
				if(typeof entry.featured_image.source !== "undefined"){
					
					//loop through categories
					post.set({
				        id: entry.ID,
				        title: entry.ID+'. '+ entry.title,
				        content:entry.content,
				        thumbnail:entry.featured_image.source,
				        href:entry.link,
 				        date:formattedDate(new Date(entry.date)),
				        categories:categories	
				    });
				}
			    
			    this.add(post);
			    
			}
			//dispatch event
			app.event_bus.trigger('models_parsed', this.models);
			
		},
		
		
		/*
		

		initialize: function(models, options) {
			
		   this.counter = 0; 
		   
		   //listen to the event bus
		   app.event_bus.on('data_loaded', this.onDataLoaded, this);
		   	
     	   //console.log('Collections');
     	   
	 	},
	 	
	 	addItem: function(){
	      this.counter++;
	      var post = new app.Post();
	      post.set({
	        id: this.counter, 
	        content: 'This content = ' + this.counter, 
	        title: 'This title = ' + this.counter, 
	      });
	      this.collection.add(item);
	    },
	    
		onDataLoaded : function(data) {
			console.log(data);
		},
		*/
	 });
	 

	//app.archive = new Archive();
})(jQuery);