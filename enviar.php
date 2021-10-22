<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = $_POST['name-form'];
$emailremetente    = trim($_POST['email-form']);
$telefone      	   = $_POST['cellphone-form'];
$emaildestinatario = 'contato@holmsdetetive.com.br, leads@blancmarketingdigital.com.br'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
 
 
/*A ser enviado no corpo do e-mail. */
$wghHTML = '<strong>Formulário de Contato</strong>

<p><b>Nome:</b>                     '.$nomeremetente.'  </p>
<p><b>E-Mail:</b>                   '.$emailremetente.' </p>
<p><b>Telefone:</b>                 '.$telefone.'       </p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers  = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio    =  mail($emaildestinatario,"Lead Holms Detetive", $wghHTML, $headers); 



 if($envio) {

   echo "<script>location.href='sucesso.html'</script>"; // Página que será redirecionada
 }

?>