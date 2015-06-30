<div class="operators form">
    <h2><?php echo __('Add Operator'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('List Operators'), array('action' => 'index')); ?></li>
        </ul>
    </div>
<?php echo $this->Form->create('Operator'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('regimental');
		echo $this->Form->input('name');
		echo $this->Form->input('office');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
