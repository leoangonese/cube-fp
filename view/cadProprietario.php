<?php
 
include "../model/proprietario.class.php";
session_start();

?>
<html lang="en">

<?php include "head.php"; ?>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <?php
		     include "menu.php";
		  
		 ?>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg bg-success">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">



                        <button type='button' class='btn btn-outline-dark'><a href="../index.php">Sair</a></button>



                    </ul>
                </div>
            </nav>

            <main class="content bg-dark">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle text-success">CADASTRO DE PROPRIETÁRIO</h1>
                    </div>
                    <form action="../controller/registrar.php" method="GET">
                        <div class="row">

                            <div class="col-12 col-lg-8 ">
                                <div class="card bg-success">
                                    <div class="card-header bg-success">
                                        <h5 class="card-title mb-0 text-dark">Mes</h5>
                                    </div>
                                    <div class="card-body">
                                        <select name="mes" class="form-control bg-dark text-success border-dark">
                                            <option value="Janeiro">Janeiro</option>
                                            <option value="Fevereiro">Fevereiro</option>
                                            <option value="Março">Março</option>
                                            <option value="Abril">Abril</option>
                                            <option value="Maio">Maio</option>
                                            <option value="Junho">Junho</option>
                                            <option value="Julho">Julho</option>
                                            <option value="Agosto">Agosto</option>
                                            <option value="Setembro">Setembro</option>
                                            <option value="Outubro">Outubro</option>
                                            <option value="Novembro">Novembro</option>
                                            <option value="Dezembro">Dezembro</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="card bg-success">
                                    <div class="card-header bg-success">
                                        <h5 class="card-title mb-0 text-dark">Ganhos</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" name="ganhos"
                                            class="form-control bg-dark text-success border-dark"
                                            placeholder="Digite os seus ganhos">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="card bg-success">
                                    <div class="card-header bg-success">
                                        <h5 class="card-title mb-0 text-dark">Gastos</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" name="gastos"
                                            class="form-control bg-dark text-success border-dark"
                                            placeholder="Digite os seus gastos">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="card bg-success">
                                    <div class="card-header bg-success">
                                        <h5 class="card-title mb-0 text-dark">Aportes</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" name="aportes"
                                            class="form-control bg-dark text-success border-dark"
                                            placeholder="Digite os seus aportes">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="card bg-success">
                                    <div class="card-header bg-success">
                                        <h5 class="card-title mb-0 text-dark">Dividendos</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" name="dividendos"
                                            class="form-control bg-dark text-success border-dark"
                                            placeholder="Digite o Mes">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-lg-12" style="text-align:left;">
                            <button type="submit" class="btn btn-success btn-lg text-dark">Cadastrar</button>
                        </div>
                    </form>


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