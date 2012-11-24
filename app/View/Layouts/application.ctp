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

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

<!-- FB SHARE -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/all.js#xfbml=1&appId=102910126484094";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- FB SHARE -->

<div class="wrap_header">
    <div id="header" class="layout-web">
    	<div class="wrap_jam">
	  <div id="get_time">
            <p id="the-time"></p>
            <p id="day-wrap"></p>
            <p id="the-day"></p>
            <p id="the-date"></p>
          </div>
        </div>
        <div class="top_menu">
        <ul>
            <li><a href="" class="selected">home</a></li>
            <li><a href="/pages/1/tentang-kami.html">tentang kami</a></li>
      <li><a href="/pages/2/sejarah-pramuka.html">sejarah pramuka</a></li>
      <li><a href="/pages/8/hubungi-kami.html">hubungi kami</a></li>
            </ul>
        </div>
        <div class="clean"></div>
    </div>
    <div class="clean"></div>
</div>	

<div class="logo_header">
     <div class="layout-web logo-section">
    	<h1> Pramuka Kota Payakumbuh 
        	<span>Kwartir Cabang 0314 Kota Payakumbuh, Sumatera Barat</span>
        </h1>
        <form action="" method="post">
        	<input type="text" name="search" 
            		onclick="if(this.value == 'Search...') this.value='';"  
                    onblur="if(this.value.length == 0) this.value='Search...';" 
                    value="Search..."  />
        </form>

        <img src="<?=SITE_LINK;?>/resource/images/Spanduk-3.png" />  
    </div>
</div>

<div class="running_text">
  <marquee direction="left"> SELAMAT KEPADA WALIKOTA PAYAKUMBUH H. JOSRIZAL ZAIN, SE, MM ATAS PENGHARGAAN LENCANA MELATI </marquee> 
</div>  

<div class="clean"></div>

<div id="content" class="layout-web">
	<!-- sidebar -->
	<aside class="sidebar">
    	<? include ('sidebar.php'); ?>		
    </aside>
    <!-- end Sidebar -->
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>
    
</div>
<footer class="layout-web">
	<div class="layout-web">
    	<em> Copyright 2012 BUM Media Informatika. All Right Reserved <span> CSS3 Valid </span>  <span> HTML5 Valid </span> </em>
    </div>
</footer>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>
