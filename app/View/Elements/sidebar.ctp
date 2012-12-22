<section class="banner-sidebar box">
  <?php echo $this->Html->image("sidebar.jpg", array('class' => 'sidebar_banner')); ?>
</section>

<section class="search_form">
  <?php echo $this->Form->create('Post', array('action' => 'search', 'inputDefaults' => array('div' => false ))); ?>
    <?php echo $this->Form->input('search', array('label' => false, 'placeholder' => 'search',)); ?>
    <input type="submit" value="search"  />
  <?php echo $this->Form->end(); ?>
</section>

<div class="clear"></div>

<section class="lastest_news box">
  <h2> Lastest news </h2>
  <ul>
  	<li><a href="#">Link 1</a><li>
  	<li><a href="#">Link 2</a><li>
  </ul>
</section>

<section class="who_online box">
  <h2> Who online </h2>
</section>