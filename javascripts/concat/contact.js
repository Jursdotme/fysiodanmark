$(document).ready(function(){
  $('.wpcf7 .form-row').matchHeight();
  $(".responsive-video").fitVids();
  $(".page-template-klinik-liste table").tablesorter();

  if ($('#google_map_search').val() !== '') {
		setTimeout(function() {
      $('#google_map_search_button').trigger("click");
    }, 2000);
	}

});
