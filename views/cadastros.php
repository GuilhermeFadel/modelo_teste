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

    a.btn-primary {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1em;
        color: white;
        background-color: #4CAF50;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        margin-bottom: 20px;
    }

    a.btn-primary:hover {
        background-color: #45a049;
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

    /* Estilo dos botões de ações */
    .btn-outline-dark {
        border: none;
        cursor: pointer;
        font-size: 1.2em;
        transition: transform 0.2s;
    }

    .btn-outline-dark:hover {
        transform: scale(1.2);
    }

    .btn-outline-dark i {
        margin: 0;
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
    <h4>Cadastro</h4>
    <a type="button" class="btn btn-primary" href="?pagina=novoCadastro">
        <i class="bi bi-plus"></i> Cadastrar
    </a>
    <div>
        <table id="table_id" class="cell-border">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($linha = mysqli_fetch_array($consultaCadastros)) {
                    echo '<tr>
                            <td style="word-wrap: break-word">' . $linha['nome'] . '</td>';
                    echo '<td>
                        <div class="row">
                            <div class="col-6">
                                <form method="post" action="?pagina=editaCadastro">
                                    <select style="display:none" name="id">
                                        <option value="' . $linha['id'] . '" selected>' . $linha['id'] . '</option>
                                    </select>
                                    <button type="submit" class="btn btn-outline-dark" style="color: green;">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="col-6">
                                <form method="post" action="deletaCadastro.php">
                                    <select style="display:none" name="id">
                                        <option value="' . $linha['id'] . '" selected>' . $linha['id'] . '</option>
                                    </select>
                                    <button type="submit" class="btn btn-outline-dark" style="color: red;">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
