<?php
    $sql = "SELECT * FROM userlist WHERE id=".$_REQUEST["id"]; // Seleciono todos do banco usuários trazendo o ID 
    $res = $conn -> query($sql); // Resultado vai executar a conexão com meu SQL
    $row = $res -> fetch_object(); // Trazendo o resultado
?>
<form action="?page=save" method="POST"> <!-- Vai enviar para essa pagina para salvar -->
    <input type="hidden" name="acao" value="edit"> <!-- Todos os dados para a pagina salvar mas em ação oculta para nao ver o URL-->
    <input type="hidden" name="id" value="<?php print $row->id; ?>"> <!-- Id obrigatorio para edição -->
    <div class="mb-3">
        <label for="name">Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="cpf">CPF</label>
        <input type="email" name="cpf" value="<?php print $row->cpf; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="data_nasc">Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="tel">Telefone</label>
        <input type="text" name="tel" value="<?php print $row->tel; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="cep">CEP</label>
        <input type="text" name="cep" value="<?php print $row->cep; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" value="<?php print $row->endereco; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="numero">Numero</label>
        <input type="text" name="numero" value="<?php print $row->numero; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" value="<?php print $row->cidade; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="estado">Estado</label>
        <input type="text" name="estado" value="<?php print $row->estado; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>