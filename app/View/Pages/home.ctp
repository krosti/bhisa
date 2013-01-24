<div class="row-fluid">
  <div class="jumbotron">
    <h3><?php echo $this->Html->image('nuestraempresa.png'); ?></h3>
    <p class="lead">
      bhi sa es una empresa joven que inicia sus actividades en la ciudad de Bah&iacute;a Blanca a partir de la asociaci&oacute;n de diversos profesionales con la misma intenci&oacute;n, formar una empresa dedicada a la ejecuci&oacute;n de ingenier&iacute;a que se destaque en el mercado por garantizar una ejecuci&oacute;n competitiva y adecuada siempre a las necesidades espec&iacute;ficas de cada cliente.
    </p>
    <p><?php echo $this->Html->link('Leer mas..','/quienes-somos'); ?></p>
  </div>
</div>

<div class="container-narrow">
  <div class="row-fluid marketing">
  	<div class="span4 boxcustom">
  	  <div class="flechita"><?php echo $this->Html->image('flechita.png'); ?></div>
  	  <h4><?php echo $this->Html->image('experiencia.png'); ?></h4>
  	  <p>EQUIPO ALTAMENTE ESPECIALIZADO</p>
  	  <p>
  	  	Nuestro grupo de profesionales y técnicos posee una amplia experiencia en el desarrollo de Ingeniería de proyectos, lo que garantiza una ejecución competitiva y adecuada siempre a las necesidades específicas de cada cliente.
  	  </p>
  	  <div class="footercustombox1">
        <?php echo $this->Html->image('footercustombox.png'); ?>
        <p class="leyenda1"><?php echo $this->Html->link('Contactenos','/contacto'); ?></p>
      </div>
  	</div>

  	<div class="span4 boxcustom">
  	  <div class="flechita"><?php echo $this->Html->image('flechita.png'); ?></div>
  	  <h4><?php echo $this->Html->image('servicios.png'); ?></h4>
  	  <div class="points"></div>
  	  <p>Nuestro Departamento de Ingeniería está conformado por un grupo de profesionales y técnicos de amplia experiencia, lo que nos permite ofrecer un calificado servicio en el estudio personalizado de cada proyecto, pudiendo además prestar asesoramiento en la búsqueda de la mejor solución técnico-constructiva acorde a la necesidad de cada proyecto.</p>
  	  <div class="footercustombox2">
        <?php echo $this->Html->image('footercustombox2.png'); ?>
        <p class="leyenda2"><?php echo $this->Html->link('Leer mas -->','/servicios'); ?></p>
      </div>
  	</div>
  	<div class="span4 ultimosproyectos">
  		<h4><?php echo $this->Html->image('ultimosproyectos.png'); ?></h4>
      <div class="media proyecto">
    		<?php foreach ($proyectos as $proyecto): ?>
            <div class="media-body">
              <h6 class="media-heading">
                <?php echo $this->Html->link($proyecto['Client']['name'],'/projects/cliente/'.$proyecto['Project']['id']); ?>
              </h6>
              <h6 class="offset8" style="margin-top: -25px; margin-left:76%;">
                <?php echo $this->Html->link(
                              $this->Time->format('d/m/Y',$proyecto['Project']['created']),
                              '/projects/cliente/'.$proyecto['Project']['id']); 
                ?>
              </h6>
              <p class="desc"><?php echo $proyecto['Project']['description']; ?></p>
            </div>
          <div class="blueLine"></div>
    		<?php endforeach ?>
      </div>
      <p><?php echo $this->Html->image('ultimosproyectos-flechita.png'); ?></p>
      <p><?php echo $this->Html->link('VER M&Aacute;S PROYECTOS','/proyectos',array('escape'=>false)); ?></p>
  	</div>
  </div>
  <div class="container-fluid nuestrosclientes-home">

      <div class="row-fluid">
        <h4><?php echo $this->Html->image('nuestrosclientes.png'); ?></h4>
      </div>
      <div class="row-fluid container">
          <div id="clientesCarousel" class=" slide">
            <ul class="roundabout-holder">
              <?php foreach ($clientes as $cliente): ?>
                <li style="background:red">
                  <?php echo $this->Html->image('/images-uploaded/'.$cliente['Client']['logo'],array('width'=>160,'height'=>180,'class'=>'img-polaroid') ) ?>
                </li>
              <?php endforeach ?>
            </ul>
          </div>
      </div>

  </div>
</div>