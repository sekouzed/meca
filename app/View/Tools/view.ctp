<div class="tools view">
<h2><?php echo __('Tool'); ?></h2>
</div>
<div class="actions">
    <ul>
        <li><?php echo $this->Html->link(__('Edit Tool'), array('action' => 'edit', $tool['Tool']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Tool'), array('action' => 'delete', $tool['Tool']['id']), array(), __('Are you sure you want to delete # %s?', $tool['Tool']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Tools'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Tool'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Subtypes'), array('controller' => 'subtypes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Subtype'), array('controller' => 'subtypes', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
    </ul>
</div>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tool['Tool']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref'); ?></dt>
		<dd>
			<?php echo h($tool['Tool']['ref']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diameter'); ?></dt>
		<dd>
			<?php echo h($tool['Tool']['diameter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Price'); ?></dt>
		<dd>
			<?php echo h($tool['Tool']['unit_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtype'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tool['Subtype']['name'], array('controller' => 'subtypes', 'action' => 'view', $tool['Subtype']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tool['Tool']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tool['Tool']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('quantity_output'); ?></dt>
		<dd>
            <?php echo h($tool['Tool']['quantity_output']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('quantity_broken'); ?></dt>
		<dd>
            <?php echo h($tool['Tool']['quantity_broken']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('quantity_to_sharpen'); ?></dt>
		<dd>
            <?php echo h($tool['Tool']['quantity_to_sharpen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('quantity_available'); ?></dt>
		<dd>
            <?php echo h($tool['Tool']['quantity_available']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('quantity_total'); ?></dt>
		<dd>
            <?php echo h($tool['Tool']['quantity_total']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('quantity_initial'); ?></dt>
        <dd>
            <?php echo h($tool['Tool']['quantity_initial']); ?>
            &nbsp;
        </dd>
	</dl>