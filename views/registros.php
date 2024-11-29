<style>
    /* Estilo geral da página */
    body {
        background: linear-gradient(to right, green, yellow); /* Gradiente de fundo */
        color: #fff; /* Cor do texto para contrastar com o fundo */
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .caixa {
        padding: 20px;
        background-color: orange; 
        border-radius: 10px;
        max-width: 1200px;
        margin: 50px auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    h4 {
        text-align: center;
        font-size: 1.8em;
        margin-bottom: 20px;
        text-transform: uppercase;
        color: green; 
    }

    /* Estilo da tabela */
    #table_id {
        border-collapse: collapse;
        width: 100%;
        background-color: #fff; /* Fundo branco */
        color: #333; /* Texto escuro */
        border-radius: 10px;
        overflow: hidden;
    }

    #table_id th {
        background-color: #4CAF50; /* Verde */
        color: white;
        text-align: center;
        padding: 15px;
    }

    #table_id td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: center;
        word-wrap: break-word;
    }

    #table_id tr:nth-child(even) {
        background-color: #f2f2f2; /* Linhas pares com fundo cinza claro */
    }

    #table_id tr:hover {
        background-color: #ddd; /* Efeito hover nas linhas */
    }

    /* Ajuste para responsividade */
    @media (max-width: 768px) {
        .caixa {
            padding: 10px;
        }

        h4 {
            font-size: 1.5em;
        }

        #table_id th, #table_id td {
            padding: 8px;
        }
    }
</style>

<div class="caixa">
    <h4>Registros</h4>
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
