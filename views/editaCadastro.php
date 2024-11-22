<?php

include 'db.php';

$id = $_POST['id'];

while ($linha = mysqli_fetch_array($consultaCadastros)) {
    if ($linha['id'] == $_POST['id']) {
?>

<br>
<div class="caixa">
    <h4>Cadastro</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br> 
    <form method="post" action="processaEditaCadastro.php" autocomplete="off">
        <input value="<?php echo $linha['id'] ?>" type="text" class="form-control" id="id" name="id" style="display:none;">
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Nome</label>
            <input value="<?php echo $linha['nome'] ?>" type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Tema</label>
            <input value="<?php echo $linha['obs'] ?>" type="text" class="form-control" id="obs" name="obs">
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Título</label>
            <input value="<?php echo $linha['tit'] ?>" type="text" class="form-control" id="tit" name="tit">
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Autor</label>
            <input value="<?php echo $linha['aut'] ?>" type="text" class="form-control" id="aut" name="aut">
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Resumo</label>
            <input value="<?php echo $linha['res'] ?>" type="text" class="form-control" id="res" name="res">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>   

</div>
<br><br>

<?php
    }
}