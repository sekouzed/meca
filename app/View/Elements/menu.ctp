<ul class="menu">

    <li><?= $this->Html->link('<i class="fa fa-sign-in"></i> '.__('login'),
            ['controller' => 'users', 'action' => 'login'],['escape'=>false, 'class'=> (($this->params['controller']==='users')&&($this->params['action']=='login') )?'active' :'']) ?></li>


</ul>