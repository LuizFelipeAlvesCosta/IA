<style>
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
		        <div id="sistema">&nbsp;&nbsp;&nbsp;<b>Sistema </b> : Olá Seja Bem Vindo, <br>
		        &nbsp;&nbsp;&nbsp;Vamos começar <br>
		        &nbsp;&nbsp;&nbsp;Em que eu posso te ajudar hoje ?		 
		      	</div>
		    </div>
		    
		    <!-- Formulário para enviar mensagens -->
		    <?php
		        	 $x = null;
                     echo $this->Form->create($x,['url' => ['controller' => 'Control','action' => 'tabuada']]);
            ?>  
		    <div class="input-group">

			      <input type="text" id="message-input" name="message-input" class="form-control" placeholder="Digite a palavra TABUADA e clique em começar..." />

			      <span class="input-group-btn">
			        <button class="btn btn-primary" type="submit" id="send-btn">Começar</button>
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