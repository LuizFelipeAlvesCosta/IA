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
		      <!-- As mensagens do chat aparecerão aqui -->
		        <div id="entrada">&nbsp;&nbsp;&nbsp;<b>Usuário </b> : <?php echo $texto; ?></div>
		        <br>
		        <div id="sistema">&nbsp;&nbsp;&nbsp;<b>Sistema </b> : <?php echo $texto_exibir; ?> <br> 
		      					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $texto_exibir1; ?>		 
		      	</div>
		    </div>
		    
		    <!-- Formulário para enviar mensagens -->
		    <?php
		        	 $x = null;
                     echo $this->Form->create($x,['url' => ['controller' => 'Control','action' => 'calculo']]);
            ?>  
            <div style = "display :none";>
            	<?php
            		echo $this->Form->input('texto_usuario',['id'=>'texto_usuario','value' => $texto]);
            		echo $this->Form->input('texto_exibir',['id'=>'texto_exibir','value' => $texto_exibir]);
            		echo $this->Form->input('texto_exibir1',['id'=>'texto_exibir1','value' => $texto_exibir1]);
            	?>

            </div>
		    <div class="input-group">

			      <input type="text" id="numero" name="numero" class="form-control" 
			      placeholder="Digite a número para calcular" />

			      <span class="input-group-btn">
			        <button class="btn btn-primary" type="submit" id="send-btn">Calcular</button>
			      </span>

		    </div>
		    <?= $this->Form->end();   ?>

		  </div>
		</div>

      </div>
    </div>
  </div>
</section>

 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>