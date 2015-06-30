<div class="users form">
    <h2><?php echo __('Edit User'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
            <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
        </ul>
    </div>

    <?php echo $this->Form->create('User'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('regimental');
		echo $this->Form->input('name');
        echo $this->Form->input('role', array(
            'options' => array('issuer' => 'Délivreur','storekeeper'=>'Magasinier', 'admin' => 'Administrateur')
        ));
		echo $this->Form->input('username');
    echo $this->Form->input('password',['label'=>'Mot de passe']);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>