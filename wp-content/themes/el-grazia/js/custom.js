$(document).ready(function(){
	
	if ($('.form--registration').length >  0 ) {
		if (form_title) {
			$('[name="hidden-page"]').val(form_title);
		}
	}


	var current_sub_page = 1;
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


	$('.filter__item a, .filter__item a > span').on('click', function(){
		var id = $(this).data('id');

		var data = {
			'action' : 'load_category',
			'term_id' : id, 
		}

		$.post( ajax_url, data, function(response) {
			if (response) {
				console.log(response);
			}
        });		
	})

});