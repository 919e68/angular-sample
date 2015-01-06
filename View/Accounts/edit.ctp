<div class="accounts form">
<?php echo $this->Form->create('Account'); ?>
	<fieldset>
		<legend><?php echo __('Edit Account'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('account_type_id');
		echo $this->Form->input('visible');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Account.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Account.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Account Types'), array('controller' => 'account_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Type'), array('controller' => 'account_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Subs'), array('controller' => 'account_subs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Sub'), array('controller' => 'account_subs', 'action' => 'add')); ?> </li>
	</ul>
</div>
