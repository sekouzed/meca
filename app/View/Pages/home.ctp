<h3 style="">
    <?php echo __('welcome'); ?>
</h3>

<?php

if(AuthComponent::user('id')){

    switch($this->Session->read('Auth.User.role')){
        case 'admin':
            echo $this->Element('admin_dashboard');break;
        case 'storekeeper':
            echo $this->Element('storekeeper_dashboard');break;
        case 'issuer':
            echo $this->Element('issuer_dashboard');break;
        default: break;
    }
}
?>