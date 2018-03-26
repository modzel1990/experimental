
var divs = $("div[data-filter]");

$('#search').on('keyup', function() {
	var filter = $(this).val().toLowerCase();
	filterList(filter);
});


//filter function
function filterList(value) {
  divs.filter(function() {
  $(divs).fadeOut("fast");
  return $(this).attr("data-filter").toLowerCase().indexOf(value) >= 0
}).fadeIn()
};
