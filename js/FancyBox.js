$(document).ready(function(){
  $('#delete_btn').prop('disabled', true);
  $('#choose-img').change(function() {
      $('#delete_btn').prop('disabled', function(i, val) {
        return !val;
      });
  });
});
