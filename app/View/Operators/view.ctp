<div class="operators view">
<h2><?php echo __('Operator'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('Edit Operator'), array('action' => 'edit', $operator['Operator']['id'])); ?> </li>
            <li><?php echo $this->Form->postLink(__('Delete Operator'), array('action' => 'delete', $operator['Operator']['id']), array(), __('Are you sure you want to delete # %s?', $operator['Operator']['id'])); ?> </li>
            <li><?php echo $this->Html->link(__('List Operators'), array('action' => 'index')); ?> </li>
        </ul>
    </div>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($operator['Operator']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regimental'); ?></dt>
		<dd>
			<?php echo h($operator['Operator']['regimental']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($operator['Operator']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Office'); ?></dt>
		<dd>
			<?php echo h($operator['Operator']['office']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($operator['Operator']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($operator['Operator']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>