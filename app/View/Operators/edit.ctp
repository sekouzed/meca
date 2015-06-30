<div class="operators form">
    <h2><?php echo __('Edit Operator'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Operator.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Operator.id'))); ?></li>
            <li><?php echo $this->Html->link(__('List Operators'), array('action' => 'index')); ?></li>
        </ul>
    </div>

    <?php echo $this->Form->create('Operator'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('regimental');
		echo $this->Form->input('name');
		echo $this->Form->input('office');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>