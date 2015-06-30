<div class="stocks form">
    <h2><?php echo __('Add Stock'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('List Stocks'), array('action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('List Tools'), array('controller' => 'tools', 'action' => 'index')); ?> </li>
        </ul>
    </div>

    <?php echo $this->Form->create('Stock'); ?>
        <fieldset>
        <?php
            echo $this->Form->input('tool_id', array('class'=>'select2'));
            echo $this->Form->input('quantity');
        ?>
        </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>