<div class="orders form">
    <h2><?php echo __('Add Order'); ?></h2>
    <div class="actions">
        <ul>

            <li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
        </ul>
    </div>

    <?php echo $this->Form->create('Order'); ?>
	<fieldset>
	<?php
        echo $this->Form->input('operator_id');
		echo $this->Form->input('ref_piece');
        echo $this->Form->input('Tool', array('class'=>'select2'));

    ?>

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>