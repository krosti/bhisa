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

$cakeDescription = __d('cake_dev', 'BAHISA - Argentina');
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

		echo $this->Html->css(array('index','/assets/css/bootstrap','/assets/css/bootstrap-responsive','bhi','lightbox'));

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
	<?php 
		$currentSection = ($this->passedArgs) ? $this->passedArgs[0] : $this->viewPath;
	?>
	<div class="container-narrow">
		<div class="row-fluid header">
			<ul class="inline pull-right">
				<li id="inicio-btn"><?php echo $this->Html->link('inicio','/',array('class' => $currentSection) ); ?></li>
				<li id="quienessomos-btn"><?php echo $this->Html->link('quienes somos','/quienes-somos',array('class' => $currentSection)); ?></li>
				<li id="servicios-btn"><?php echo $this->Html->link('servicios','/servicios',array('class' => $currentSection)); ?></li>
				<li id="proyectos-btn"><?php echo $this->Html->link('proyectos','/proyectos',array('class' => $currentSection)); ?></li>
				<li id="contacto-btn"><?php echo $this->Html->link('contacto','/contacto',array('class' => $currentSection)); ?></li>
			</ul>
		</div>
		<div class="row-fluid">
			
			<div class="span6 top-logo">
				<?php echo $this->Html->image('logobhi.png'); ?>
			</div>
			
			<div class="span6 carrousel-header">
				<div id="headerCarousel" class="carousel slide">
	                <div class="carousel-inner">
	                  <div class="item active"><?php echo $this->Html->image('imagenes_slider/01.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/02.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/03.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/04.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/05.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/06.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/07.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/08.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/09.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/10.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/11.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/12.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/13.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/14.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/15.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/16.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                  <div class="item"><?php echo $this->Html->image('imagenes_slider/17.jpg',array('width'=>594,'height'=>221) ); ?></div>
	                </div>
	                <a class="left carousel-control" href="#headerCarousel" data-slide="prev">‹</a>
	                <a class="right carousel-control" href="#headerCarousel" data-slide="next">›</a>
              	</div>
			</div>
			
		</div>
	</div>		
		<?php if ($this->Session->flash()): ?>
			<!--div class="alert alert-info">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<?php debug($this->Session->flash()); ?>
			</div-->
		<?php endif ?>
		<div class="flash_message" style="color:red; background:yellow;"><?php echo $this->Session->flash('auth'); ?></div>
		<?php echo $this->fetch('content'); ?>
		<?php #echo $this->element('sql_dump'); ?>
	<div class="footer">
		<nav>
			<ul class="inline">
				<li><?php echo $this->Html->link('inicio','/'); ?></li>
				<li><?php echo $this->Html->link('quienes somos','/quienes-somos'); ?></li>
				<li><?php echo $this->Html->link('servicios','/servicios'); ?></li>
				<li><?php echo $this->Html->link('proyectos','/proyectos'); ?></li>
				<li><?php echo $this->Html->link('contacto','/contacto'); ?></li>
			</ul>
		</nav>
		<div class="pointedLine"></div>
		<p>TODOS LOS DERECHOS RESERVADOS BHISA <?php echo date('Y'); ?> </p>
    </div>
</body>

<?php echo $this->Html->script(array(
		'jquery',
		'jquery-ui',
		'application-site.js',
		'slider.js',
		'ui-home',
		'mopSlider/mopSlider-2.4',
		'/assets/js/bootstrap',
		'lightbox',
		'jquery.roundabout'
	)); ?>

</html>