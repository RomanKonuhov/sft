<?php include_partial('main', array('blocks' => $blocks)); ?>


<div id="contextmenu">
    <ul>
        <li>Добавить блок</li>
        <li>Редактировать блок</li>
        <li>Удалить блок</li>
    </ul>
</div>

<script type="text/javascript">
    $('body').contextmenu(function(e) {
        $('#contextmenu').css('left', e.pageX+'px');
        $('#contextmenu').css('top', e.pageY+'px');
        $('#contextmenu').show();
        return false;
    });
    $('body').click(function() {
        $('#contextmenu').hide();
    })

    BlockModel = Backbone.Model.extend({
        defaults: {
            type: "text",
            menus: {li1: "add", li2: "edit", li3: "rem"}
        },

        initialize: function() {
            this.on('change:type', function(model) {
                alert("the model "+model.get('name')+' has changed its menus to '+model.get('type'));
            });
        }
    })

    block = new BlockModel({name: 'block'});
</script>