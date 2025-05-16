<form action="processa.php" method="post">
  <input type="hidden" name="id" value="<?= $produto['id'] ?? '' ?>">

  <label for="nome">Nome do Produto:</label><br>
  <input type="text" id="nome" name="nome" required value="<?= $produto['nome'] ?? '' ?>"><br><br>

  <label for="descricao">Descrição:</label><br>
  <textarea id="descricao" name="descricao"><?= $produto['descricao'] ?? '' ?></textarea><br><br>

  <label for="preco">Preço:</label><br>
  <input type="number" step="0.01" id="preco" name="preco" required value="<?= $produto['preco'] ?? '' ?>"><br><br>

  <button type="submit">Salvar</button>
</form>