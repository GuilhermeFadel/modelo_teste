<br>
<div class="caixa">
    <h4>Novo Cadastro</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br> 
    <form method="post" action="insereCadastro.php" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Tema</label>
            <input type="text" class="form-control" id="obs" name="obs">
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Título</label>
            <input type="text" class="form-control" id="tit" name="tit">
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Autor</label>
            <input type="text" class="form-control" id="aut" name="aut">
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Resumo</label>
            <input type="text" class="form-control" id="res" name="res">
        </div>
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>   

</div>
<br><br>