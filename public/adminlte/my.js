$(document).ready(function () {
    $('.delete').click(function () {
        var res = confirm('Подтвердите действие');
        if (!res) return false;
    });

    $('.del-item').on('click', function () {
        var res = confirm('Подтвердите действие');
        if (!res) return false;
        var $this = $(this),
            id = $this.data('id'),
            src = $this.data('src');
        $.ajax({
            url: adminpath + '/product/delete-gallery',
            data: {id: id, src: src},
            type: 'POST',
            beforeSend: function () {
                $this.closest('.file-upload').find('.overlay').css({'display': 'block'});
            },
            success: function (res) {
                setTimeout(function () {
                    $this.closest('.file-upload').find('.overlay').css({'display': 'none'});
                    if (res == 1) {
                        $this.fadeOut();
                    }
                }, 1000);
            },
            error: function () {
                setTimeout(function () {
                    $this.closest('.file-upload').find('.overlay').css({'display': 'none'});
                    alert('Ошибка');
                }, 1000);
            }
        });
    });

    $('.sidebar-menu a').each(function () {
        var location = window.location.protocol + '//' + window.location.host + window.location.pathname;
        var link = this.href;
        if (link == location) {
            $(this).parent().addClass('active');
            $(this).closest('.treeview').addClass('active');
        }
    });

// CKEDITOR.replace('editor1');
    $('#editor1').ckeditor();

    $('#reset-filter').click(function () {
        $('#filter input[type=radio]').prop('checked', false);
        return false;
    });

    $(".select2").select2({
        placeholder: "Начните вводить наименование товара",
        //minimumInputLength: 2,
        cache: true,
        ajax: {
            url: adminpath + "/product/related-product",
            delay: 250,
            dataType: 'json',
            data: function (params) {
                return {
                    q: params.term,
                    page: params.page
                };
            },
            processResults: function (data, params) {
                return {
                    results: data.items
                };
            }
        }
    });

    if ($('div').is('#single')) {
        var buttonSingle = $("#single"),
            buttonMulti = $("#multi"),
            file;
    }

    if (buttonSingle) {
        new AjaxUpload(buttonSingle, {
            action: adminpath + buttonSingle.data('url') + "?upload=1",
            data: {name: buttonSingle.data('name')},
            name: buttonSingle.data('name'),
            onSubmit: function (file, ext) {
                if (!(ext && /^(jpg|png|jpeg|gif)$/i.test(ext))) {
                    alert('Ошибка! Разрешены только картинки');
                    return false;
                }
                buttonSingle.closest('.file-upload').find('.overlay').css({'display': 'block'});

            },
            onComplete: function (file, response) {
                setTimeout(function () {
                    buttonSingle.closest('.file-upload').find('.overlay').css({'display': 'none'});

                    response = JSON.parse(response);
                    $('.' + buttonSingle.data('name')).html('<img src="/img/graduate/' + response.file + '" style="max-height: 150px;">');
                }, 1000);
            }
        });
    }

    $('#add').on('submit', function () {
        if (!isNumeric($('#category_id').val())) {
            alert('Выберите категорию');
            return false;
        }
    });

    function isNumeric(n) {
        return !isNaN(parseFloat(n)) && isFinite(n);
    }

    // add options date
    let months = [
        'январь',
        'февраль',
        'март',
        'апрель',
        'май',
        'июнь',
        'июль',
        'август',
        'сентябрь',
        'октябрь',
        'ноябрь',
        'декабрь',
    ];
    // days
    for (let i = 1; i <= 31; i++) {
        let value;
        if (i < 10) {
            value = '0' + i;
        } else {
            value = i;
        }
        $('<option>', {
            text: i,
            value: value,
        }).appendTo('.dates_schedule');
    }
    //months
    for (let i = 0; i < months.length; i++) {
        $('<option>', {
            text: months[i],
            value: i + 1,
        }).appendTo('.months_schedule');
    }


    // add time options

    for (let i = 0; i <= 23; i++) {
        let hour;
        let minute;
        if (i < 10) {
            hour = '0' + i;
        } else {
            hour = i;
        }

        $('<option>', {
            text: hour + ':00',
            value: hour + ':00',
        }).appendTo('.time_schedule')
        $('<option>', {
            text: hour + ':30',
            value: hour + ':30',
        }).appendTo('.time_schedule')
    }

})