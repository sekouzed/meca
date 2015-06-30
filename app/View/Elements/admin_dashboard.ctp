<div class="nav-blocks">
    <div class="block purple tree">
        <?= $this->Html->link('<i class="fa fa-user-secret"></i> '.
            '<div class="info">'.__('operators').'</div>'.
            '<div class="label">
                    Gérer  les opérateurs
                </div>',
            ['controller' => 'operators', 'action' => 'index'],
            ['escape'=>false]) ?>
    </div>
    <div class="block orange tree">
        <?= $this->Html->link('<i class="fa fa-credit-card"></i> '.
            '<div class="info">'.__('orders').'</div>'.
            '<div class="label">
                    Gérer  les bons
                </div>',
            ['controller' => 'orders', 'action' => 'index'],
            ['escape'=>false]) ?>
    </div>
    <div class="block smart_green tree">
        <?= $this->Html->link('<i class="fa fa-check-square"></i> '.
            '<div class="info">'.__('orders_tools').'</div>'.
            '<div class="label">
                    Gérer  les bons-outils
                </div>',
            ['controller' => 'orders_tools', 'action' => 'index'],
            ['escape'=>false]) ?>
    </div>
    <div class="block green tree">
        <?= $this->Html->link('<i class="fa fa-cubes"></i> '.
            '<div class="info">'.__('stocks').'</div>'.
            '<div class="label">
                    Gérer  les stocks
                </div>',
            ['controller' => 'stocks', 'action' => 'index'],
            ['escape'=>false]) ?>
    </div>
    <div class="block red tree">
        <?= $this->Html->link('<i class="fa fa-cube"></i> '.
            '<div class="info">'.__('tools').'</div>'.
            '<div class="label">
                    Gérer  les outils
                </div>',
            ['controller' => 'tools', 'action' => 'index'],
            ['escape'=>false]) ?>
    </div>
    <div class="block smart_blue tree">
        <?= $this->Html->link('<i class="fa fa-tags"></i> '.
            '<div class="info">'.__('subtypes').'</div>'.
            '<div class="label">
                    Gérer  les sous-types
                </div>',
            ['controller' => 'subtypes', 'action' => 'index'],
            ['escape'=>false]) ?>
    </div>
    <div class="block smart_red tree">
        <?= $this->Html->link('<i class="fa fa-tag"></i> '.
            '<div class="info">'.__('types').'</div>'.
            '<div class="label">
                    Gérer  les types
                </div>',
            ['controller' => 'types', 'action' => 'index'],
            ['escape'=>false]) ?>
    </div>
    <div class="block yellow tree">
        <?= $this->Html->link('<i class="fa fa-users"></i> '.
            '<div class="info">'.__('users').'</div>'.
            '<div class="label">
                    Gérer  les utilisateurs
                </div>',
            ['controller' => 'users', 'action' => 'index'],
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

