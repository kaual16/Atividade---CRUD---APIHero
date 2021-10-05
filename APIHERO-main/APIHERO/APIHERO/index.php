<?php 

	require_once 'conexao/conexao.php';

	
	include_once 'includes/header.php';

	include_once 'includes/mensagem.php';
?>


<div class="row">
		<div class="col s12 m6 push-m3">
			<center>
			
			<h2 class="light" >Lista dos heróis</h3>

			</center>
			
			<table class="row">
			<thead class="card-panel pink darken-1">
				<tr>
					
					<th>Nome</th>
					<th>Nome real do herói</th>
					<th>Avaliação</th>
					<th>Afiliação da equipe</th>

					
					<th colspan="4" >Ações</th>
				</tr>				
			</thead>


			<tbody>
				<?php 

					$sql = "SELECT * FROM tbherois";

					$resultado = mysqli_query($connection, $sql);

						
					while($dados = mysqli_fetch_array($resultado)){

					?>


					<tr>
							<td><?php echo $dados['ProNome']; ?></td>
							<td><?php echo $dados['ProCategoria']; ?></td>
							<td><?php echo $dados['ProMarca ']; ?></td>
							<td><?php echo $dados['ProPreco']; ?></td>
							

							<td><a href="alterar.php?id=<?php echo $dados['ProCod']; ?>" class="btn-floating purple darken-4"><i class="material-icons">edit</i></a></td>

							<td><a href="#modal<?php echo $dados['ProCod']; ?>" class="btn-floating pink darken-1 modal-trigger"><i class="material-icons">delete</i></a></td>

							<div id="modal<?php echo $dados['ProCod']; ?>" class="modal">
							    <div class="modal-content">
							      <h4>Aviso.</h4>
							      <p>Deseja excluir o cliente?</p>
							    </div>
							    <div class="modal-footer">
							      

							      	<form action="conexao/excluir_heroi.php" method="POST">
							      	<input type="hidden" name="ProCod" value="<?php echo $dados['ProCod']; ?>">

							      	<button type="submit" name="btn-excluir" class="btn pink darken-1">Excluir</button>

							      	<a href="#!" class="modal-close waves-effect  purple darken-4 btn">Cancelar</a>

							      </form>
							    </div>
							  </div>

						</tr>
						
					<?php }

					?>
					
			</tbody>

			</table>
			<br>
			<div class="">
			<a href="cadastrar.php" class="pink darken-1 btn-small">Adicionar Herói</a>
			</div><br><br><br><br>
			</div><br><br><br><br>
			</div><br><br><br><br>
			</div><br><br><br><br>



			<footer class="page-footer purple darken-4" >
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h7 class="white-text">Rodapé</h7>
                <p class="grey-text text-lighten-4">HERO API PWIII</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h7 class="white-text">Links</h7>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://github.com/kaual16">https://github.com/kaual16</a></li>
				  <li><a class="grey-text text-lighten-3" href="https://github.com/LucasPatrickF">https://github.com/LucasPatrickF</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container" align="center">
            © 2021 Copyright Kauã e Lucas 
            </div>
          </div>
        </footer>


		</div>		
	</div>

<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>



