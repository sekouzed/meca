<div class="tools index">
	<h2><?php echo __('Tools'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Tool'), array('action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('List Subtypes'), array('controller' => 'subtypes', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Subtype'), array('controller' => 'subtypes', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
        </ul>
    </div>

    <table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ref'); ?></th>
			<th><?php echo $this->Paginator->sort('diameter'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_price'); ?></th>
			<th><?php echo $this->Paginator->sort('subtype_id'); ?></th>
            <th><?php echo $this->Paginator->sort('quantity_output'); ?></th>
            <th><?php echo $this->Paginator->sort('quantity_broken'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity_to_sharpen'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity_available'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity_total'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity_initial'); ?></th>
			<th class="actions"></th>

	</tr>
	</thead>
	<tbody>
	<?php foreach ($tools as $tool): ?>
	<tr>
		<td><?php echo h($tool['Tool']['id']); ?>&nbsp;</td>
		<td><?php echo h($tool['Tool']['ref']); ?>&nbsp;</td>
		<td><?php echo h($tool['Tool']['diameter']); ?>&nbsp;</td>
		<td><?php echo h($tool['Tool']['unit_price']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tool['Subtype']['name'], array('controller' => 'subtypes', 'action' => 'view', $tool['Subtype']['id'])); ?>
		</td>
		<td><?php echo h($tool['Tool']['quantity_output']); ?>&nbsp;</td>
		<td><?php echo h($tool['Tool']['quantity_broken']); ?>&nbsp;</td>
		<td><?php echo h($tool['Tool']['quantity_to_sharpen']); ?>&nbsp;</td>
		<td><?php echo h($tool['Tool']['quantity_available']); ?>&nbsp;</td>
		<td><?php echo h($tool['Tool']['quantity_total']); ?>&nbsp;</td>
		<td><?php echo h($tool['Tool']['quantity_initial']); ?>&nbsp;</td>
		<td class="actions">
            <?php echo $this->Html->link('<i class="fa fa-eye"></i> '.__('View'), array('action' => 'view', $tool['Tool']['id']),['escape'=>false]); ?>
            <?php echo $this->Html->link('<i class="fa fa-edit"></i> '.__('Edit'), array('action' => 'edit', $tool['Tool']['id']),['escape'=>false]); ?>
            <?php echo $this->Form->postLink('<i class="fa fa-trash"></i> '.__('Delete'), array('action' => 'delete', $tool['Tool']['id']), array('escape'=>false,'confirm' => __('Are you sure you want to delete # %s?', $tool['Tool']['id']))); ?>
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