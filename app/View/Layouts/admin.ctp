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

		echo $this->Html->css('admin.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<div id="admin-wrapper">
  <div id="header">
      <div id="logo_stat">
          <div>
              <h1>Admin Dashboard </em></h1>
            </div>
            <div>
              <img src="admin-resource/image/5.jpg" width="50" height="50"/>
                <p>
                  Welcome back. <em><?php echo $this->Session->read('Auth.User.nama'); ?></em><br />
                    <em><?php echo $this->Html->link(__('Edit profile'), 
                         array('controller' => 'users', 'action' => 'edit', $this->Session->read('Auth.User.id'))); ?></em><br />
                    <span> anda masuk sebagai : 
                      <?php echo $this->Custom->generateUserLevel($this->Session->read('Auth.User.level')); ?>
                    </span>
                </p>
            </div>
        </div>
        <div class="clean"></div> <!-- pembersih part -->
        <div id="menu">
        <ul>
          <li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'posts', 'action' => 'pending_posts'), 
                    array('class' => 'dashboard')); ?>
          </li>
          <li><?php echo $this->Html->link(__('Berita'), array(
                 'controller' => 'posts', 'action' => 'list_posts'), array('class' => 'judul')); 
                ?>
          </li>
          <li><?php echo $this->Html->link(__('Galery'), array('controller' => 'Galleries', 'action' => 'index'),
                    array('class' => 'judul')); ?>
          </li>
          <li><a href="?pil=pages" class="judul">Pages</a></li>
          <li><a href="?pil=komentar" class="judul">Komentar</a></li>
          <li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index'), 
                array('class' => 'user')); ?></li>
          <li><?php echo $this->Html->link(__('logout'), array('controller' => 'users', 'action' => 'logout'),
                array('class' => 'logout')); ?></li>
        </ul>
        <div class="clean"></div> <!-- pembersih part -->
    </div>
  </div>  

  <?php # echo $this->Session->flash(); ?>
  <?php echo $this->fetch('content'); ?>  

  <footer></footer>
</div><!-- end of admin-wrapper -->
<?php echo $this->element('sql_dump'); ?>
</body>
</html>
