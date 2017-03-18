/**
 * Created by heejaehong on 2017. 2. 25..
 */

var skill = {

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
        var formData = $('.skill_create_form').serialize();

        $.post(url, formData, function(response){
            if (response.success == 1) {
                $('.admin_contents').html(response.data.html);
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
        var formData = $('.skill_edit_form').serialize();
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


    indexForm: function () {
        var url = $(this).attr('data-link');
        $.get(url, {}, function (response) {
            if (response.success == 1) {

                $('.admin_contents').html(response.data.html);
            }
        });
    },

    bind: function () {
        $('.admin_menu').on('click', '#skill_index', skill.indexForm);
        $('.admin_contents').on('click', '#skill_show', skill.showForm);
        $('.admin_contents').on('click', '#skill_update', skill.updateForm);
        $('.admin_contents').on('click', '#skill_create', skill.createForm);
        $('.admin_contents').on('click', '#skill_save', skill.storeForm);
        $('.admin_contents').on('click', '#skill_delete', skill.deleteForm);

    }


};

$(skill.bind);