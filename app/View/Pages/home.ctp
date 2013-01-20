
<div class="row-fluid marketing">
	<div class="span4 boxcustom">
	  <div class="flechita"><?php echo $this->Html->image('flechita.png'); ?></div>
	  <h4><?php echo $this->Html->image('experiencia.png'); ?></h4>
	  <p>EQUIPO ALTAMENTE ESPECIALIZADO</p>
	  <p>
	  	Nuestro grupo de profesionales y técnicos posee una amplia experiencia en el desarrollo de Ingeniería de proyectos, lo que garantiza una ejecución competitiva y adecuada siempre a las necesidades específicas de cada cliente.
	  </p>
	  <div class="footercustombox"><?php echo $this->Html->image('footercustombox.png'); ?></div>
	</div>

	<div class="span4 boxcustom">
	  <div class="flechita"><?php echo $this->Html->image('flechita.png'); ?></div>
	  <h4><?php echo $this->Html->image('servicios.png'); ?></h4>
	  <div class="points"></div>
	  <p>Nuestro Departamento de Ingeniería está conformado por un grupo de profesionales y técnicos de amplia experiencia, lo que nos permite ofrecer un calificado servicio en el estudio personalizado de cada proyecto, pudiendo además prestar asesoramiento en la búsqueda de la mejor solución técnico-constructiva acorde a la necesidad de cada proyecto.</p>
	  <div class="footercustombox"><?php echo $this->Html->image('footercustombox.png'); ?></div>
	</div>
	<div class="span4 ultimosproyectos">
		<h4><?php echo $this->Html->image('ultimosproyectos.png'); ?></h4>
		<?php foreach ($proyectos as $proyecto): ?>
			<div class="media proyecto">
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
      </div>
      <div class="blueLine"></div>
		<?php endforeach ?>
    <p><?php echo $this->Html->image('ultimosproyectos-flechita.png'); ?></p>
    <p><?php echo $this->Html->link('VER M&Aacute;S PROYECTOS','#',array('escape'=>false)); ?></p>
	</div>
</div>
<div class="container-fluid nuestrosclientes-home">

    <div class="row-fluid">
      <h4><?php echo $this->Html->image('nuestrosclientes.png'); ?></h4>
    </div>
		<div class="row-fluid container">
			<div id="clientesCarousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://placekitten.com/885/250" alt="">
              <div class="carousel-caption">
                <h4>First Thumbnail label</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
            <div class="item">
              <img src="http://placekitten.com/885/250" alt="">
              <div class="carousel-caption">
                <h4>Second Thumbnail label</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
            <div class="item">
              <img src="http://placekitten.com/885/250" alt="">
              <div class="carousel-caption">
                <h4>Third Thumbnail label</h4>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#clientesCarousel" data-slide="prev">‹</a>
          <a class="right carousel-control" href="#clientesCarousel" data-slide="next">›</a>
        </div>
		</div>

</div>
