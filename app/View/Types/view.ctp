<div class="types view">
<h2><?php echo __('Type'); ?></h2>
    <div class="actions">

        <ul>
            <li><?php echo $this->Html->link(__('Edit Type'), array('action' => 'edit', $type['Type']['id'])); ?> </li>
            <li><?php echo $this->Form->postLink(__('Delete Type'), array('action' => 'delete', $type['Type']['id']), array(), __('Are you sure you want to delete # %s?', $type['Type']['id'])); ?> </li>
            <li><?php echo $this->Html->link(__('List Types'), array('action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Type'), array('action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('List Subtypes'), array('controller' => 'subtypes', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('New Subtype'), array('controller' => 'subtypes', 'action' => 'add')); ?> </li>
        </ul>
    </div>

    <dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($type['Type']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($type['Type']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($type['Type']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($type['Type']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($type['Type']['modified']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('Related Subtypes'); ?></dt>
        <dd>

            <div class="related">
                <?php if (!empty($type['Subtype'])): ?>
                    <table cellpadding = "0" cellspacing = "0">
                        <tr>
                            <th><?php echo __('Id'); ?></th>
                            <th><?php echo __('Name'); ?></th>
                            <th><?php echo __('Description'); ?></th>
                        </tr>
                        <?php foreach ($type['Subtype'] as $subtype): ?>
                            <tr>
                                <td><?php echo $subtype['id']; ?></td>
                                <td><?php echo $subtype['name']; ?></td>
                                <td><?php echo $subtype['description']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>
            </div>
        </dd>
	</dl>
</div>