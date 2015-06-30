<div class="subtypes view">
<h2><?php echo __('Subtype'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('Edit Subtype'), array('action' => 'edit', $subtype['Subtype']['id'])); ?> </li>
            <li><?php echo $this->Form->postLink(__('Delete Subtype'), array('action' => 'delete', $subtype['Subtype']['id']), array(), __('Are you sure you want to delete # %s?', $subtype['Subtype']['id'])); ?> </li>
            <li><?php echo $this->Html->link(__('List Subtypes'), array('action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Subtype'), array('action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Tools'), array('controller' => 'tools', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Tool'), array('controller' => 'tools', 'action' => 'add')); ?> </li>
        </ul>
    </div>

    <dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subtype['Subtype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($subtype['Subtype']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($subtype['Subtype']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subtype['Type']['name'], array('controller' => 'types', 'action' => 'view', $subtype['Type']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subtype['Subtype']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subtype['Subtype']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>