$(function () {
    $('#date_birth').daterangepicker({
        
        "showDropdowns": true,
        singleDatePicker: true,
        "drops": "up"
      }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
});