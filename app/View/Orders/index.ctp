<div class="orders index">
	<h2><?php echo __('Orders'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
        </ul>
    </div>

    <table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ref_piece'); ?></th>
			<th><?php echo $this->Paginator->sort('operator_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ref_piece']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['Operator']['name_reg'], array('controller' => 'operators', 'action' => 'view', $order['Operator']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['User']['name_reg'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
		</td>
		<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
        <td><?php echo h($order['Order']['status']); ?>&nbsp;</td>
		<td class="actions">
            <?php
            echo $this->Html->link('<i class="fa fa-eye"></i> '.__('View'), array('action' => 'view', $order['Order']['id']),['escape'=>false]);

            if($order['Order']['status']=='new'){
                switch($this->Session->read('Auth.User.role')){
                    case 'admin':
                        echo $this->Form->postLink('<i class="fa fa-check"></i> '.__('Validate'),
                            array('action' => 'validation', $order['Order']['id']),
                            array('escape'=>false,'confirm' => __('Are you sure you want to validate # %s?', $order['Order']['id']))
                        );
                        echo $this->Html->link('<i class="fa fa-edit"></i> '.__('Edit'), array('action' => 'edit', $order['Order']['id']),['escape'=>false]);
                        echo $this->Form->postLink('<i class="fa fa-trash"></i> '.__('Delete'),
                            array('action' => 'delete', $order['Order']['id']),
                            array('escape'=>false,'confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id'])));

                        break;
                    case 'storekeeper':
                        echo $this->Form->postLink('<i class="fa fa-check"></i> '.__('Validate'),
                            array('action' => 'validation', $order['Order']['id']),
                            array('escape'=>false,'confirm' => __('Are you sure you want to validate # %s?', $order['Order']['id']))
                        );
                        break;
                    case 'issuer':
                        echo $this->Html->link('<i class="fa fa-edit"></i> '.__('Edit'), array('action' => 'edit', $order['Order']['id']),['escape'=>false]);
                        echo $this->Form->postLink('<i class="fa fa-trash"></i> '.__('Delete'),
                            array('action' => 'delete', $order['Order']['id']),
                            array('escape'=>false,'confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id'])));
                        break;
                    default:
                        break;
                }

            }
            ?>
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