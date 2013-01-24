<div class="contacto">

	<div class="row-fluid">
		<div class="jumbotron">
	    	<h4><?php echo $this->Html->image('contacto.png'); ?></h4>
		</div>
	</div>

	<div class="row-fluid container-narrow">

		<div class="span4">
			<div class="row-fluid"><?php echo $this->Html->image('izq.png'); ?></div>
			<div class="row-fluid bhiblue">
				<div class="row-fluid"><?php echo $this->Html->image('icon.png').' bhi@bhisa.com.ar'; ?></div>
				<div class="row-fluid"><?php echo $this->Html->image('icon.png').' Tel. / Fax: (+54-291) 4548306' ?></div>
				<div class="row-fluid"><?php echo $this->Html->image('icon.png'). ' Bahia Blanca <br>
																					Provincia Buenos Aires <br>  
																					Argentina' ?></div>
			</div>
		</div>
		<div class="span4">
			<div class="row titmedio"><?php echo $this->Html->image('medio.png'); ?></div>
			<?php echo $this->Form->create('Contacto', array(
											    'inputDefaults' => array(
											        'label' => false,
											        'div' => false
											    ))); ?>
			<div class="row-fluid"><?php echo $this->Html->image('icon.png').$this->Form->input('nombre',array('placeholder'=>'su nombre (obligatorio)') ); ?></div>
			<div class="row-fluid marginleft10"><?php echo $this->Form->input('email',array('placeholder'=>'su e-mail (obligatorio)') ); ?></div>
			<div class="row-fluid marginleft10"><?php echo $this->Form->input('telefono',array('placeholder'=>'su telefono') ); ?></div>
			<div class="row-fluid marginleft10"><?php echo $this->Form->textarea('mensaje',array('row'=>20,'collumn'=>30,'placeholder'=>'Escriba su mensaje aqui') ); ?></div>
			<div class="row-fluid marginleft10"><?php echo $this->Form->end('Enviar'); ?></div>
		</div>
		<div class="span4">
			<div class="row"><?php echo $this->Html->image('der.png'); ?></div>
			<p>Si crees que puedes entrar a formar parte de nuestra plantilla env&iacute;anos tu curriculum actualizado a la direcci&oacute;n de correo que te facilitamos m&oacute;s abajo y nuestros encargados de Recursos Humanos lo tendr&oacute;n en cuenta para las futuras incorporaciones.</p>
			<p>Envianos tu cv a: <a href="mailto:bhi@bhisa.com.ar" class="bhiblue">bhi@bhisa.com.ar</a> </p>
		</div>

	</div>

</div>