<style>
    .actions form{
        border: 0;
        width: auto;
        margin: 0;
        padding: 0;
    }
    .actions .input,
    .actions .submit{
        display: inline-block;
        margin: 0;
        padding: 0;
    }
    .actions input{
        width: auto;
        padding: 2px !important;
        font-size: 120%;
    }
</style>
<div class="ordersTools index">
	<h2><?php echo __('Orders Tools'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('List Tools'), array('controller' => 'tools', 'action' => 'index')); ?> </li>
        </ul>
    </div>

    <table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
        <th><?php echo $this->Paginator->sort('order_id'); ?></th>
        <th><?php echo $this->Paginator->sort('tool_id'); ?></th>
        <th><?php echo $this->Paginator->sort('operateur'); ?></th>
        <th><?php echo $this->Paginator->sort('user'); ?></th>
        <th><?php echo $this->Paginator->sort('created'); ?></th>
        <th><?php echo $this->Paginator->sort('modified'); ?></th>
        <th style="width: 143px;"><?php echo $this->Paginator->sort('tool_status','Status'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ordersTools as $ordersTool): ?>
	<tr>
        <td>
            <?php echo $this->Html->link($ordersTool['Order']['name'], array('controller' => 'orders', 'action' => 'view', $ordersTool['Order']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link($ordersTool['Tool']['name'], array('controller' => 'tools', 'action' => 'view', $ordersTool['Tool']['id'])); ?>
        </td>
        <td>
			<?php echo $ordersTool['Order']['Operator']['name_reg']; ?>
		</td>
        <td>
			<?php echo $ordersTool['Order']['User']['name_reg']; ?>
		</td>
		<td><?php echo h($ordersTool['Order']['created']); ?>&nbsp;</td>
		<td><?php echo h($ordersTool['OrdersTool']['modified']); ?>&nbsp;</td>
        <td class="actions">
            <?php
            echo $this->Form->create('OrdersTool', array(
                'url' => array('controller' => 'orders_tools', 'action' => 'edit',$ordersTool['OrdersTool']['id'])
            ));
            echo $this->Form->input('id',array('value'=>$ordersTool['OrdersTool']['id']));
            echo $this->Form->input('tool_status', array(
                'value'=>$ordersTool['OrdersTool']['tool_status'],
                'label'=>false,
                'options' => array(
                    'fine' => 'En bon état',
                    'output' => 'Sorti',
                    'broken' => 'Cassé',
                    'to_sharpen' => 'A affûter'
                )
            ));
            echo $this->Form->end(__('OK'));
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