$(window).scroll(function(e){
  if ($(this).scrollTop() > 100) {
    $('a.up').fadeIn();
  } else {
    $('a.up').stop().fadeOut();
  }
  e.preventDefault();
});
$('a.up').click(function(ff){
  $("body").animate({ scrollTop: 0 }, 600);
  ff.preventDefault();
});
function send_email() {
	$("#error_email").hide();
	var email_input = $("#email_input").val();
	if(validateEmail(email_input)) {
		
	} else {
		$("#email_input").focus();
		$("#error_email").show();
		return false;
	}
	//console.log(validateEmail(email_input));return false;
	//check email format
	$.post( "upload.php", { email: email_input})
	  .done(function( data ) {
		alert( "Data Loaded: " + data );
	  });
	$('#myModal').modal('show');
}
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}