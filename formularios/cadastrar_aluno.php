<?php
require_once __DIR__ . '/../config/conexao.php';

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $curso = trim($_POST['curso'] ?? '');

    if ($nome === '' || $curso === '') {
        $mensagem = 'Preencha o nome e o curso.';
    } else {
        $comando = $pdo->prepare(
            'INSERT INTO alunos (nome, curso) VALUES (:nome, :curso)'
        );
        $comando->execute([
            ':nome' => $nome,
            ':curso' => $curso,
        ]);

        $mensagem = 'Aluno cadastrado com sucesso!';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar aluno</title>
</head>
<body>
    <h1>Cadastrar aluno</h1>

    <?php if ($mensagem !== ''): ?>
        <p><?= htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>

    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <br><br>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required>

        <br><br>

        <button type="submit">Cadastrar aluno</button>
    </form>
</body>
</html>