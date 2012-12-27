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

$cakeDescription = __d('cake_dev', 'Pramukap payakumbuh');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('style.css');
    echo $this->Html->script('jquery.js');
    echo $this->Html->script('html5shiv.js');
    echo $this->Html->script('jquery.nivo.slider.js');
    echo $this->Html->script('configurations.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

<div class="container_12">
  <header class="head_content grid_12">
    <section class="logo grid_6">
      <h1> Pramuka Kota Payakumbuh 
        <span>Kwartir Cabang 0314 Kota Payakumbuh, Sumatera Barat</span>
      </h1>
    </section>  
    <div class="clear"></div>
  </header>

  <div class="clear"></div>

  <nav class="menu grid_12">
    <ul>
      <li><?php echo $this->Html->link('Home', array('controller' => 'posts', 'action' => 'index'), array('class' => 'home')); ?></li>
      <li><a href="#">Sambutan Ka Kwarcab</a></li>
      <li><a href="#">Profile Kwarcab</a></li>
      <li><a href="#">Prestasi</a></li>
      <li><a href="#">Kegiatan</a></li>
      <li><a href="#">Galeri</a></li>
      <li><a href="#">Dewan Kerja Cabang</a></li>
    </ul>

    <marquee direction="left" scrollamount="5">
      Scolling text
    </marquee>  
  </nav>
  
  <?php echo $this->fetch('content'); ?>

  <footer class="grid_12">
    <section  class="footer_box grid_3">
      <h2>Kontak Kami</h2>

      <p>Kwartir Daerah 11 Jawa Tengah<p>

      <p>
        Gedung Pramuka Lt.5 <br />
        Jl. Pahlawan no. 8 Semarang <br />
        Tel: +(024) 8311163. <br />
        Fax: +(024) 8311902. <br />
      </p>
 
      <p>Email: humas.kwardajateng@yahoo.co.id</p>
      <p>Admin : pramukajateng1@gmail.com</p>
    </section>

    <section  class="footer_box grid_3 alpha">
      <h2> Berita terbaru </h2>

      <ul>
        <li> Lorem ipsum </li>
        <li> Lorem ipsum </li>
        <li> Lorem ipsum </li>
        <li> Lorem ipsum </li>
      </ul> 

    </section>

    <section  class="footer_box grid_3 alpha">
      <h2> Pengunjung </h2>
      <p> We have 13 guests and no members online </p>
    </section>
    
    <section  class="footer_box grid_3 alpha">
      <h2> Follow us </h2>
    </section>

  </footer>
  <div class="copyright grid_12">
    <p> Copyright 2012 - <?php echo date("Y"); ?>, www.pramuka-payakumbuh.or.id
  </div> 
</div><!-- end Container -->
<!-- <?php # echo $this->element('sql_dump'); ?> -->
</body>
</html>
