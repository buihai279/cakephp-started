<?php

	$this->extend('/Common/view');
	
	$this->start('menu');
	echo "<ul>";
	echo "<li>";
	echo "string";
	echo "</li>";
	echo "</ul>";
	$this->end(); 

	$this->startIfEmpty('navbar','');
	echo $this->element('navbar');
	echo $this->element('notifications');
	$this->end();

	$this->assign('title', $post['Post']['title']);

	$this->start('sidebar');
?>
		<li>
		<?php
			echo $this->Html->link('edit', array(
			    'action' => 'edit',
			    $post['Post']['id']
			)); ?>
		</li>

<?php $this->end(); ?>

<?php 
	$this->start('sidebar');
	echo "string";
	echo $this->element('sidebar/recent_topics');
	echo $this->element('sidebar/recent_comments');
	$this->end(); 
?>

<?php 
 
// Append into the sidebar later on.
$this->append('sidebar');
echo $this->element('sidebar/popular_topics');
$this->end();
$this->prepend('sidebar', 'this content goes on top of sidebar');

 ?>

<?php echo h($post['Post']['body']);