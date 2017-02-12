$('#cspio-form').submit(function(){
 return false;
});

$('#cspio-subscribe-btn').click(function(){
 $.post(
 $('#cspio-form').attr('action'),
 $('#cspio-form :input').serializeArray(),
 function(result){
 $('#result').html(result);
 $('#cspio-email').val('');
if (result != ''){
 $('#message').show();
 $('#message').fadeOut(3000);
}else{
  $('#message-error').show();
  $('#message-error').fadeOut(5000);
}

 }
 );
});
