<div class="orders form">
    <h2><?php echo __('Edit Order'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Order.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Order.id'))); ?></li>
            <li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
        </ul>
    </div>

    <?php echo $this->Form->create('Order'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
        echo $this->Form->input('operator_id');
		echo $this->Form->input('ref_piece');
        echo $this->Form->input('Tool', array('class'=>'select2'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>