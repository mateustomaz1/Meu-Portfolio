<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $nome = addslashes($_POST['mensagem']);

    $para = "mateustomaz147@gmail.com";
    $assunto = 'coleta de dados - portfolio';

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$celular."\n"."Mensagem: ".$nome;

    $cabeca = "From: tomaz.mateus@academico.ifpb.edu.br"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }
?>