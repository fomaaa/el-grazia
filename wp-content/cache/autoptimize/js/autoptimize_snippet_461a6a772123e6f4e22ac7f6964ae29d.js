$(document).ready(function(){var current_sub_page=1;$(document).on('click','#load_more',function(e){e.preventDefault();var data={'action':'load_more','term_id':$(this).data('category'),'current':current_sub_page}
$.post(ajax_url,data,function(response){if(response){response=JSON.parse(response);$(response.html).appendTo('.grid');if(response.count<6){$('#load_more').hide();}}});current_sub_page+=1;})
if($('.registration').length>0){$('[name="seminar"]').parents('.form__field--select').hide();$('[name="brand"]').parents('.form__field--select').hide();$('[name="role"]').on('change',function(){var val=$(this).val();if(val=='1'||val=='2'){$('[name="seminar"]').parents('.form__field--select').show('350');$('[name="brand"]').parents('.form__field--select').hide();}else if(val=='3'){$('[name="brand"]').parents('.form__field--select').show('350');$('[name="seminar"]').parents('.form__field--select').hide();}else{$('[name="seminar"]').parents('.form__field--select').hide('350');$('[name="brand"]').parents('.form__field--select').hide('350');}})}
$('#reg_form').on('submit',function(e){e.preventDefault();var role=$('[name="role"]').val();var name=$('[name="name"]').val();var email=$('[name="email"]').val();var seminar=$('[name="seminar"]').val();var brand=$('[name="brand"]').val();if(!role){$('[name="role"]').parents('.form__field--select').find('.validation').css('display','block');}else{$('[name="role"]').parents('.form__field--select').find('.validation').css('display','none');}});});