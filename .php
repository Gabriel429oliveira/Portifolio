<?php
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$celular = addslashes($_POST['celular']);

$para = "bieloliveira429@gmail.com";
$assunto = "Dúvidas Portfólio";

$corpo = "Nome: " . $nome . "\n" . 
         "Email: " . $email . "\n" . 
         "Telefone: " . $celular;

$cabeca = "From: adrieleconceiçao5@gmail.com" . "\n" . 
          "Reply-To: " . $email . "\n" . 
          "X-Mailer: PHP/" . phpversion();

if(mail($para, $assunto, $corpo, $cabeca)){
    echo("E-mail enviado com sucesso");
} else {
    echo("Houve um erro ao enviar o e-mail");
}
?>
