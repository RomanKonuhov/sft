var View = View || {};
var ViewCollection = ViewCollection || {};
var Tools = Tools || {};
var Helper = Helper || {};


Tools.Form = Backbone.Model.extend({
    form: {},

    initialize: function() {
        _.bindAll(this);
        if (!this.form) {
            return this.form;
        }
        this.form = this.get('form');
    },

    getData: function() {
        var data = {},
            sd = this.form.serializeArray(); // sd - serialized data
        for (var i in sd) {
            data[sd[i]['name']] = sd[i]['value'];
        }
        return data;
    },

    getBareData: function() {
        var data = this.getData();
        var re = /\w+\[([\w\d]+)\]/,
            bareData = {};
        _.each(data, function(v, k) {
            var match = re.exec(k);
            k = match ? match[1] : k;
            bareData[k] = v;
        });
        return bareData;
    }
});


Helper.Error = {
    show: function(options) {
        var message = "Error occured";
        if (!_.isUndefined(options.message)) {
            message = options.message;
        }
        alert(message);
    }
};



View.modalWindow = Backbone.View.extend({
    className: 'modal-window',
    curtainId: 'curtain',
    template: '',
    cb: null,
    events: {
        'submit form' : 'saveModel'
    },

    initialize: function() {
        _.bindAll(this);
        this.template = this.options.template;
        this.cb = this.options.cb;
        this.removeAllModal();
        this.render();
    },

    removeAllModal: function() {
        $('.'+this.className).remove();
        $('#'+this.curtainId).remove();
    },

    render: function() {
        var curtain = $('<div>').attr('id', this.curtainId);
        $('body').append(curtain).append(this.el);
        $('#'+this.curtainId).click(this.removeAllModal);
        $(this.el).append(this.template);
    },

    saveModel: function() {
        if (_.isFunction(this.cb)) {
            var formData = new Tools.Form({form: $(this.el).find('form')}).getData();
            //console.log(formData)
            this.cb(formData);
        }
        return false;
    }
});



View.contextmenu = Backbone.View.extend({
    id: 'contextmenu',
    block: {},
    blockEvent: null,

    initialize: function() {
        _.bindAll(this);
        this.blockEvent = this.options.event;
        this.block = this.options.block;
        this.removeAllMenu();
        $('body').unbind();
        $('body').click(this.remove);
        this.render();
    },

    removeAllMenu: function() {
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
        $(this.el).css('left', this.blockEvent.pageX+'px');
        $(this.el).css('top', this.blockEvent.pageY+'px');
        $(this.el).find('#add-block').bind('click', self.addBlock);
        $(this.el).find('#edit-block').bind('click', self.editBlock);
        $(this.el).find('#rem-block').bind('click', self.remBlock);
        $('body').append(this.el);
        return this;
    },

    addBlock: function(e) {
        this.remove();
        new View.modalWindow({template: this.block.get('new_template'), cb: function() {alert('not implemented')}});
        //console.log(e, this.block.id)
    },

    editBlock: function(e) {
        this.remove();
        new View.modalWindow({template: this.block.get('edit_template'), cb: this.block.save});
        //console.log(e, this.block.id)
    },

    remBlock: function(e) {
        this.remove();
        if (confirm("Do you really want to delete block")) {
            this.block.view.$el.remove();
            this.block.destroy();
        }
    }
});



