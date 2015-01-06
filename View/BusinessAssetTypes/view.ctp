<div class="businessAssetTypes view">
<h2><?php echo __('Business Asset Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($businessAssetType['BusinessAssetType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($businessAssetType['BusinessAssetType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($businessAssetType['BusinessAssetType']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($businessAssetType['BusinessAssetType']['visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($businessAssetType['BusinessAssetType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($businessAssetType['BusinessAssetType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Business Asset Type'), array('action' => 'edit', $businessAssetType['BusinessAssetType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Business Asset Type'), array('action' => 'delete', $businessAssetType['BusinessAssetType']['id']), array(), __('Are you sure you want to delete # %s?', $businessAssetType['BusinessAssetType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Business Asset Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Asset Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
