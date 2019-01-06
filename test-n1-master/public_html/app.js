$(document).ready(function(){
	$('#submitbutton').click(function(){
 
	  $('#contact-form').validate({
					  rules: {
									 email: {
										required: true,
										email:true
										},
									  message: "required",
									  phone:{
									  number:true,
									  minlength:9
									  },
									  name:{
									  
									  minlength:3,
									  maxlength:12
									  },
 
						  },
 
							messages: {
						  email: {
							required: "*Campo Obligatorio",
							email: " *Direcci&oacute;n de e-mail no v&aacute;lida"
						  },
						  message: "*Campo Obligatorio",
						  phone:{
									  number:   "   *Solo numeros",
									  minlength:   "   *Nueve digitos minimo"
 
									  },
									  name:{
									  
									  minlength:"   *Tres Caracteres minimo",
									  maxlength: "   *Doce Caracteres maximo minimo"
									  },
						 
							
							
							},
							
							
							submitHandler: function(form) {
								 $('#dat_form').fadeOut();
								 $("#msg_index").show();  
								 $("#msg_index").html("<strong>Enviando mensaje...</strong>");
								 setTimeout(function() {
								 
								 }, 2000);
 
								 $.post("sendform.php",$("#contact-form").serialize(),
	  
						  function(data,status){
							$("#msg_index").show();  
								 $("#msg_index").html(data);
							setTimeout(function() {
								 $('#msg_index').fadeOut();
								 $("#contact-form")[0].reset();
								 $('#dat_form').show('slow');
								 
								 }, 1000);
								 
								
 
 
 
 
						  });
 
								 return false;
							}
					  });
 
	  });
 });