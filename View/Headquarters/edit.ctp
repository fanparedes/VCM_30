<div class="headquarters form">
<?php echo $this->Form->create('Headquarters'); ?>
	<fieldset>
		<legend><?php echo __('Edit Headquarters'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sede');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Headquarters.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Headquarters.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Headquarters'), array('action' => 'index')); ?></li>
	</ul>
</div>
