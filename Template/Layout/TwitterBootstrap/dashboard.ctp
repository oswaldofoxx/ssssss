<?php
/* @var $this \Cake\View\View */
use Cake\Core\Configure;


$this->prepend('tb_body_attrs', ' class="' . implode(' ', [$this->request->getParam('controller'), $this->request->getParam('action')]) . '" ');
$this->start('tb_body_start');
?>
<body <?= $this->fetch('tb_body_attrs') ?>>  
    <?= $this->Html->css('main')?>
<!--====== Scripts -->
    <?= $this->Html->script('jquery-3.1.1.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('material.min.js') ?>
    <?= $this->Html->script('ripples.min.js') ?>
    <?= $this->Html->script('sweetalert2.min.js') ?>
    <?= $this->Html->script('jquery.mCustomScrollbar.concat.min.js') ?>
    <?= $this->Html->script('main.js') ?>
    <script>
        $.material.init();
    </script> 
    <section class="full-box cover dashboard-sideBar">
        <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
        <div class="full-box dashboard-sideBar-ct">
            <!--SideBar Title -->
            <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
                Hot Metal <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
            </div>
            <!-- SideBar User info -->
            <div class="full-box dashboard-sideBar-UserInfo">
                <figure class="full-box">
                    <!--<img src="./assets/img/avatar.jpg" alt="UserIcon">-->


                    <!-- aqui poner el nombre del usuario
                    <figcaption class="text-center text-titles">User Name</figcaption>-->
                </figure>
                <ul class="full-box list-unstyled text-center">
				
				<li><?=$this->Html->image("icons/32/Peru.png", [
					"alt" => "Español",
					'url' => ['controller' => 'App', 'action' => 'change-language', 'es_PE']
					]); ?></li>
				<li><?= $this->Html->image("icons/32/EEUU.png", [
					"alt" => "English",
					'url' => ['controller' => 'App', 'action' => 'change-language', 'en_US']
					]); ?></li>
				<li><?= $this->Html->image("icons/32/brazil.png", [
					"alt" => "Portugues",
					'url' => ['controller' => 'App', 'action' => 'change-language', 'pt_BR']
					]); ?></li>	
                    
                </ul>
		<ul class="full-box list-unstyled text-center">
                    <h4><?= $current_user['name'].' '.$current_user['surname']?></h4>
                </ul>
		<ul class="full-box list-unstyled text-center">
		<li>
                        <a href="#!">
                            <i class="zmdi zmdi-settings"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="btn-exit-system">
                            <i class="zmdi zmdi-power"></i>
                        </a>
                    </li>
		</ul>

            </div>
            <!-- SideBar Menu -->
            <ul class="list-unstyled full-box dashboard-sideBar-Menu">
                <li>
                    <a href="http://198.23.255.30/~u20182833/my_project/">
                        <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> <?php echo __('Dashboard') ?>
                    </a>
                </li>
                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-account-add zmdi-hc-fw"></i> <?php echo __('Users') ?><i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <?= $this->Html->link(__('View Users'),['controller' => 'users', 'action' => 'index', '__full' => true])?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Add User'),['controller' => 'users', 'action' =>'add', '__full' => true])?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-male-female zmdi-hc-fw"></i> <?php echo __('Roles') ?><i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                         <li>
                            <?= $this->Html->link(__('View Roles'),['controller' => 'roles', 'action' => 'index', '_full' => true])?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Add Roles'),['controller' => 'roles', 'action' => 'add', '_full' => true])?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-card zmdi-hc-fw"></i><?php echo __('Mechanics') ?>  <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <?= $this->Html->link(__('View Mechanics'),['controller' => 'mechanics', 'action' => 'index', '_full' => true])?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Add Mechanics'),['controller' => 'mechanics', 'action' => 'add', '_full' => true])?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> <?php echo __('Replacements') ?><i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <?= $this->Html->link(__('View Replacements'),['controller' => 'replacements', 'action' => 'index', '_full' => true])?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Add Replacements'),['controller' => 'replacements', 'action' => 'add', '_full' => true])?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('View Categories'),['controller' => 'categories', 'action' => 'index', '_full' => true])?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Add Categories'),['controller' => 'categories', 'action' => 'add', '_full' => true])?>
                        </li>
                    </ul>
                </li>
                  <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-account-add zmdi-hc-fw"></i>  <?php echo __('Cars') ?><i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <?= $this->Html->link(__('View Cars'),['controller' => 'cars', 'action' => 'index', '_full' => true])?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Add Cars'),['controller' => 'cars', 'action' => 'add', '_full' => true])?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-card zmdi-hc-fw"></i>  <?php echo __('Factures') ?> <i class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <?= $this->Html->link(__('View Factures'),['controller' => 'factures', 'action' => 'index', '_full' => true])?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Add Factures'),['controller' => 'factures', 'action' => 'add', '_full' => true])?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('View Details'),['controller' => 'details', 'action' => 'index', '_full' => true])?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Add Details'),['controller' => 'details', 'action' => 'add', '_full' => true])?>
                        </li>
                    </ul>
                </li>
                <li>
                                    <a href="#!" class="btn-sideBar-SubMenu">
                                        <i class="zmdi zmdi-shield-security zmdi-hc-fw"></i> <?php echo __('Services') ?> <i class="zmdi zmdi-caret-down pull-right"></i>
                                    </a>
                                    <ul class="list-unstyled full-box">
                                        <li>
                                            <?= $this->Html->link(__('View Services'),['controller' => 'services', 'action' => 'index', '_full' => true])?>
                                        </li>
                                        <li>
                                            <?= $this->Html->link(__('Add Services'),['controller' => 'services', 'action' => 'add', '_full' => true])?>
                                        </li>
                                    </ul>
                                </li>


            </ul>
        </div>
    </section>
    <!-- Content page-->
    <section class="full-box dashboard-contentPage">
        <!-- NavBar -->
        <nav class="full-box dashboard-Navbar">
            <ul class="full-box list-unstyled text-right">
                <li class="pull-left">
                    <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
                </li>
                <!--<li>
                    <a href="#!" class="btn-Notifications-area">
                        <i class="zmdi zmdi-notifications-none"></i>
                        <span class="badge">7</span>
                    </a>
                </li>
                <li>
                    <a href="#!" class="btn-search">
                        <i class="zmdi zmdi-search"></i>
                    </a>
                </li>
                <li>
                    <a href="#!" class="btn-modal-help">
                        <i class="zmdi zmdi-help-outline"></i>
                    </a>
                </li>-->
            </ul>
        </nav>
        <!-- Content page -->
        <div class="container-fluid">
            <!--<div class="page-header">
              <h1 class="text-titles"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> <?= $this->request->getParam(__('controller')); ?></h1>
            </div>-->
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <!--<li><a href="#list" data-toggle="tab">List</a></li>
                        <!--Aqui cambiar el li que dirija a new se dirije add()
                        <li class="active"><a href="#" data-toggle="tab">New</a></li>-->
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        
                        <div  class="tab-pane fade active in" id="new">
                            <div class="table-responsive">
                                <?php
