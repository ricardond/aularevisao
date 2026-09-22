<?php
// Inclui o arquivo que cria a conexão com o banco de dados
include "../config/conexao.php";

    // Insere o primeiro aluno na tabela alunos
    $pdo->exec("INSERT INTO alunos (nome, curso) VALUES ('João da Silva', 'Matemática')");


    // Busca todos os registros da tabela alunos
    $consulta = $pdo->query("SELECT * FROM alunos");

 
    // Converte o resultado da busca em um array associativo
    $alunos = $consulta->fetchAll(PDO::FETCH_ASSOC);



    // Percorre o array, lendo um aluno por vez
    foreach ($alunos as $aluno) {
        // Mostra o nome do aluno
        echo "Nome: " . $aluno['nome'] . "<br>";

        // Mostra o curso do aluno
        echo "Curso: " . $aluno['curso'] . "<br><br>";
    }

    // Exclui todos os registros da tabela (use com cuidado)
    //$pdo->exec('DELETE FROM alunos');

    // Exclui somente o registro que possui o id informado (use com cuidado)
    //$pdo->exec('DELETE FROM alunos WHERE id = 10');
?>