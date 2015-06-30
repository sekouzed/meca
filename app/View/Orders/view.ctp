<div class="orders view" id="print-content">
<h2><?php echo __('Order'); ?></h2>
    <div class="actions do-not-print">

        <ul>
            <li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('Imprimer'), 'javascript:printContent();',['class'=>'btn btn-info','escape'=>false]) ?>
            </li>
        </ul>
    </div>


    <dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ref Piece'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ref_piece']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($order['Order']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operator'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Operator']['name_reg'], array('controller' => 'operators', 'action' => 'view', $order['Operator']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['User']['name_reg'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt class="do-not-print"><?php echo __('Modified'); ?></dt>
		<dd class="do-not-print">
			<?php echo h($order['Order']['modified']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('Related Tools'); ?></dt>
        <dd>
            <div class="related">
                <?php if (!empty($order['Tool'])){
                        foreach ($order['Tool'] as $tool){
                            echo $this->Html->link($tool['name'],
                                array('controller' => 'tools', 'action' => 'view', $tool['id'])).' , ';
                        }
                     }
                ?>

            </div>
        </dd>
	</dl>

</div>
<script>
    function printContent(){
        var backup = $("body").html();

        $(".do-not-print").remove();

        if($('#print-content').size()!=0)
            $("body").html($('#print-content').html());
        else
            $("body").html($('#main').html());

        window.print();

        $("body").html(backup);
        window.location.reload();
    }
</script>