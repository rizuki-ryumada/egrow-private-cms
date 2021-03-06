<!-- SIDEBAR -->
<aside class="main-sidebar sidebar-light-orange elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="<?= base_url('assets/img/_main/favicon.svg'); ?>" alt="E" class="brand-image img-circle elevation-3" style="opacity: .8">
        <img class="brand-text font-weight-light" src="<?= base_url('assets/img/_main/egrow_text_logo.svg'); ?>" alt="Egrow Private" style="height: 30px;">
        <!-- <span class="brand-text font-weight-light"><img src="<?= base_url('assets/img/_main/egrow_text_logo.svg'); ?>" alt="Egrow Private"></span> -->
    </a>
    <!-- <a href="#" class="brand-link logo-switch">
        <img src="<?= base_url('assets/img/_main/favicon.svg'); ?>" alt="E" class="brand-image-xl logo-xs">
        <img src="<?= base_url('assets/img/_main/egrow_text_logo.svg'); ?>" alt="Egrow Private" class="brand-image-xs logo-xl" style="left: 12px">
    </a> -->
    
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu">
                <?php foreach($menu as $v): ?>
                    <!-- ambil submenu -->
                    <?php $menu_sub = $this->_general_m->getAll('*', 'user_menu_sub', array('id_menu' => $v['id_menu'])); ?>
                    <?php if(empty($menu_sub)): ?>
                        <li class="nav-item">
                            <a href="<?= base_url($v['url']); ?>" class="nav-link <?php if($this->uri->segment(1) == $v['url']){echo('active');} ?>">
                                <i class="nav-icon <?= $v['icon']; ?>"></i>
                                <p><?= $v['title']; ?></p>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item has-treeview <?php if($this->uri->segment(1) == $v['url']){echo('menu-open');} ?>">
                            <a href="#" class="nav-link <?php if($this->uri->segment(1) == $v['url']){echo('active');} ?>">
                                <i class="nav-icon fas <?= $v['icon']; ?>"></i>
                                <p><?= $v['title']; ?><i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <?php foreach($menu_sub as $value): ?>
                                    <li class="nav-item">
                                        <a href="<?= base_url($value['url']); ?>" class="nav-link 
                                        <?php if($this->uri->segment(1).'/'.$this->uri->segment(2) == $value['url']){echo('active');} ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p><?= $value['title']; ?></p>
                                        </a>
                                    </li>
                                <?php endforeach;?>
                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inactive Page</p>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                    <?php endif; ?>
                <?php endforeach;?>

                <!-- <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li> -->
            </ul>
        </nav><!-- /.sidebar-menu -->
    </div><!-- /.sidebar -->
</aside><!-- /Sidebar -->