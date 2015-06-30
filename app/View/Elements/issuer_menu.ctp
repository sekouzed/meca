<ul class="menu">
    <li><?= $this->Html->link('<i class="fa fa-dashboard"></i>'.__('dashboard'),
            ['controller' => 'pages', 'action' => 'display','home'],
            [
                'escape'=>false,
                'class'=> (($this->params['controller']==='pages')&&($this->params['action']=='display') )?'active' :''
            ]
        ) ?></li>
    <li><?= $this->Html->link('<i class="fa fa-credit-card"></i> '.__('orders'),
            ['controller' => 'orders', 'action' => 'index'],
            ['escape'=>false,'class'=> ($this->params['controller']==='orders')?'active' :'']) ?></li>

    <li class="right"><?= $this->Html->link(
            '<i class="fa fa-sign-out"></i> '.__('logout'),
            ['controller' => 'users', 'action' => 'logout'],['escape'=>false]) ?></li>
    <li class="right"><?= $this->Html->link(
            '<i class="fa fa-user"></i> '.
            $this->Session->read('Auth.User.username').
            ' ('.
            $this->Session->read('Auth.User.role').
            ')',
            ['controller' => 'users', 'action' => 'profil'],['escape'=>false, 'class'=> (($this->params['controller']==='users')&&($this->params['action']=='profil') )?'active' :'']) ?></li>

</ul>