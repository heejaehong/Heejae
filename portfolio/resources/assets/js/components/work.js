/**
 * Created by heejaehong on 2017. 3. 12..
 */

var work = {

    deleteForm: function () {
        var url = $(this).attr('data-link');

        $.get(url, {}, function (response) {
            if (response.success == 1) {
                $('.admin_contents').html(response.data.html);
            }
        });
    },

    updateForm: function () {
        var url = $(this).attr('data-link');
        tinymce.triggerSave();

        var form = $('#work_edit_form')[0];
        var formData = new FormData(form);

        //var formData = $('.work_edit_form').serialize();
        // $.get(url, formData, function (response) {
        //     if (response.success == 1) {
        //
        //         $('.admin_contents').html(response.data.html);
        //     }
        // });

        $.ajax({
            url: url,
            method: 'POST',
            contentType: false,
            processData: false,
            data: formData,
            token: $('meta[name="_token"]').attr('content'),
            success: function (response) {
                if (response.success == 1) {
                    $('.admin_contents').html(response.data.html);
                }
                if (response.success == 0) {
                    $('#error_msg').html(response.data.html);
                }

            }

        })
    },

    showForm: function () {
        var url = $(this).attr('data-link');
        $.get(url, {}, function (response) {
            if (response.success == 1) {

                $('.admin_contents').html(response.data.html);
            }
        });
    },

    storeForm: function () {

        var url = $(this).attr('data-link');

        tinymce.triggerSave();

        // var formData = $('.work_create_form').serialize();

        var form = $('#work_create_form')[0];
        var formData = new FormData(form);


        // $.post(url, formData, function (response) {
        //     if (response.success == 1) {
        //         $('.admin_contents').html(response.data.html);
        //     }
        // });

        $.ajax({
            url: url,
            method: 'POST',
            contentType: false,
            processData: false,
            data: formData,
            token: $('meta[name="_token"]').attr('content'),
            success: function (response) {
                if (response.success == 1) {
                    $('.admin_contents').html(response.data.html);
                }

                if (response.success == 0) {
                    $('#error_msg').html(response.data.html);
                }
            }
        })
    },

    createForm: function () {
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
        $('.admin_menu').on('click', '#work_index', work.indexForm);
        $('.admin_contents').on('click', '#work_create', work.createForm);
        $('.admin_contents').on('click', '#work_save', work.storeForm);
        $('.admin_contents').on('click', '#work_show', work.showForm);
        $('.admin_contents').on('click', '#work_update', work.updateForm);
        $('.admin_contents').on('click', '#work_delete', work.deleteForm);


    }


};

$(work.bind);