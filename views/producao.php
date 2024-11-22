<br>
<div class="caixa">
    <h4>Produção</h4>
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
