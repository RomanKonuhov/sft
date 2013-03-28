var Global = {
    baseURL: '/frontend_dev.php'
};

var Collection = Collection || {};
var Model = Model || {};
var App = App || {};


$(document).ready(function() {

Model.page = Backbone.Model.extend({
    url: Global.baseURL + '/page'
//    url: function() {
//        if (this.isNew()) {
//            return '/block';
//        } else {
//            return '/block/'+this.id;
//        }
//    },
});



Model.block = Backbone.Model.extend({
    url: function() {
        if (this.get('item_id')) {
            return Global.baseURL + '/block/'+this.id+'/view/'+this.get('item_id');
        }
        return Global.baseURL + '/block/'+this.id;
    },
    defaults: {
        css: '',
        content: '',
        template: ''
    }

});



Collection.block = Backbone.Collection.extend({
    url: Global.baseURL + '/block',
    model: Model.block,

    initialize: function(models, options) {
        this.options = options;
        this.url = Global.baseURL + '/block/'+this.options.blockId;
    },

    comparator: function(model) {
        return model.get('header');
    }
});


Collection.page = Backbone.Collection.extend({
    url: function() {
        return Global.baseURL + '/'+this.models[0].get('page_name');
    },
    model: Model.block,

    comparator: function(model) {
        return model.get('parent_id');
    }

});


var Router = Backbone.Router.extend({
    lastPageName: '',
    view: {},
    routes: {
        //"" : "page",
        //":name": "page",
        ":name/block/:block_id/view/:id" : "page"
    },

    initialize: function() {
        _.bindAll(this);
        this.bind('all', this.render);
    },

    render: function() {
        var routeStroke = arguments[0],
            view = routeStroke.split(':')[1],
            options = {};
        if (arguments.length < 3) {
            options['page_name'] = arguments[1] ? arguments[1] : 'index';
        } else {
            options = {
                page_name: arguments[1],
                block_id: parseInt(arguments[2], 10),
                item_id: parseInt(arguments[3], 10)
            };
        }
        if (!_.isUndefined(ViewCollection[view])) {
            if (this.lastPageName == options['page_name']) {
                console.info('old page')
                this.view.options = options;
                this.view.update();
                //this.view.render();
            } else {
                console.info('new page')
                this.view = new ViewCollection[view](options);
                this.lastPageName = options['page_name'];
            }
        } else {
            console.log('ROUTER ERROR:', arguments);
        }
    },

    viewPage: function(name) {
        if (!name) name = 'index';
        var collection = new Collection.page({name: name});
        var blocks = new ViewCollection.page({collection: collection});
        $('body').html(blocks.render().el);
    },
    blockView: function (block_id, id) { alert(block_id+':'+id) }
});


App.router = new Router();
Backbone.history.start();
});

