<style>
	#entrada {
	    background-color: #5882FA;
	    color: white;
	    font-size: 16px;  /* Ajuste o tamanho da fonte, se necessário */
	    line-height: 1.5;  /* Ajuste a altura da linha para melhor legibilidade */
	    border-radius: 20px;
	}
	#sistema{
		background-color: #A4A4A4;
	    color: white;
	    font-size: 16px;  /* Ajuste o tamanho da fonte, se necessário */
	    line-height: 1.5;  /* Ajuste a altura da linha para melhor legibilidade */
	    border-radius: 20px;
	}
</style>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

	    <div class="panel panel-success">
		  <div class="panel-heading" style="font-size:20px;">Painel <b>chat</b></div>
		  <div class="panel-body">
		    <!-- Área do chat -->
		    <div id="chat-box" style="border: 1px solid #ccc; padding: 10px; height: 300px; overflow-y: auto; margin-bottom: 10px;">

		      <div id="entrada">&nbsp;&nbsp;&nbsp;<b>Usuário </b> : <?php echo $texto; ?></div>
		      <br>
		      <div id="sistema">&nbsp;&nbsp;&nbsp;<b>Sistema </b> : <?php echo $texto_exibir; ?> <br> 
		      					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $texto_exibir1; ?>		 
		      </div>
		      <br>
		      <div id="entrada">&nbsp;&nbsp;&nbsp;<b>Usuário </b> : <?php echo $numero; ?></div>
		      <br>
		      <div id="sistema">
		      	&nbsp;&nbsp;&nbsp;<b>Sistema </b> : <?php echo $texto_calculo; ?> <br> 

		      	<?php 
		      		$tabuada[] = '';
			        for ($i = 1; $i <= 10; $i++) {
			            $tabuada[] = "{$i} x {$numero} = " . ($numero * $i);
			        }

			        foreach ($tabuada as $linha) {
					    echo "&nbsp;&nbsp;&nbsp;". $linha . "<br>";
					}

					echo "&nbsp;&nbsp;&nbsp;".$texto_fim_calculo;
		      	?>
		      </div>

		    </div>
		    
		    <div class="input-group">
			        <?php
			          echo $this->Html->link(__('Finalizar'), 
			          array('controller'=>'Control','action'=>'index'), 
			          array('class'=>'btn btn-warning', 'escape' => false,'data-toggle'=>'tooltip'));
			        ?>
		    </div>

		  </div>
		</div>

      </div>
    </div>
  </div>
</section>

 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>