<div class="tools form">
    <h2><?php echo __('Edit Tool'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tool.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Tool.id'))); ?></li>
            <li><?php echo $this->Html->link(__('List Tools'), array('action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('List Subtypes'), array('controller' => 'subtypes', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Subtype'), array('controller' => 'subtypes', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Stock'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
        </ul>
    </div>

    <?php echo $this->Form->create('Tool'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ref');
		echo $this->Form->input('diameter');
		echo $this->Form->input('unit_price');
		echo $this->Form->input('subtype_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>