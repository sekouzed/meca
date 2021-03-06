<div class="types form">
    <h2><?php echo __('Edit Type'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Type.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Type.id'))); ?></li>
            <li><?php echo $this->Html->link(__('List Types'), array('action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('List Subtypes'), array('controller' => 'subtypes', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Subtype'), array('controller' => 'subtypes', 'action' => 'add')); ?> </li>
        </ul>
    </div>

    <?php echo $this->Form->create('Type'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>