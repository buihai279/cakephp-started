<!-- // app/View/Common/view.ctp -->
	
<?php 


$this->Html->css('bootstrap.min', array('inline' => false));
$this->Html->script('bootstrap.min',array('block' => 'scriptBottom'));

 ?>


<h1><?php echo $this->fetch('title'); ?></h1>
<?php echo $this->fetch('content'); ?>

<div class="actions">
    <h3>Related actions</h3>
    <ul>
    <?php echo $this->fetch('sidebar'); ?>
    </ul>
</div>