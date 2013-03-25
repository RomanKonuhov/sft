var Global = {
    baseURL: '/frontend_dev.php'
};

var Collection = Collection || {};
var Model = Model || {};
var App = App || {};


$(document).ready(function() {
Model.page = Backbone.Model.extend({
    url: function() {
        return Global.baseURL + '/block/'+this.id
    }
});

Model.block = Backbone.Model.extend({
    urlRoot: Global.baseURL + '/block',
//    url: function() {
//        if (this.isNew()) {
//            return '/block';
//        } else {
//            return '/block/'+this.id;
//        }
//    },
    defaults: {
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
    model: Model.page,

    comparator: function(model) {
        return model.get('parent_id');
    }

});


var Router = Backbone.Router.extend({
    routes: {
        "" : "page",
        ":name": "page",
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
            options = {page_name: arguments[1], block_id: arguments[2], item_id: arguments[3]};
        }
        if (!_.isUndefined(ViewCollection[view])) {
            new ViewCollection[view](options);
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

