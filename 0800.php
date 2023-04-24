<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST['form_name'];
  $email = $_POST['form_email'];
  $message = $_POST['msg'];
  
  // Configurações de envio de email
  $to = "focus.otfuture@gmail.com"; 
  $subject = "Nova mensagem de contato";
  $body = "Nome: $name\nEmail: $email\nMensagem:\n$message";
  $headers = "From: $email";
  
  // Envio de e-mail
  if(mail($to, $subject, $body, $headers)){
    echo "Obrigado! Sua mensagem foi enviada.";
  } else{
    echo "Desculpe, houve um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.";
  }
}
?>