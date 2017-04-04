/**
 * Created by heejaehong on 2017. 3. 12..
 */

var nav = {

    deleteForm: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1) {
                $('.admin_contents').html(response.data.html);
            }
        });
    },

    storeForm: function () {

        var url = $(this).attr('data-link');
        var formData = $('.nav_create_form').serialize();

        $.post(url, formData, function(response){
            if (response.success == 1) {
                $('.admin_contents').html(response.data.html);
            }

            if (response.success == 0){
                $('#error_msg').html(response.data.html);
            }
        });
    },

    createForm: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1){
                $('.admin_contents').html(response.data.html);
            }
        });
    },

    updateForm: function () {
        var url = $(this).attr('data-link');
        var formData = $('.nav_edit_form').serialize();
        $.get(url, formData, function (response) {
            if (response.success == 1) {

                $('.admin_contents').html(response.data.html);
            }

            if (response.success == 0){
                $('#error_msg').html(response.data.html);
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

    indexForm: function () {
        var url = $(this).attr('data-link');
        $.get(url, {}, function (response) {
            if (response.success == 1) {

                $('.admin_contents').html(response.data.html);
            }
        });
    },

    bind: function () {
        $('.admin_menu').on('click', '#nav_index', nav.indexForm);
        $('.admin_contents').on('click', '#nav_show', nav.showForm);
        $('.admin_contents').on('click', '#nav_update', nav.updateForm);
        $('.admin_contents').on('click', '#nav_create', nav.createForm);
        $('.admin_contents').on('click', '#nav_save', nav.storeForm);
        $('.admin_contents').on('click', '#nav_delete', nav.deleteForm);


    }


};

$(nav.bind);