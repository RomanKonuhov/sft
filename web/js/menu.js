$(document).ready(function() {


$('body').contextmenu(function(e) {
    var menuHtml = $(
        '<div id="contextmenu">'+
            '<ul>'+
                '<li>Добавить блок</li>'+
                '<li>Редактировать блок</li>'+
                '<li>Удалить блок</li>'+
            '</ul>'+
        '</div>'
    );
    $('#contextmenu').remove();
    $('body').append(menuHtml);
    $('#contextmenu').css('left', e.pageX+'px');
    $('#contextmenu').css('top', e.pageY+'px');
    //$('#contextmenu').show();
    return false;
});

$('body').click(function() {
    $('#contextmenu').remove();
})


//    $.ajax({
//        url: '/index',
//        type: 'get',
//        dataType: 'json',
//        success: function(data, textStatus, jqXHR) {
//            alert('success: ', data);
//            console.log(data, textStatus, jqXHR);
//        },
//        error: function(jqXHR, status, error) {
//            alert('error: ', error)
//        }
//    })


});