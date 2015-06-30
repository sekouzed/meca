<div class="subtypes form">
    <h2><?php echo __('Add Subtype'); ?></h2>
    <div class="actions">

        <ul>

            <li><?php echo $this->Html->link(__('List Subtypes'), array('action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
        </ul>
    </div>

    <?php echo $this->Form->create('Subtype'); ?>
	<fieldset>
	<?php
        echo $this->Form->input('type_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>