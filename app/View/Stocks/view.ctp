<div class="stocks view">
<h2><?php echo __('Stock'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('Edit Stock'), array('action' => 'edit', $stock['Stock']['id'])); ?> </li>
            <li><?php echo $this->Form->postLink(__('Delete Stock'), array('action' => 'delete', $stock['Stock']['id']), array(), __('Are you sure you want to delete # %s?', $stock['Stock']['id'])); ?> </li>
            <li><?php echo $this->Html->link(__('List Stocks'), array('action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('List Tools'), array('controller' => 'tools', 'action' => 'index')); ?> </li>
        </ul>
    </div>

    <dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tool'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stock['Tool']['name'], array('controller' => 'tools', 'action' => 'view', $stock['Tool']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
            <?php echo $this->Html->link($stock['User']['name_reg'], array('controller' => 'users', 'action' => 'view', $stock['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($stock['Stock']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>