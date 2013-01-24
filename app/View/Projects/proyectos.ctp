<div class="proyectos">
	<div class="row-fluid">
		<div class="jumbotron">
			<h4><?php echo $this->Html->image('proyectos.png'); ?></h4>
		</div>
	</div>
	<div class="container-fluid container-narrow">
		<div class="row-fluid">
			<?php echo $this->Html->image('proyectos-tit.png',array('style'=>'width:100%;') ); ?>
		</div>
		<div class="row-fluid clientes">
			<div class="span4">
				<ul class="nav">
					<?php foreach ($clientes as $cliente): ?>
						<li><?php echo $this->Html->link($cliente['Client']['name'],'/projects/cliente/'.$cliente['Client']['id']); ?></li>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="span8 proys">
				<div class="media proyecto">
			  		<?php foreach ($proyectos as $proyecto): ?>
			          <div class="media-body">
			            <h6 class="media-heading uppercase">
			              <?php echo $this->Html->link($proyecto['Client']['name'].' | '.$proyecto['Project']['title'],'/projects/cliente/'.$proyecto['Project']['client_id']); ?>
			            </h6>
			            <h6 class="pull-right" style="margin-top: -25px; margin-left:76%;">
			              <?php echo $this->Html->link(
			                            $this->Time->format('d/m/Y',$proyecto['Project']['created']),
			                            '/projects/cliente/'.$proyecto['Project']['client_id']); 
			              ?>
			            </h6>
			            <p class="desc"><?php echo $proyecto['Project']['description']; ?></p>
			            <p>
			            	<?php if ( $proyecto['Project']['image_1']): ?>
			            		<?php echo $this->Html->link(
										$this->Html->image('/images-uploaded/'.$proyecto['Project']['image_1'],array('width'=>60,'class'=>'img-polaroid') ),
										'/images-uploaded/'.$proyecto['Project']['image_1'],
										array('rel'=>'lightbox','escape'=>false)
									); ?>
			            	<?php endif; ?>
			            	<?php if ( $proyecto['Project']['image_2']): ?>
			            		<?php echo $this->Html->link(
										$this->Html->image('/images-uploaded/'.$proyecto['Project']['image_2'],array('width'=>60,'class'=>'img-polaroid') ),
										'/images-uploaded/'.$proyecto['Project']['image_2'],
										array('rel'=>'lightbox','escape'=>false)
									); ?>
			            	<?php endif; ?>
			            	<?php if ( $proyecto['Project']['image_3']): ?>
			            		<?php echo $this->Html->link(
										$this->Html->image('/images-uploaded/'.$proyecto['Project']['image_3'],array('width'=>60,'class'=>'img-polaroid') ),
										'/images-uploaded/'.$proyecto['Project']['image_3'],
										array('rel'=>'lightbox','escape'=>false)
									); ?>
			            	<?php endif; ?>
			            </p>
			          </div>
			        <div class="blueLine"></div>
			  		<?php endforeach; ?>
			    </div>
			</div>
		</div>
	</div>

</div>