/**
 * Default `flash` block.
 */
if (!$this->fetch('tb_flash')) {
    $this->start('tb_flash');
    if (isset($this->Flash)) {
        echo $this->Flash->render();
    }
    $this->end();
}
$this->end();

$this->start('tb_body_end');
echo '</body>';
$this->end();

$this->append('content', '</div></div></div>');
echo $this->fetch('content');?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notifications area -->
    <!--<section class="full-box Notifications-area">
        <div class="full-box Notifications-bg btn-Notifications-area"></div>
        <div class="full-box Notifications-body">
            <div class="Notifications-body-title text-titles text-center">
                Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
            </div>
            <div class="list-group">
                <div class="list-group-item">
                    <div class="row-action-primary">
                        <i class="zmdi zmdi-alert-triangle"></i>
                    </div>
                    <div class="row-content">
                        <div class="least-content">17m</div>
                        <h4 class="list-group-item-heading">Tile with a label</h4>
                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
                <div class="list-group-separator"></div>
                <div class="list-group-item">
                    <div class="row-action-primary">
                        <i class="zmdi zmdi-alert-octagon"></i>
                    </div>
                    <div class="row-content">
                        <div class="least-content">15m</div>
                        <h4 class="list-group-item-heading">Tile with a label</h4>
                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
                <div class="list-group-separator"></div>
                <div class="list-group-item">
                    <div class="row-action-primary">
                        <i class="zmdi zmdi-help"></i>
                    </div>
                    <div class="row-content">
                        <div class="least-content">10m</div>
                        <h4 class="list-group-item-heading">Tile with a label</h4>
                        <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                    </div>
                </div>
                <div class="list-group-separator"></div>
                <div class="list-group-item">
                    <div class="row-action-primary">
                        <i class="zmdi zmdi-info"></i>
                    </div>
                    <div class="row-content">
                        <div class="least-content">8m</div>
                        <h4 class="list-group-item-heading">Tile with a label</h4>
                        <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>-->

    <!-- Dialog help -->
    <div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Help</h4>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?= Configure::read('App.title') ?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right visible-xs">
                    <?= $this->fetch('tb_actions') ?>
                </ul>-->

                <!--
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-divider"></li>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
                -->
            <!--</div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <?= $this->fetch('tb_sidebar') ?>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header"><?= $this->request->getParam('controller'); ?></h1>-->
