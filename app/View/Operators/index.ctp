<div class="operators index">
	<h2><?php echo __('Operators'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Operator'), array('action' => 'add')); ?></li>
        </ul>
    </div>

    <table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('regimental'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('office'); ?></th>
			<th class="actions"></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($operators as $operator): ?>
	<tr>
		<td><?php echo h($operator['Operator']['id']); ?>&nbsp;</td>
		<td><?php echo h($operator['Operator']['regimental']); ?>&nbsp;</td>
		<td><?php echo h($operator['Operator']['name']); ?>&nbsp;</td>
		<td><?php echo h($operator['Operator']['office']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('<i class="fa fa-folder-open-o "></i> ', array('action' => 'view', $operator['Operator']['id']),['escape'=>false]); ?>
			<?php echo $this->Html->link('<i class="fa fa-edit"></i> ', array('action' => 'edit', $operator['Operator']['id']),['escape'=>false]); ?>
			<?php echo $this->Form->postLink('<i class="fa fa-trash"></i> ', array('action' => 'delete', $operator['Operator']['id']), array('escape'=>false,'confirm' => __('Are you sure you want to delete # %s?', $operator['Operator']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>