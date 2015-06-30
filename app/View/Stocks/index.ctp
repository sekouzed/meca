
<div class="stocks index">
	<h2><?php echo __('Stocks'); ?></h2>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Stock'), array('action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('List Tools'), array('controller' => 'tools', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Tool'), array('controller' => 'tools', 'action' => 'add')); ?> </li>
        </ul>
    </div>

    <table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tool_id'); ?></th>
            <th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($stocks as $stock): ?>
	<tr>
		<td><?php echo h($stock['Stock']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($stock['Tool']['name'], array('controller' => 'tools', 'action' => 'view', $stock['Tool']['id'])); ?>
		</td>
        <td><?php echo h($stock['Stock']['quantity']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($stock['User']['name_reg'], array('controller' => 'users', 'action' => 'view', $stock['User']['id'])); ?>
		</td>
		<td><?php echo h($stock['Stock']['created']); ?>&nbsp;</td>
		<td><?php echo h($stock['Stock']['modified']); ?>&nbsp;</td>
		<td class="actions">
            <?php echo $this->Html->link('<i class="fa fa-folder-open-o "></i> ', array('action' => 'view', $stock['Stock']['id']),['escape'=>false,'title'=>'voir']); ?>
            <?php echo $this->Html->link('<i class="fa fa-edit"></i> ', array('action' => 'edit', $stock['Stock']['id']),['escape'=>false,'title'=>'éditer']); ?>
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
