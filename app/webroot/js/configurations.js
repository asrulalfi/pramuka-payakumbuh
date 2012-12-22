$(document).ready(function() {
  // Handler for .ready() called.
  $("#edit_password").attr('value', '');

  $("input[name=ckall]").live('click', function(){
  	checked = ($(this).attr('checked') == "checked") ? true : false;
    $(":checkbox").attr('checked', checked);
  });

  $('#slider').nivoSlider();

});