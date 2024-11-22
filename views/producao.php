<style>
  body {
    background: url('img/artigo.jpg') no-repeat center center fixed; /* Imagem de fundo */
    background-size: cover; /* Faz com que a imagem cubra toda a tela */
}


    .caixa {
        padding: 20px;
    }

    #table_id {
        border-collapse: collapse;
        width: 100%;
    }

    #table_id th, #table_id td {
        padding: 10px;
        border: 1px solid #ddd;
    }
</style>

<div class="caixa">
    <h4>Registros</h4>
    <br><br>
    <div>
        <table id="table_id" class="cell-border">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Tema</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Resumo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($linha = mysqli_fetch_array($consultaCadastros)) {
                    echo '<tr>
                            <td style="word-wrap: break-word">' 
                                . $linha['nome'] . 
                            '</td>';
                    echo '<td>' . $linha['obs'] . '</td>';
                    echo '<td>' . $linha['tit'] . '</td>';
                    echo '<td>' . $linha['aut'] . '</td>';
                    echo '<td>' . $linha['res'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
