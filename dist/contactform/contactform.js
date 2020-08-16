jQuery(document).ready(function($) {
  "use strict";
  $('.form-wrap input, .form-wrap textarea, .email-box input').blur(function() {
    let tmpval = $(this).val();
    if (tmpval == '') {
      $(this).addClass('empty');
      $(this).removeClass('not-empty');
    } else {
      $(this).addClass('not-empty');
      $(this).removeClass('empty');
    }
  }); 
 

});