View.blockBase = Backbone.View.extend({
    className: '',
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



ViewCollection.blockBase = Backbone.View.extend({
    className: '',
    block: {}, // main block data (table 'block')

    initialize: function() {
        var self = this;

        _.bindAll(this);

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

        $(this.el).bind('contextmenu', this.showMenu);
    },

    showMenu: function(e) {
        new View.contextmenu({block: this.block, event: e});
        return false;
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

        // set CSS properties
        _.each(this.block.get('css'), function(val, key) {
            self.$el.css(key, val);
        }, this);

        $(this.el).bind('contextmenu', this.showMenu);
    },

    showMenu: function(e) {
        new View.contextmenu({block: this.block, event: e});
        return false;
    },

    render: function() {
        var templateHtml = _.template(this.block.get('template'), {content: this.content.get('content')});
        var parent_block = this.block.collection.where({id: this.block.get('parent_id')})[0];

        $(this.el).append(templateHtml);

        if (parent_block) {
            $(parent_block.view.el).append(this.el);
        }
        return this;
    },

    unrender: function() {
        $(this.el).remove();
    }
});



View.blockTextListShow = View.blockBase.extend({
    className: 'list-item'
});


View.blockTextList = View.blockBase.extend({
    className: 'list-item',

    render: function() {
        var data = this.content.toJSON();
        data.content = data.description;
        var templateHtml = _.template(this.block.get('template'), data);
        $(this.el).append(templateHtml);

        return this;
    },

    view: function() {
        var showView = new View.blockTextListShow({model: this.content, block: this.block});
        this.block.view.$el.html(showView.render().el);
        //router.navigate('#index/block/'+this.content.get('block_id')+'/view/'+this.content.get('id'), {trigger:false});
//        var templateHtml = _.template(this.block.get('template'), this.content.toJSON());
//        $(this.el).html(templateHtml);
    }
});


ViewCollection.blockTextList = ViewCollection.blockBase.extend({
    className: 'text-list-block',
    showContent: false,
    uri_parameters: {},

    initialize: function() {
        this.uri_parameters = this.options.uri_parameters;
        $(this.el).html('');
        ViewCollection.blockBase.prototype.initialize.apply(this, arguments);
    },

    render: function() {
        var self = this;
        var parent_block = this.block.collection.where({id: this.block.get('parent_id')})[0];

        if (this.uri_parameters && this.uri_parameters.item_id) {
            this.showContent = true;
            var item = this.content.where({id: this.uri_parameters.item_id})[0];
            this.viewItem(item);
        } else {
            this.showContent = false;
            _.each(this.content.models, function(model) {
                self.appendItem(model);
            }, this);
        }

        if (parent_block) {
            $(parent_block.view.el).append(this.el);
        }

        this.block.set({showContent: this.showContent});

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


View.blockMedia = View.blockBase.extend({
    className: 'media-item'
});



ViewCollection.blockMedia = ViewCollection.blockBase.extend({
    className: 'media-block',

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



ViewCollection.page = Backbone.View.extend({
    className: 'content',

    initialize: function() {
        _.bindAll(this);
        this.collection = new Collection.page({page_name: this.options.page_name});
        this.collection.fetch();
        this.collection.bind('add', this.appendItem);
        this.collection.bind('reset', this.render);
        this.collection.bind('update', this.update);
        this.collection.bind('remove', this.remove);
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

    switchView: function() {
        if (this.options.block_id) {
            console.log('update collection', this.collection)
            var model = this.collection.where({id: this.options.block_id})[0];
            console.log('update model', model)
            model.set({showContent: true});
        } else {
            var model = this.collection.where({'showContent': true})[0];
            model.set({showContent: false});
        }
        this.update(model);
//        var block = this.getBlock(_.clone(model));
//        model.view.$el.html(block.el);
    },

    update: function(model) {
        var oldModel = _.clone(model);
        var block = this.getBlock(model);
        oldModel.view.$el.replaceWith(block.el);
        delete(oldModel);
    },

    remove: function(model) {
        model.view.$el.remove();
    },

    getBlock: function(model) {
        var block = null;
        switch (model.get('type')) {
            case 'text' : block = new View.blockText({block: model}); break;
            case 'text_list' : block = new ViewCollection.blockTextList({block: model, uri_parameters: this.options}); break;
            case 'media' : block = new ViewCollection.blockMedia({block: model}); break;
        }
        return block;
    },

    appendItem: function(model) {
        var block = this.getBlock(model);
        if (block != null) {
            if (model.get('css') && model.get('css').float && model.get('css').float == 'none') {
                $(this.el).append($('<div>').addClass('clear'));
            }
            $(this.el).append(block.el);
        }
    }


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
             return this;
         }
     });
     */
});