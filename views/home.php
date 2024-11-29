<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Artigos Científicos</title>
    <style>
        
        .caixa {
            width: 100%;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }

        .caixa h3 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group input:focus {
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
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .alert {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            color: #fff;
            text-align: center;
        }

        .alert-danger {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="caixa">
        <!--Login-->
        <form method="post" action="login.php">
            <h3>Artigos Científicos Register</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" class="form-control" name="usu_login" placeholder="Digite seu login">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" name="usu_senha" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        <!--Fim Login-->

        <?php
            if (isset($_GET['erroLogin'])) {
                echo '
                    <div id="erroLogin" class="alert alert-danger" role="alert">
                        Erro! Tente novamente.
                    </div>
                ';
            }
        ?>
    </div>
</body>
</html>
