<?php
// Exibir erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debug: Exibir conteúdo do array $_POST
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Receber os dados do formulário
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $celular = isset($_POST['celular']) ? $_POST['celular'] : '';
    $mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : '';

    // Validar os dados se necessário
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Endereço de e-mail inválido.";
        exit;
    }

    // Processar os dados recebidos
    echo "<h1>Dados Recebidos:</h1>";
    echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
    echo "<p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Celular:</strong> " . htmlspecialchars($celular) . "</p>";
    echo "<p><strong>Mensagem:</strong> " . nl2br(htmlspecialchars($mensagem)) . "</p>";
}
?>