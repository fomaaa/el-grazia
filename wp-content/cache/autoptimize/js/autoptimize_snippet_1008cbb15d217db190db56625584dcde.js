$(document).ready(function(){var current_sub_page=1;$(document).on('click','#load_more',function(e){e.preventDefault();var data={'action':'load_more','term_id':$(this).data('category'),'current':current_sub_page}
$.post(ajax_url,data,function(response){if(response){response=JSON.parse(response);$(response.html).appendTo('.grid');if(response.count<6){$('#load_more').hide();}}});current_sub_page+=1;})
if($('.registration').length>0){$('[name="seminar"]').parents('.form__field--select').hide();$('[name="brand"]').parents('.form__field--select').hide();$('[name="role"]').on('change',function(){var val=$(this).val();if(val=='1'||val=='2'){$('[name="seminar"]').parents('.form__field--select').show('350');$('[name="brand"]').parents('.form__field--select').hide();}else if(val=='3'){$('[name="brand"]').parents('.form__field--select').show('350');$('[name="seminar"]').parents('.form__field--select').hide();}else{$('[name="seminar"]').parents('.form__field--select').hide('350');$('[name="brand"]').parents('.form__field--select').hide('350');}})}
$('#reg_form').on('submit',function(e){e.preventDefault();var role=$('[name="role"]').val();var name=$('[name="name"]').val();var phone=$('[name="phone"]').val();var email=$('[name="email"]').val();var seminar=$('[name="seminar"]').val();var brand=$('[name="brand"]').val();var validation=validateForm();if(validation){console.log('send ajax');$.ajax({type:'POST',url:ajax_url,data:{role:role,name:name,phone:phone,email:email,seminar:seminar,brand:brand,},success:function(response){$('.review-block .res-container').html(response.html);if(response.count){$('.review-block').show();}else{$('.review-block').show();$('.nth-found').show();}}});}});});function validateForm(){var validation=true;var role=$('[name="role"]').val();var name=$('[name="name"]').val();var phone=$('[name="phone"]').val();var email=$('[name="email"]').val();var seminar=$('[name="seminar"]').val();var brand=$('[name="brand"]').val();if(!role){$('[name="role"]').parents('.form__field--select').find('.validation').show('fast');validation=false;}else{$('[name="role"]').parents('.form__field--select').find('.validation').hide('fast');}
if(name.length==0){$('[name="name"]').parents('.form__field').find('.validation').show('fast');validation=false;}else{$('[name="name"]').parents('.form__field').find('.validation').hide('fast');}
if(phone.length==0){$('[name="phone"]').parents('.form__field').find('.validation').show('fast');validation=false;}else{$('[name="phone"]').parents('.form__field').find('.validation').hide('fast');}
if(email.length==0){$('[name="email"]').parents('.form__field').find('.validation').show('fast');validation=false;}else{$('[name="email"]').parents('.form__field').find('.validation').hide('fast');}
if(role=='1'||role=='2'){if(!seminar){$('[name="seminar"]').parents('.form__field--select').find('.validation').show('fast');validation=false;}else{$('[name="seminar"]').parents('.form__field--select').find('.validation').hide('fast');}}else if(role=='3'){if(!brand){$('[name="brand"]').parents('.form__field--select').find('.validation').show('fast');validation=false;}else{$('[name="brand"]').parents('.form__field--select').find('.validation').hide('fast');}}
return validation;};