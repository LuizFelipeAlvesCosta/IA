<html>
  <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">

            <span class="info-box-icon bg-green">
              <?php
                echo $this->Html->link(__('<i class="fa fa-comment-o" aria-hidden="true"></i>'), 
                array('controller'=>'control','action'=>''), 
                array('class' => 'info-box-icon bg-green', 'escape' => false, 
                  'data-toggle'=>'tooltip', 'title' => 'Começar Chat'));
              ?>
            </span>

            <div class="info-box-content">
              <span class="info-box-number">Chat</span>
              <span class="info-box-text">Clique aqui começar</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

      </div>

  </section>
</html>

