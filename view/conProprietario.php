<?php
 
include "../model/proprietario.class.php";
session_start();

?>

<?php include "head.php"; ?>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
		   <?php
		     include "menu.php";
		  
		 ?>
		</nav>

		<div class="main bg-dark">
		<nav class="navbar navbar-expand navbar-light navbar-bg bg-success">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center text-dark"></i>
				</a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
		    			    <a class="dropdown-item" href="../login.php">Log out</a>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle text-success">CONSULTA PROPRIETÁRIO</h1>						
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<form action="#" method="GET">
								<div class="row">	
									<div class="col-12 col-lg-6">
										<input type="text" id='aqui' name="mes" class="form-control bg-success border-success .text-dark" placeholder="Digite o Mes">
									</div>
									<div class="col-12 col-lg-6">	
										<button class="btn btn-outline-success" type="submit">BUSCAR</button>
										<button class="btn btn-outline-danger" type="cancel">LIMPAR</button>
									</div>	
								</div>	
							</form>
						</div>
					</div>
					<div class="row">
						<?php
                         

							if(isset($_SESSION['prop'])){
								echo "<table class='table text-success'>";
								echo "<tr><th>Mês</th><th>Ganhos</th><th>Gastos</th><th>Aportes</th><th>Dividendos</th></tr>";
								foreach($_SESSION['prop'] as $i=>$proprietario){
									$m = $proprietario->getMes();
									$g = $proprietario->getGanhos();
									$gs = $proprietario->getGastos();
									$a = $proprietario->getAportes();
									$d = $proprietario->getDividendos();

									if(isset($_GET['mes']) && (str_contains($m,$_GET['mes']))									
									){	
										
										echo "<tr>
										
										<div class='row'>
										
										<form action='#' method='GET'>
										<input type='hidden' name='cod' value='$i'>
										<input type='hidden' name='mes' value='$m'>          
										</form> 
										</div>    
										<td>
										$m  
										</td>       
										<td>R$ $g</td><td>R$ $gs</td><td>R$ $a</td><td>R$ $d</td>
										</tr>";  
									} 
								}    
								
								echo "</table>";
							}
							
							?>
							<!-- <td>
										<button type='submit' class='btn-danger'>
										<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-trash-2 align-middle me-2'><polyline points='3 6 5 6 21 6'></polyline><path d='M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2'></path><line x1='10' y1='11' x2='10' y2='17'></line><line x1='14' y1='11' x2='14' y2='17'></line></svg>
										
										
										</button></td> -->
					</div>		

				</div>
			</main>

			<footer class="footer bg-success">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="text-center">
							<p class="mb-0">
							<a class="text-muted" href="https://github.com/leoangonese/cube-fp" target='blank'><strong class='text-dark'>Todos os direitos reservados Cube&copy;</strong> <br>
								<a class="text-muted" href="https://github.com/leoangonese/cube-fp" target='blank'><strong class='text-dark'>Leonardo Angonese & João Victor Silveira</strong>
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