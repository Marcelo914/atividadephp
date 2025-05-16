<?php
require_once 'conexao.php';

$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Produtos Cadastrados</h1>

    <p><a href="form.php">+ Adicionar novo produto</a></p>

    <?php if (count($produtos) === 0): ?>
        <p>Nenhum produto cadastrado.</p>
    <?php else: ?>
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço (R$)</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $p): ?>
                    <tr>
                        <td><?= $p['id'] ?></td>
                        <td><?= htmlspecialchars($p['nome']) ?></td>
                        <td><?= htmlspecialchars($p['descricao']) ?></td>
                        <td><?= number_format($p['preco'], 2, ',', '.') ?></td>
                        <td>
                            <a href="editar.php?id=<?= $p['id'] ?>">Editar</a> |
                            <a href="excluir.php?id=<?= $p['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php endif ?>
</body>
</html>
