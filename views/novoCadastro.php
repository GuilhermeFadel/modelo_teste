<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cadastro</title>
    <style>
        /* Estilo geral */
        body {
            margin: 0;
            padding: 0;
            background-color: orange; 
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .caixa {
            width: 100%;
            max-width: 500px;
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .caixa h4 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn-primary {
            margin-top: 10px;
        }

        a.btn-primary {
            display: inline-block;
            width: auto;
        }

        i.bi-backspace {
            margin-right: 5px;
        }

        /* Espaçamento adicional */
        .mb-3 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="caixa">
        <h4>Novo Cadastro</h4>
        <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
        <form method="post" action="insereCadastro.php" autocomplete="off">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="obs" class="form-label">Tema</label>
                <input type="text" class="form-control" id="obs" name="obs">
            </div>
            <div class="mb-3">
                <label for="tit" class="form-label">Título</label>
                <input type="text" class="form-control" id="tit" name="tit">
            </div>
            <div class="mb-3">
                <label for="aut" class="form-label">Autor</label>
                <input type="text" class="form-control" id="aut" name="aut">
            </div>
            <div class="mb-3">
                <label for="res" class="form-label">Resumo</label>
                <input type="text" class="form-control" id="res" name="res">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>
