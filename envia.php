<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar campos
    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $telefone = isset($_POST['telefone']) ? htmlspecialchars($_POST['telefone']) : '';

    if (empty($nome) || empty($email)) {
        echo json_encode(["status" => "error", "message" => "Nome e E-mail são campos obrigatórios"]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Formato de e-mail inválido"]);
        exit;
    }

    $para = "mateustomaz147@gmail.com";
    $assunto = "Coleta de dados - Inteliogia";

    $corpo = "Nome: $nome\nE-mail: $email\nTelefone: $telefone";

    $cabeca = "From: teste@inteliogia.com\nReply-to: $email\nX=Mailer: PHP/" . phpversion();

    if (mail($para, $assunto, $corpo, $cabeca)) {
        echo json_encode(["status" => "success", "message" => "E-mail enviado com sucesso!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Houve um erro ao enviar o e-mail!"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Método de requisição inválido"]);
}
?>
