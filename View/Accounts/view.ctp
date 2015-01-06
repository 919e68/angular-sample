<div class="accounts view">
<h2><?php echo __('Account'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($account['Account']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($account['Account']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($account['Account']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($account['AccountType']['name'], array('controller' => 'account_types', 'action' => 'view', $account['AccountType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($account['Account']['visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($account['Account']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($account['Account']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account'), array('action' => 'edit', $account['Account']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Account'), array('action' => 'delete', $account['Account']['id']), array(), __('Are you sure you want to delete # %s?', $account['Account']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Types'), array('controller' => 'account_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Type'), array('controller' => 'account_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Subs'), array('controller' => 'account_subs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Sub'), array('controller' => 'account_subs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Account Subs'); ?></h3>
	<?php if (!empty($account['AccountSub'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Code'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Account Id'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($account['AccountSub'] as $accountSub): ?>
		<tr>
			<td><?php echo $accountSub['id']; ?></td>
			<td><?php echo $accountSub['code']; ?></td>
			<td><?php echo $accountSub['name']; ?></td>
			<td><?php echo $accountSub['description']; ?></td>
			<td><?php echo $accountSub['account_id']; ?></td>
			<td><?php echo $accountSub['visible']; ?></td>
			<td><?php echo $accountSub['created']; ?></td>
			<td><?php echo $accountSub['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'account_subs', 'action' => 'view', $accountSub['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'account_subs', 'action' => 'edit', $accountSub['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'account_subs', 'action' => 'delete', $accountSub['id']), array(), __('Are you sure you want to delete # %s?', $accountSub['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Account Sub'), array('controller' => 'account_subs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
