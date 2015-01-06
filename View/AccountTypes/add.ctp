<div class="accountTypes form">
<?php echo $this->Form->create('AccountType'); ?>
	<fieldset>
		<legend><?php echo __('Add Account Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('side');
		echo $this->Form->input('visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Account Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
