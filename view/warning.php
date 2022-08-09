<?php
 
include "../model/proprietario.class.php";
session_start();
?>

<?php include "head.php"; ?>

<body>
    <div class="wrapper">

        <div class="main bg-dark">

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle text-success"><?php die("Você não pode acessar esta página porque não está logado.<p><a href=\"../index.php\">Entrar</a></p>"); ?> <h1>
                    </div>


                </div>
            </main>

            <footer class="footer bg-success">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="text-center">
                            <p class="mb-0">
                                <a class="text-muted" href="https://github.com/leoangonese/cube-fp"
                                    target='blank'><strong class='text-dark'>Todos os direitos reservados
                                        Cube&copy;</strong> <br>
                                    <a class="text-muted" href="https://github.com/leoangonese/cube-fp"
                                        target='blank'><strong class='text-dark'>Leonardo Angonese & João Victor
                                            Silveira</strong>
                            </p>
                        </div>

                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="js/app.js"></script>

</body>

</html>