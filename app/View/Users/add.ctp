<div class="users form">
    <h2><?php echo __('Add User'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
        </ul>
    </div>

    <?php echo $this->Form->create('User'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('regimental');
		echo $this->Form->input('name');
        echo $this->Form->input('role', array(
            'options' => array('issuer' => 'issuer','storekeeper'=>'storekeeper', 'admin' => 'admin')
        ));
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>