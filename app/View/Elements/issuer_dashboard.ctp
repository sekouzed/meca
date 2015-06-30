<div class="nav-blocks">
    <div class="block orange tree">
        <?= $this->Html->link('<i class="fa fa-credit-card"></i> '.
            '<div class="info">'.__('orders').'</div>'.
            '<div class="label">
                    Gérer  les bons
                </div>',
            ['controller' => 'orders', 'action' => 'index'],
            ['escape'=>false]) ?>
    </div>
    <div class="block blue tree">
        <?= $this->Html->link('<i class="fa fa-user"></i> '.
            '<div class="info">'.__('Mon profil').'</div>'.
            '<div class="label">
                    Gérer  votre profil
                </div>',
            ['controller' => 'users', 'action' => 'profil'],
            ['escape'=>false]) ?>
    </div>
</div>

