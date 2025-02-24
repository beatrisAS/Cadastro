<?php
ob_start(); // Inicia o buffer de saída para evitar problemas com header()

ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturando os dados do formulário com verificação
    $nome      = isset($_POST["txtNome"]) ? htmlspecialchars($_POST["txtNome"]) : '';
    $sobrenome = isset($_POST["txtSobrenome"]) ? htmlspecialchars($_POST["txtSobrenome"]) : '';
    $email     = isset($_POST["txtEmail"]) ? htmlspecialchars($_POST["txtEmail"]) : '';
    $formacao  = isset($_POST["txtFormacao"]) ? htmlspecialchars($_POST["txtFormacao"]) : '';
    $emprego   = isset($_POST["txtEmprego"]) ? htmlspecialchars($_POST["txtEmprego"]) : '';
    ?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Cadastro Confirmado</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .container {
                background: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 400px;
                text-align: center;
            }
            .w3-btn {
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="w3-container w3-green">
                <h2>Cadastro Confirmado!</h2>
            </div>
            <p><strong>Nome:</strong> <?php echo "$nome $sobrenome"; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Formação:</strong> <?php echo $formacao; ?></p>
            <p><strong>Descrição Último Emprego:</strong> <?php echo $emprego; ?></p>
            <a href="index.html" class="w3-btn w3-blue-grey">Voltar</a>
        </div>
    </body>
    </html>
    <?php
} else {
    ob_end_clean(); // Limpa qualquer saída antes do redirecionamento
    header("Location: index.html");
    exit();
}

ob_end_flush(); // Envia o conteúdo do buffer e o desativa
?>
