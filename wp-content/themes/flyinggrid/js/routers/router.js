/*global Backbone */
var app = app || {};

(function () {
	'use strict';

	var Router = Backbone.Router.extend({
		initialize: function (el) {
	        this.el = el;
	        console.log('initialize',this.el);
	
	        // Single page template
	        //this.pageView = new view({template: '#page'});
	
	        // 404 template
	        //this.notFoundView = new view({template: '#notfound'});
	    },
    // Define front-end routes
    routes: {
        '':
            function () {
            },

        '#posts':
            function () {
		        console.log('routes','posts');            
            },

        'pages':
            function () {
		        console.log('routes','pages');            
            },

		'*else':
            function () {
		        console.log('routes','else');
            }
    },
	    
	
	});
	
	app.router = new Router(document.getElementById( 'container' ));
	Backbone.history.start( {
		pushState: true,
		silent: true
	} );
})();