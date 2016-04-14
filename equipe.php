<?php include "header.php";?>
  <div class="container">
	<div class="row">
	<?php $funcionario = 1; while($funcionario <= 9): ?>
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="img/logo.jpg" alt="Membro da Empresa">
	      <div class="caption">
	        <h3>Nome do funcionário</h3>
	        <p>Descrição do funcionário: blablabla blabla bla bla blabla blala bla</p>
	        <p><a href="#" class="btn btn-primary" role="button">Facebook</a> <a href="#" class="btn btn-default" role="button">Twitter</a></p>
	      </div> 
	    </div>
	  </div>
	  <?php $funcionario++; endwhile; ?>
	</div>
  </div>	
<?php include "footer.php"; ?>