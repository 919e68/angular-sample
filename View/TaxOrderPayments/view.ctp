<div class="taxOrderPayments view">
<h2><?php echo __('Tax Order Payment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($taxOrderPayment['TaxOrderPayment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Business Permit Application Id'); ?></dt>
		<dd>
			<?php echo h($taxOrderPayment['TaxOrderPayment']['business_permit_application_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($taxOrderPayment['TaxOrderPayment']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($taxOrderPayment['TaxOrderPayment']['visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($taxOrderPayment['TaxOrderPayment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($taxOrderPayment['TaxOrderPayment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tax Order Payment'), array('action' => 'edit', $taxOrderPayment['TaxOrderPayment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tax Order Payment'), array('action' => 'delete', $taxOrderPayment['TaxOrderPayment']['id']), array(), __('Are you sure you want to delete # %s?', $taxOrderPayment['TaxOrderPayment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Order Payments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Order Payment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tax Order Payment Fees'), array('controller' => 'tax_order_payment_fees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tax Order Payment Fee'), array('controller' => 'tax_order_payment_fees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tax Order Payment Fees'); ?></h3>
	<?php if (!empty($taxOrderPayment['TaxOrderPaymentFee'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tax Order Payment Id'); ?></th>
		<th><?php echo __('Tax Order Fee Id'); ?></th>
		<th><?php echo __('Visible'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($taxOrderPayment['TaxOrderPaymentFee'] as $taxOrderPaymentFee): ?>
		<tr>
			<td><?php echo $taxOrderPaymentFee['id']; ?></td>
			<td><?php echo $taxOrderPaymentFee['tax_order_payment_id']; ?></td>
			<td><?php echo $taxOrderPaymentFee['tax_order_fee_id']; ?></td>
			<td><?php echo $taxOrderPaymentFee['visible']; ?></td>
			<td><?php echo $taxOrderPaymentFee['created']; ?></td>
			<td><?php echo $taxOrderPaymentFee['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tax_order_payment_fees', 'action' => 'view', $taxOrderPaymentFee['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tax_order_payment_fees', 'action' => 'edit', $taxOrderPaymentFee['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tax_order_payment_fees', 'action' => 'delete', $taxOrderPaymentFee['id']), array(), __('Are you sure you want to delete # %s?', $taxOrderPaymentFee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tax Order Payment Fee'), array('controller' => 'tax_order_payment_fees', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
