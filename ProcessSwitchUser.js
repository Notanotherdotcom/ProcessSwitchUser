$(document).ready(function() {
    $('#select_user').change(function() {
        $.ajax({
            url: './?userid=' + $('#select_user').val()
        }).done(function(data) {
            if (data == 'hide') {
                $('input[name=redirect]').removeAttr('checked');
                $('#Inputfield_redirect_2').attr('checked', 'checked');
                $('#Inputfield_redirect_1').parent().parent().hide();
            } else {
                if (!$('#Inputfield_redirect_1').parent().parent().is('visible')) {
                    $('input[name=redirect]').removeAttr('checked');
                    $('#Inputfield_redirect_1').attr('checked', 'checked');
                    $('#Inputfield_redirect_1').parent().parent().show();

                }
            }
        });
    });
});
