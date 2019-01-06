<?php
sleep(3);


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $mail=$_POST['email'];
    $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
    $mensaje=$_POST['message'];
    $name= $_POST['name'];
    $phone= $_POST['phone'];



if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    

    $headers = 'MIME-Version: 1.0' . "rn";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "rn";
    $headers .= 'From:' . $mail. "rn"; 
    $headers .= 'Cc:' . $mail. "rn"; 
    $sendmessage = 
     '<div style="padding:50px; color:white;">Hola ' . $name . ',<br/>'
    . '<br/>Nuestros Contactos.<br/><br/>'
    . 'Name:' . $name . '<br/>'
    . 'Email:' . $mail . '<br/>'
    . 'Contact No:' . $phone . '<br/>'
    . 'Message:' . $mensaje . '<br/><br/>'
    . 'Confirmación de correo.'
    . '</div>';



     if(mail("dnrl2008@gmail.com", $name, $sendmessage, $headers)){
       echo "Mensaje Enviado";
      
   }else{
        echo "Error";
   }

}else{
    echo "*Correo ($mail) no válido.";
}
}else{
    echo "Error de POST";

}



?>