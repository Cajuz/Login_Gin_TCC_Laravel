<?php
// Pega os dados enviados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo_usuario = $_POST['tipo_usuario'];

// Aqui você pode adicionar verificação real com banco de dados
// if (verificar_usuario($email, $senha, $tipo_usuario)) { ... }

switch ($tipo_usuario) {
    case 'administrador':
        header("Location: portal_administrador.html");
        break;
    case 'professor':
        header("Location: portal_professor.html");
        break;
    case 'aluno':
        header("Location: dashboard.html");
        break;
    default:
        // Caso tipo de usuário seja inválido, volta para login
        header("Location: index.php");
        break;
}

exit;
?>