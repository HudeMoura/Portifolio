<?php
require('head.php'); 
require('menu.php');
?>
<div class="pageRegister">
    <div class="boxRegister">
        <div class="title">
            <h1>Novo cadastro</h1>
        </div>
        <div class="caduser">
            <form action="?page=salvar" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label"><i class="bi bi-person"></i></label>
                <div class="col-sm-10">
                <input type="text" id="inputName" class="form-control" placeholder="Nome completo">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputCpf" class="col-sm-2 col-form-label"><i class="bi bi-person-vcard"></i></label>
                <div class="col-sm-10">
                <input type="text" id="inputCpf" class="form-control" placeholder="***.***.***-**">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputDate" class="col-sm-2 col-form-label"><i class="bi bi-calendar3"></i></label>
                <div class="col-sm-10">
                <input type="date" id="inputDate" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPhone" class="col-sm-2 col-form-label"><i class="bi bi-telephone"></i></label>
                <div class="col-sm-10">
                <input type="text" id="inputPhone" class="form-control" placeholder="(**) *****-****">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputCep" class="col-sm-2 col-form-label"><i class="bi bi-house"></i></label>
                <div class="col-sm-10">
                <input type="text" id="inputCep" class="form-control" placeholder="CEP">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputAddreses" class="col-sm-2 col-form-label"><i class="bi bi-house"></i></label>
                <div class="col-sm-10">
                <input type="text" id="inputAddreses" class="form-control" placeholder="Endereço">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputNumber" class="col-sm-2 col-form-label"><i class="bi bi-house"></i></label>
                <div class="col-sm-10">
                <input type="text" id="inputNumber" class="form-control" placeholder="Numero">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputCity" class="col-sm-2 col-form-label"><i class="bi bi-house"></i></label>
                <div class="col-sm-10">
                <input type="text" id="inputCity" class="form-control" placeholder="Cidade">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputState" class="col-sm-2 col-form-label"><i class="bi bi-house"></i></label>
                <div class="col-sm-10">
                <input type="text" id="inputState" class="form-control" placeholder="Estado">
                </div>
            </div>
            </form>
        </div>
        <div class="btnRegister">
            <a href="parts/home.php"><button class="btn btn-success logarBtn" title="Limpar"><b class="icon icon-paper-plane-o"><i class="bi bi-eraser"></i> Limpar</b></button></a>
            <a href="parts/home.php"><button class="btn btn-success logarBtn" title="Salvar"><b class="icon icon-paper-plane-o"><i class="bi bi-floppy"></i> Salvar</b></button></a>
        </div>
    </div>
</div>
<?php
require('footer.php');
?>