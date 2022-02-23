<?php
header('Location:obrigado.html');

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);



$to = "contato@mcdemarketing.com";
$subject = "Captura de Emails";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email;
        
$header = "From:exemple@gmai.com"."\r\n".
            "reply-to:".$email."\r\sn".
            "X=mailer:php/".phpversion();
            
if(mail($to,$subject,$body,$header)){
     echo("email enviado com sucesso!");
}else{
    ("houve uma falha no envio do email");
}

}



?>