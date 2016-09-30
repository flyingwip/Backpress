var ApplicationRouter = Backbone.Router.extend({
    initialize: function (el) {
        this.el = el;

        // Single page template
        this.pageView = new view({template: '#page'});

        // 404 template
        this.notFoundView = new view({template: '#notfound'});
    },

    // Define front-end routes
    routes: {
        '':
            function () {
                this.setActiveEntry('#bugs-life');
                this.getPageContent(2, this.pageView);
            },

        'bugs-life':
            function () {
                this.setActiveEntry('#bugs-life');
                this.getPageContent(2, this.pageView);
            },

        'inside-out':
            function () {
                this.setActiveEntry('#inside-out');
                this.getPageContent(6, this.pageView);
            },

        'kungfu-panda':
            function () {
                this.setActiveEntry('#kungfu-panda');
                this.getPageContent(4, this.pageView);
            },

        'toy-story':
            function () {
                this.setActiveEntry('#toy-story');
                this.getPageContent(8, this.pageView);
            },
            
        '*else':
            function () {
                this.switchView(this.notFoundView);
            }
    },

    currentView: null,

    // Switch out views
    switchView: function (view, data) {

        if (this.currentView) {
            this.currentView.remove();
        }

        this.el.html(view.el);
        view.render(data);
        this.currentView = view;
    },

    // Handle active navigation
    setActiveEntry: function (url) {
        $('nav li').css({'font-weight': 'normal'});
        $("nav li a[href='" + url + "']").parents('li').css({'font-weight': 'bold'});
    },

    // Fetch the actual content from WP API
    getPageContent: function (pageID, view) {
        var self = this;

        page.fetch({
            data: $.param({ type: 'page', 'filter[page_id]': pageID }),
            processData: true,
            success: function (result) {
                var page = result.toJSON();

                self.switchView(view, page[0]);
            }
        })
    }
});

// Render views
var view = Backbone.View.extend({
    initialize: function (options) {
        this.template = options.template;
    },

    render: function (data) {
        var content = _.template($(this.template).html()),
            vars = {data: data},
            html = content(vars);

        $(this.el).html(html);
    }
});

// Pages collection
var pageCollection = Backbone.Collection.extend({
    url: '/backbone/wordpress/wp-json/posts'
});

var page = new pageCollection();

// Kick off router
var router = new ApplicationRouter($('#content'));


// Use history API
Backbone.history.start();