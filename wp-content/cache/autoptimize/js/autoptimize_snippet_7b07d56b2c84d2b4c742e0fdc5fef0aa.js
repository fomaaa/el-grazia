$(document).ready(function(){if($('.form--registration').length>0){if(form_title){$('[name="hidden-page"]').val(form_title);}}
var current_sub_page=1;$(document).on('click','#load_more',function(e){e.preventDefault();var data={'action':'load_more','term_id':$(this).data('category'),'current':current_sub_page}
$.post(ajax_url,data,function(response){if(response){response=JSON.parse(response);$(response.html).appendTo('.grid');if(response.count<6){$('#load_more').hide();}}});current_sub_page+=1;})
if($('.registration').length>0){$('[name="role"]').on('change',function(){var val=$(this).val();if(val=='1'||val=='2'){$('[name="seminar"]').parents('.selectric-hide-select').siblings('.selectric').show('fast');}else{$('[name="seminar"]').parents('.selectric-hide-select').siblings('.selectric').hide('fast');}
console.log(val);})}});