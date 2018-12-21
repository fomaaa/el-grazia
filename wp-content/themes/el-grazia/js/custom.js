$(document).ready(function(){
	var current_sub_page = 1;
	if ($('.form--registration').length >  0 ) {
		if (form_title) {
			$('[name="hidden-page"]').val(form_title);
		}
	}
	$('#load_more').on('click', function(e){
		e.preventDefault();
		var data = {
			'action' : 'load_more',
			'term_id' : $(this).data('category'), 
			'current' : current_sub_page
		}

		$.post( ajax_url, data, function(response) {
			if (response) {
				response = JSON.parse(response);
				$(response.html).appendTo('.grid');
				if (response.count < 6) {
					$('#load_more').hide();
				}
			}
        });

        current_sub_page  += 1;
	})



});