<div class="stocks form">
    <h2><?php echo __('Edit Stock'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Stock.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Stock.id'))); ?></li>
            <li><?php echo $this->Html->link(__('List Stocks'), array('action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('List Tools'), array('controller' => 'tools', 'action' => 'index')); ?> </li>
        </ul>
    </div>

    <?php echo $this->Form->create('Stock'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
        echo $this->Form->input('tool_id', array('class'=>'select2'));
		echo $this->Form->input('quantity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>