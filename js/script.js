var date = new Date();
var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

$('#from').datepicker({ 
    minDate: today
});