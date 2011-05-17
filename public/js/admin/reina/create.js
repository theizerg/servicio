$(document).ready(function(){

  $('#main-form').submit(function(){

        var data = $('#main-form').serialize();
        $('input').iCheck('disable');
        $('#main-form input, #main-form button').attr('disabled','true');
        $('#ajax-icon').removeClass('fas fa-save').addClass('fas fa-spinner fa-pulse');

        Pace.track(function () {
            $.ajax({
              url: $('#main-form #_url').val(),
    		      headers: {'X-CSRF-TOKEN': $('#main-form #_token').val()},
    		      type: 'POST',
              cache: false,
    	        data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  $('#main-form #submit').hide();
                  $('#main-form #edit-button').attr('href', $('#main-form #_url').val() + '/' + json.reina_id + '/edit');
                  $('#main-form #edit-button').removeClass('hide');
                  toastr.success('Datos guardados satisfactoriamente');
                  $(location).attr('href', $('#main-form #_redirect').val());
                }
              },error: function (data) {
                var errors = data.responseJSON;
                $.each( errors.errors, function( key, value ) {
                  toastr.error(value);
                  return false;
                });
                $('input').iCheck('enable');
                $('#main-form input, #main-form button').removeAttr('disabled');
                $('#ajax-icon').removeClass('fas fa-spinner fa-pulse').addClass('fas fa-save');
              }
           });
        });

       return false;

    });
});
