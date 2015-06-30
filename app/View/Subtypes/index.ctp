<div class="subtypes index">
	<h2><?php echo __('Subtypes'); ?></h2>
    <div class="actions">

        <ul>
            <li><?php echo $this->Html->link(__('New Subtype'), array('action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Tools'), array('controller' => 'tools', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Tool'), array('controller' => 'tools', 'action' => 'add')); ?> </li>
        </ul>
    </div>

    <table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('type_id'); ?></th>
			<th class="actions"></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($subtypes as $subtype): ?>
	<tr>
		<td><?php echo h($subtype['Subtype']['id']); ?>&nbsp;</td>
		<td><?php echo h($subtype['Subtype']['name']); ?>&nbsp;</td>
		<td><?php echo h($subtype['Subtype']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subtype['Type']['name'], array('controller' => 'types', 'action' => 'view', $subtype['Type']['id'])); ?>
		</td>
		<td class="actions">
            <?php echo $this->Html->link('<i class="fa fa-eye"></i> '.__('View'), array('action' => 'view', $subtype['Subtype']['id']),['escape'=>false]); ?>
            <?php echo $this->Html->link('<i class="fa fa-edit"></i> '.__('Edit'), array('action' => 'edit', $subtype['Subtype']['id']),['escape'=>false]); ?>
            <?php echo $this->Form->postLink('<i class="fa fa-trash"></i> '.__('Delete'), array('action' => 'delete', $subtype['Subtype']['id']), array('escape'=>false,'confirm' => __('Are you sure you want to delete # %s?', $subtype['Subtype']['id']))); ?>
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