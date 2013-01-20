<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'bhi sa - Argentina');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('index','/assets/css/bootstrap','/assets/css/bootstrap-responsive','bhi'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php echo $this->Html->script(array(
		//'jsTTT/error-handler'
	)); ?>
	
</head>
<body>
	<div class="container-narrow">
		<div class="row-fluid offset5 header">
			<ul class="inline">
				<li>inicio</li>
				<li>quienes somos</li>
				<li>servicios</li>
				<li>proyectos</li>
				<li>contacto</li>
			</ul>
		</div>
		<div class="row-fluid">
			
			<div class="span6 top-logo">
				<?php echo $this->Html->image('logobhi.png'); ?>
			</div>
			
			<div class="span6 carrousel-header">
				<div id="headerCarousel" class="carousel slide">
	                <div class="carousel-inner">
	                  <div class="item active">
	                    <img src="http://placekitten.com/528/250" alt="">
	                  </div>
	                  <div class="item">
	                    <img src="http://placekitten.com/528/250" alt="">
	                  </div>
	                  <div class="item">
	                    <img src="http://placekitten.com/528/250" alt="">
	                  </div>
	                </div>
	                <a class="left carousel-control" href="#headerCarousel" data-slide="prev">‹</a>
	                <a class="right carousel-control" href="#headerCarousel" data-slide="next">›</a>
              	</div>
			</div>
			
		</div>

		<div class="container-fluid">
			<div class="span9 jumbotron">
				<h3><?php echo $this->Html->image('nuestraempresa.png'); ?></h3>
				<p class="lead">
					bhi sa es una empresa joven que inicia sus actividades en la ciudad de Bah&iacute;a Blanca a partir de la asociaci&oacute;n de diversos profesionales con la misma intenci&oacute;n, formar una empresa dedicada a la ejecuci&oacute;n de ingenier&iacute;a que se destaque en el mercado por garantizar una ejecuci&oacute;n competitiva y adecuada siempre a las necesidades espec&iacute;ficas de cada cliente.
				</p>
				<p><?php echo $this->Html->link('Leer mas..','#'); ?></p>
			</div>
		</div>

		<?php echo $this->fetch('content'); ?>
		<?php #echo $this->element('sql_dump'); ?>

		<div class="footer">
			<nav>
				<ul class="inline">
					<li>inicio</li>
					<li>quienes somos</li>
					<li>servicios</li>
					<li>proyectos</li>
					<li>contacto</li>
				</ul>
			</nav>
			<div class="pointedLine"></div>
			<p>TODOS LOS DERECHOS RESERVADOS BHISA <?php echo date('Y'); ?> </p>
	    </div>
	</div>
</body>

<?php echo $this->Html->script(array(
		'jquery',
		'jquery-ui',
		'application-site.js',
		'slider.js',
		'ui-home',
		'mopSlider/mopSlider-2.4',
		'/assets/js/bootstrap'
	)); ?>

</html>