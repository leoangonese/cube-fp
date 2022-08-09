<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "<div style='color:white;'>Preencha seu e-mail</div>";
    } else if(strlen($_POST['senha']) == 0) {
        echo "<div style='color:white;'>Preencha sua senha</div>";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ./view/index.php");

        } else {
            echo "<div style='color:white;'>Falha ao logar! E-mail ou senha incorretos
            </div>";
        }

    }

}
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
    <title>Cube - Login</title>
</head>


<body class='bg-dark'>
    <div>
        <h3 class="text-center text-success pt-5">Cube Login</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form " action="" method="post">

                            <div class="form-group">
                                <label for="email" class="text-success">Nome:</label><br>
                                <input type="text" name="email" class="form-control text-dark">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-success">Senha:</label><br>
                                <input type="password" name="senha" class="form-control text-dark">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="acao" class="btn btn-outline-success btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>