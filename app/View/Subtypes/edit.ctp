<div class="subtypes form">
    <h2><?php echo __('Edit Subtype'); ?></h2>
    <div class="actions">

        <ul>

            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subtype.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Subtype.id'))); ?></li>
            <li><?php echo $this->Html->link(__('List Subtypes'), array('action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
        </ul>
    </div>

    <?php echo $this->Form->create('Subtype'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
        echo $this->Form->input('type_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>