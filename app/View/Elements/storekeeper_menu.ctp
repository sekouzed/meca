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
    <li><?= $this->Html->link('<i class="fa fa-check-square"></i> '.__('orders_tools'),
            ['controller' => 'orders_tools', 'action' => 'index'],
            ['escape'=>false,'class'=> ($this->params['controller']==='orders_tools')?'active' :'']) ?></li>
    <li><?= $this->Html->link('<i class="fa fa-cubes"></i> '.__('stocks'),
            ['controller' => 'stocks', 'action' => 'index'],
            ['escape'=>false,'class'=> ($this->params['controller']==='stocks')?'active' :'']) ?></li>
    <li><?= $this->Html->link('<i class="fa fa-cube"></i> '.__('tools'),
            ['controller' => 'tools', 'action' => 'index'],
            ['escape'=>false,'class'=> ($this->params['controller']==='tools')?'active' :'']) ?></li>
    <li><?= $this->Html->link('<i class="fa fa-tags"></i> '.__('subtypes'),
            ['controller' => 'subtypes', 'action' => 'index'],
            ['escape'=>false,'class'=> ($this->params['controller']==='subtypes')?'active' :'']) ?></li>
    <li><?= $this->Html->link('<i class="fa fa-tag"></i> '.__('types'),
            ['controller' => 'types', 'action' => 'index'],
            ['escape'=>false,'class'=> ($this->params['controller']==='types')?'active' :'']) ?></li>


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