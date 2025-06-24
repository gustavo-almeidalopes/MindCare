<?php
    header('Content-Type: application/json');
    sleep(1);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['status' => 'error', 'message' => 'Por favor, insira um e-mail válido.']);
            exit;
        }
        $file = 'subscribers.txt';
        if (file_exists($file) && strpos(file_get_contents($file), $email) !== false) {
            echo json_encode(['status' => 'success', 'message' => 'Você já está inscrito. Tudo certo! 👍']);
            exit;
        }
        $newEntry = date('Y-m-d H:i:s') . ' - ' . $email . PHP_EOL;
        if (file_put_contents($file, $newEntry, FILE_APPEND | LOCK_EX) !== false) {
            echo json_encode(['status' => 'success', 'message' => 'Inscrição realizada! Bem-vindo(a)! 🎉']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Erro no servidor. Tente novamente.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Método de requisição inválido.']);
    }
?>