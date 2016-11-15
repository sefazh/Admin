/**
 * Created by ZhuangXiaofan on 2016/11/11 .
 */

var myTableJs = function () {

    var method = ['category', 'brand', 'type', 'goods', 'privilege'];

    $().ready(function() {

        $('body').on('click', 'a.btn-danger', function() {

            if ($(this).children('i').hasClass('fa-trash-o')) {

                var id = $(this).parent().parent().data('id');
                var _method = $(this).data('method');

                if (method.indexOf(_method) > -1) {
                    ajaxRemove($(this), { id: id, method: _method});
                }

            }

        });

    })

    function ajaxRemove (that, data) {
        $.ajax({
            url: '/ajax/remove',
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function(result) {
                if (result) {
                    window.location.reload();
                } else {
                    alert('ERROR');
                }
            },
            error: function() {}
        });
    }

}();