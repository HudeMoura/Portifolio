<?php 
    switch($_REQUEST["acao"]){
        case 'register':
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $data_nasc = $_POST["data_nasc"];
            $tel = $_POST["tel"];
            $cep = $_POST["cep"];
            $endereco = $_POST["endereco"];
            $numero = $_POST["numero"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];

            $sql = "INSERT INTO userlist (nome, cpf, data_nasc, tel, cep, endereco, numero, cidade, estado) VALUES ('{$nome}', '{$cpf}', '{$data_nasc}', '{$tel}', '{$cep}', '{$endereco}', '{$numero}', '{$cidade}', '{$estado}')";

            $res = $conn -> query($sql);

            if($res==true){
                print "<script>alert('Cadastro efetuado com sucesso');</script>";
                print "<script>location.href='?page=list';</script>";
            } else{
                print "<script>alert('Não foi possível cadastrar.');</script>";
                print "<script>location.href='?page=list';</script>";
            }
        break;
        case 'edit':
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $data_nasc = $_POST["data_nasc"];
            $tel = $_POST["tel"];
            $cep = $_POST["cep"];
            $endereco = $_POST["endereco"];
            $numero = $_POST["numero"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];

            $sql = "UPDATE userlist SET
                    nome = '{$nome}',
                    cpf = '{$cpf}',
                    data_nasc = '{$data_nasc}',
                    tel = '{$tel}'
                    cep = '{$cep}',
                    endereco = '{$endereco}',
                    numero = '{$numero}',
                    cidade = '{$cidade}',
                    estado = '{$estado}',
                    WHERE 
                        id=".$_REQUEST["id"];

            $res = $conn -> query($sql);

            if($res==true){
                print "<script>alert('Cadastro editado com sucesso');</script>";
                print "<script>location.href='?page=list';</script>";
            }else{
                print "<script>alert('Não foi possível editar o cadastro.');</script>";
                print "<script>location.href='?page=list';</script>";
            }
        break;
        case 'delete':
            $sql = "DELETE FROM userlist WHERE id=".$_REQUEST["id"];

            $res = $conn -> query($sql);

            if($res==true){
                print "<script>alert('Cadastro excluido com sucesso');</script>";
                print "<script>location.href='?page=list';</script>";
            }else{
                print "<script>alert('Não foi possível excluir o cadastro.');</script>";
                print "<script>location.href='?page=list';</script>";
            }
        break;
    }
?>