var View = View || {};
var ViewCollection = ViewCollection || {};

View.contextmenu = Backbone.View.extend({
    id: 'contextmenu',
    block: {},
    blockEvent: null,
    event: {
        'click #add-block': 'addBlock'
    },

    initialize: function() {
        _.bindAll(this);
        this.blockEvent = this.options.event;
        this.block = this.options.block;
        this.remove();
        $('body').click(this.remove);
    },

    remove: function() {
        $('#'+this.id).remove();
    },

    getHtml: function() {
        return (
            '<ul>'+
                '<li id="add-block">Добавить блок</li>'+
                '<li id="edit-block">Редактировать блок</li>'+
                '<li id="rem-block">Удалить блок</li>'+
            '</ul>'
        );
    },

    render: function() {
        var self = this;
        $(this.el).html(this.getHtml());
        //$('body').append(this.el);
        $(this.el).css('left', this.blockEvent.pageX+'px');
        $(this.el).css('top', this.blockEvent.pageY+'px');
        $(this.el).find('#add-block').bind('click', self.addBlock);
        $(this.el).find('#rem-block').bind('click', self.remBlock);
        return this;
    },

    addBlock: function(e) {
        console.log(e)
    },

    remBlock: function(e) {
        this.block.destroy();
    }
});

View.blockText = Backbone.View.extend({
    className: 'text-block',
    block: {}, // main block data (table 'block')

    initialize: function() {
        _.bindAll(this);

        var self = this;

        this.block = this.options.block;
        // save pointer on the relative model
        this.block['view'] = this;

        this.content = new Model.block({id: this.block.id});
        this.content.fetch();

        this.content.bind('change', this.render);
        this.content.bind('remove', this.unrender);
        //this.model.bind('add', this.refresh);

        // set CSS properties
        _.each(this.block.get('css'), function(val, key) {
            self.$el.css(key, val);
        }, this);

        $('body').contextmenu(this.showMenu);
    },

    showMenu: function(e) {
        var menu = new View.contextmenu({block: this.block, event: e});
        $('body').append(menu.render().el);
        return false;
    },

    render: function() {
        var self = this;
        var templateHtml = _.template(this.block.get('template'), {content: this.content.get('content')});
        var parent_block = this.block.collection.where({id: this.block.get('parent_id')})[0];

        $(this.el).append(templateHtml);

        if (parent_block) {
            $(parent_block.view.el).append(this.el);
        }
        return this;
    },

    //refresh: function() {},

    unrender: function() {
        $(this.el).remove();
    }
});


View.blockTextListShow = Backbone.View.extend({
    className: 'list-item',
    block: {},

    initialize: function() {
        _.bindAll();
        this.block = this.options.block;
        this.content = this.model;
        this.content.bind('change', this.render);
        this.content.bind('remove', this.unrender);
    },

    render: function() {
        var templateHthml = _.template(this.block.get('template'), this.content.toJSON());
        $(this.el).html(templateHthml);
        return this;
    },

    unrender: function() {
        $(this.el).remove();
    }
});


View.blockTextList = Backbone.View.extend({
    className: 'list-item',
    block: {},
//    events: {
//        "click h3 a" : 'view'
//    },

    initialize: function() {
        _.bindAll(this);
        this.block = this.options.block;
        this.content = this.model;
        this.content.bind('change', this.render);
        this.content.bind('remove', this.unrender);
    },

    render: function() {
        var data = this.content.toJSON();
        data.content = data.description;
        var templateHtml = _.template(this.block.get('template'), data);
        $(this.el).append(templateHtml);

        return this;
    },

    unrender: function() {
        $(this.el).remove();
    },

    view: function() {
        var showView = new View.blockTextListShow({model: this.content, block: this.block});
        this.block.view.$el.html(showView.render().el);
        //router.navigate('#index/block/'+this.content.get('block_id')+'/view/'+this.content.get('id'), {trigger:false});
//        var templateHtml = _.template(this.block.get('template'), this.content.toJSON());
//        $(this.el).html(templateHtml);
    }
});


