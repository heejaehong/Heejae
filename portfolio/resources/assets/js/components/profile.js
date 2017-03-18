/**
 * Created by heejaehong on 2017. 1. 25..
 */

var profile = {

    updateForm: function () {
        var url = $(this).attr('data-link');
        var formData = $('.profile_edit_form').serialize();
        $.get(url, formData, function (response) {
            if (response.success == 1) {

                $('.admin_contents').html(response.data.html);
            }
        });
    },

    showForm: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1) {

                $('.admin_contents').html(response.data.html);
            }
        });
    },

    bind: function () {
        $('.admin_menu').on('click', '#profile_show', profile.showForm);
        $('.admin_contents').on('click', '#profile_update', profile.updateForm);


    }


};

$(profile.bind);