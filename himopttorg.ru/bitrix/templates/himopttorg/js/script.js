/*
$(function(){

 		$('form input[type="submit"]').click(function(e) {   
         var self = $(this);

         grecaptcha.ready(function() {
             grecaptcha.execute('6LeLwLsaAAAAAKYUqKLVXIRy5-wKE-w1ph9XL03t', {action: 'submit'}).then(function(token) {
                 // Add your logic to submit to your backend server here.
 				var form = self.closest('form');
 				form.prepend($('<input>').attr({name : 'g-recaptcha-response', type : 'hidden', value : token}));
 				form.submit();
             });
         });
 		return false;
     });
	
});
*/