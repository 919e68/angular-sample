<div class="accountTypes view">
<h2><?php echo __('Account Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accountType['AccountType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($accountType['AccountType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($accountType['AccountType']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Side'); ?></dt>
		<dd>
			<?php echo h($accountType['AccountType']['side']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($accountType['AccountType']['visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($accountType['AccountType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($accountType['AccountType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account Type'), array('action' => 'edit', $accountType['AccountType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Account Type'), array('action' => 'delete', $accountType['AccountType']['id']), array(), __('Are you sure you want to delete # %s?', $accountType['AccountType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Accounts'); ?></h3>
	<?php if (!empty($accountType['Account'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Account Type Id'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($accountType['Account'] as $account): ?>
		<tr>
			<td><?php echo $account['id']; ?></td>
			<td><?php echo $account['name']; ?></td>
			<td><?php echo $account['description']; ?></td>
			<td><?php echo $account['account_type_id']; ?></td>
			<td><?php echo $account['visible']; ?></td>
			<td><?php echo $account['created']; ?></td>
			<td><?php echo $account['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'accounts', 'action' => 'view', $account['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'accounts', 'action' => 'edit', $account['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'accounts', 'action' => 'delete', $account['id']), array(), __('Are you sure you want to delete # %s?', $account['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
