/**
 * Created by heejaehong on 2017. 3. 1..
 */


var description = {

    updateForm: function () {
        var url = $(this).attr('data-link');
        var formData = $('.description_edit_form').serialize();
        $.get(url, formData, function (response) {
            if (response.success == 1) {

                $('.admin_contents').html(response.data.html);
            }

            if (response.success == 0) {

                $('#error_msg').html(response.data.html);
            }
        });
    },

    indexForm: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1) {

                $('.admin_contents').html(response.data.html);
            }
        });
    },

    bind: function () {
        $('.admin_menu').on('click', '#description_index', description.indexForm);
        $('.admin_contents').on('click', '#description_update', description.updateForm);



    }



};

$(description.bind);