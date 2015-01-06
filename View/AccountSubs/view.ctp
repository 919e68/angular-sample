<div class="accountSubs view">
<h2><?php echo __('Account Sub'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accountSub['AccountSub']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($accountSub['AccountSub']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($accountSub['AccountSub']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($accountSub['AccountSub']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accountSub['Account']['name'], array('controller' => 'accounts', 'action' => 'view', $accountSub['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($accountSub['AccountSub']['visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($accountSub['AccountSub']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($accountSub['AccountSub']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account Sub'), array('action' => 'edit', $accountSub['AccountSub']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Account Sub'), array('action' => 'delete', $accountSub['AccountSub']['id']), array(), __('Are you sure you want to delete # %s?', $accountSub['AccountSub']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Subs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Sub'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
