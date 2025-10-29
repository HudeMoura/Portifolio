<h1>Listar Usuários</h1>
<?php 
    $sql = "SELECT * FROM userlist";

    $res = $conn ->  query($sql);

    $qtd = $res -> num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>CPF</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Telefone</th>";
        print "<th>CEP</th>";
        print "<th>Endereço</th>";
        print "<th>Numero</th>";
        print "<th>Cidade</th>";
        print "<th>Estado</th>";
        print "</tr>";
        while($row = $res -> fetch_object()) {
            print "<tr>";
            print "<td>".$row -> id."</td>";
            print "<td>".$row -> nome."</td>";
            print "<td>".$row -> cpf."</td>";
            print "<td>".$row -> data_nasc."</td>";
            print "<td>".$row -> tel."</td>";
            print "<td>".$row -> cep."</td>";
            print "<td>".$row -> endereco."</td>";
            print "<td>".$row -> numero."</td>";
            print "<td>".$row -> cidade."</td>";
            print "<td>".$row -> estado."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=edit&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=save&acao=delete&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'> Não encontrou resultador!</p>";
    }
?>