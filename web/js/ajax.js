$(document).ready(function() {
   var $form = $('#myForm');
    $form.submit(function(e) {
        e.preventDefault();
        var data = $form.serialize();
        data += '&isAjax=1';
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: data,
            dataType: 'json',
            success: function(data) {
                var $table = $('.table-row table');
                $table.empty();
                if(data) {
                var $row = '<tr><th>' + 'Studio&nbsp;name' +
                    '</th><th>' + 'Full&nbsp;name' +
                    '</th><th>' + 'Films&nbsp;count' +
                    '</th></tr>';
                    $($row).appendTo($table);
                    $(data).each(function() {
                        var $result = '<tr><td>' +
                            this['studio_name'] + '</td><td>' +
                            this['full_name'] + '</td><td>' +
                            this['films_count'] + '</td></tr>';
                        $($result).appendTo($table);
                    });
                } else {
                    $($table).html('Please&sbquo;&nbsp;select studio');
                }
            }
        });

    })
});