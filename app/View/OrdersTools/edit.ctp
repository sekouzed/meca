<div class="ordersTools form">
    <h2><?php echo __('Edit Orders Tool'); ?></h2>
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('List Orders Tools'), array('action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('List Tools'), array('controller' => 'tools', 'action' => 'index')); ?> </li>
        </ul>
    </div>
    <h3><?php echo __('Orders info'); ?></h3>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($ordersTools['Order']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ref Piece'); ?></dt>
        <dd>
            <?php echo h($ordersTools['Order']['ref_piece']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Status'); ?></dt>
        <dd>
            <?php echo h($ordersTools['Order']['status']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Operator'); ?></dt>
        <dd>
            <?php echo $this->Html->link($ordersTools['Order']['Operator']['name'], array('controller' => 'operators', 'action' => 'view', $ordersTools['Order']['Operator']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User'); ?></dt>
        <dd>
            <?php echo $this->Html->link($ordersTools['Order']['User']['name'], array('controller' => 'users', 'action' => 'view', $ordersTools['Order']['User']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($ordersTools['Order']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($ordersTools['Order']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
    <br>
    <br>
    <h3><?php echo __('Tool').' : '. h($ordersTools['Tool']['name']);; ?></h3>
    <?php echo $this->Form->create('OrdersTool'); ?>
    <fieldset>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('tool_status', array(
            'options' => array('fine' => 'fine','output' => 'output','broken' => 'broken','to_sharpen' => 'to_sharpen')
        ));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>