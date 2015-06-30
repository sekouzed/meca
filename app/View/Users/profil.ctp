<div class="users form">
    <h2><?php echo __('Profil User'); ?></h2>
    <div class="actions">
        <ul>
        </ul>
    </div>

    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('regimental');
        echo $this->Form->input('name');
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>