ViewCollection.blockTextList = Backbone.View.extend({
    className: 'text-list-block',
    block: {}, // main block data (table 'block')
    uri_parameters: {},

    initialize: function() {
        _.bindAll(this);

        var self = this;

        this.uri_parameters = this.options.uri_parameters;

        this.block = this.options.block;
        // save pointer on the relative model
        this.block['view'] = this;

        this.content = new Collection.block(null, {blockId: this.block.id});
        this.content.fetch();

        this.content.bind('add', this.appendItem);
        this.content.bind('reset', this.render);

        // set CSS properties
        _.each(this.block.get('css'), function(val, key) {
            self.$el.css(key, val);
        }, this);
    },

    render: function() {
        var self = this;
        var parent_block = this.block.collection.where({id: this.block.get('parent_id')})[0];

        if (this.uri_parameters && this.uri_parameters.item_id) {
            var item = this.content.where({id: this.uri_parameters.item_id})[0];
            this.viewItem(item);
        } else {
            _.each(this.content.models, function(model) {
                self.appendItem(model);
            }, this);
        }

        if (parent_block) {
            $(parent_block.view.el).append(this.el);
        }

        return this;
    },

    appendItem: function(model) {
        var item = new View.blockTextList({model: model, block: this.block});
        $(this.el).append(item.render().el);
    },

    viewItem: function(model) {
        var item = new View.blockTextListShow({model: model, block: this.block});
        $(this.el).append(item.render().el);
    }
});


View.blockMedia = Backbone.View.extend({
    className: 'media-item',
    block: {},

    initialize: function() {
        _.bindAll(this);
        this.block = this.options.block;

        this.content = this.model;
        this.content.bind('change', this.render);
        this.content.bind('remove', this.unrender);
    },

    render: function() {
        var templateHtml = _.template(this.block.get('template'), this.content.toJSON());
        $(this.el).append(templateHtml);

        return this;
    },

    unrender: function() {
        $(this.el).remove();
    }
});


ViewCollection.blockMedia = Backbone.View.extend({
    className: 'media-block',
    block: {}, // main block data (table 'block')

    initialize: function() {
        _.bindAll(this);

        var self = this;

        this.block = this.options.block;
        // save pointer on the relative model
        this.block['view'] = this;

        this.content = new Collection.block(null, {blockId: this.block.id});
        this.content.fetch();

        this.content.bind('add', this.appendItem);
        this.content.bind('reset', this.render);

        // set CSS properties
        _.each(this.block.get('css'), function(val, key) {
            self.$el.css(key, val);
        }, this);
    },

    render: function() {
        var self = this;
        var parent_block = this.block.collection.where({id: this.block.get('parent_id')})[0];

        _.each(this.content.models, function(model) {
            self.appendItem(model, this.block);
        }, this);

        if (parent_block) {
            $(parent_block.view.el).append(this.el);
        }

        return this;
    },

    appendItem: function(model, block) {
        var item = new View.blockMedia({model: model, block: block});
        $(this.el).append(item.render().el);
    }
});



/*
View.page = Backbone.View.extend({
    render: function() {
        var block = this.model.get('block');
        var content = this.model.get('content');
        var template = this.model.get('template');
        _.each(content, function(_content) {
            var templateHtml = _.template(template, _content);
            $(this.el).append(templateHtml);
        })
        //console.log(templateHtml)
        return this;
    }
});
*/


ViewCollection.page = Backbone.View.extend({
    className: 'content',

    initialize: function() {
        _.bindAll(this);
        this.collection = new Collection.page({page_name: this.options.page_name});
        this.collection.fetch();
        this.collection.bind('add', this.appendItem);
        this.collection.bind('reset', this.render);
    },

    render: function() {
        //console.log(this.collection)
        var self = this;
        _.each(this.collection.models, function(model) {
            self.appendItem(model);
        }, this);

        $('body').html(this.el);

        return this;
    },

    appendItem: function(model) {
//        var block = new blockContainerView({model: model});
        var block = null;
        switch (model.get('type')) {
            case 'text' : block = new View.blockText({block: model, uri_parameters: this.options}); break;
            case 'text_list' : block = new ViewCollection.blockTextList({block: model, uri_parameters: this.options}); break;
            case 'media' : block = new ViewCollection.blockMedia({block: model, uri_parameters: this.options}); break;
        }
        if (block != null) {
            if (model.get('css').float && model.get('css').float == 'none') {
                $(this.el).append($('<div>').addClass('clear'));
            }
            $(this.el).append(block.el);
        }
    }

});