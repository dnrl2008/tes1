
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>

<script>
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
							required: "<span class='error'>*Campo Obligatorio</span>",
							email: " <span class='error'>*Direcci&oacute;n de e-mail no v&aacute;lida</span>"
						  },
						  message: "<span class='error'>*Campo Obligatorio</span>",
						  phone:{
									  number:   " <span class='error'>  *Solo numeros</span>",
									  minlength:   " <span class='error'>  *Nueve digitos minimo</span>"
 
									  },
									  name:{
									  
									  minlength:"  <span class='error'> *Tres Caracteres minimo </span>",
									  maxlength: " <span class='error'>  *Doce Caracteres maximo minimo</span>"
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
</script>
    <title>Formulario</title>
</head>
<body>

<section>
<div id="msg_index"></div>
<div id="dat_form">
<div>
    <span class="Mfor">Formulario</span>
</div><br>
<form method="post" id="contact-form">

    <span class="text">Nombre</span><br>
    <input type="text" class="generica" name="name" id="name" minlength="3" maxlength="12"><br><br>

    <span class="text">Email</span><br>
    <input type="text"  class="generica" name="email" id="email"  placeholder="ronaldcolemanares2626@gmail.com"><br><br>

    <span class="text">Telefono</span><br>
    <input type="text" class="generica" name="phone" id="phone" minlength="9" maxlength="10"><br><br>

    <span class="text">Mensaje</span><br>
    <textarea name="message" id="message" class="textA" cols="55" rows="5" minlength="4" ></textarea><br>
    <br><br>

    <input type="Submit" class="bot"  value="Enviar" id="submitbutton">
    <br>
    

    </form>
    </div>
    </section>
</body>
</html>