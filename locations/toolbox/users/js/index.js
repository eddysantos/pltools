function validateForm(form, current_input){
  var active = true;
  var last = form.find('input, select').filter(':last');

  var inputs = form.find('input, select');
  console.log(inputs);

  form.find('input, select').each(function(){
    var has_value = $(this).val() == "";
    if (has_value) {
      $(this)
        .addClass('is-invalid')
        .removeClass('is-valid');
      $('#addUser')
        .attr('disabled', true)
        .addClass('disabled');
      active = false;
      $(this).select();
    } else {
      $(this)
        .addClass('is-valid')
        .removeClass('is-invalid');
    }

    if ($(this).is(last)) {
      if (active) {
        $('#addUser')
        .attr('disabled', false)
        .removeClass('disabled');
      }
    }

    var match = $(this).is(current_input);
    if (match) {
      return false;
    }

  })


}

$(document).ready(

  $('form').on('blur', 'input, select', function(){
    var form = $(this).parents('form');
    var $this = $(this);
    validateForm(form, $this);
  })

);
