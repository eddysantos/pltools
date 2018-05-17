
$(document).ready(function(){
  FontAwesomeConfig = { autoReplaceSvg: 'nest' }

  $('.modal').on('hidden.bs.modal', function(){
    $(this).find('input[type=text]').val('');
    $(this).find('.is-valid').removeClass('is-valid');
    $(this).find('.is-invalid').removeClass('is-invalid');
    $(this).find('.popup-list').fadeOut();
    $(this).find('textarea').val('');
    $(this).find('[db-id]').attr('db-id', '');
    $(this).find('select').prop('selectedIndex',0)
  });
});
