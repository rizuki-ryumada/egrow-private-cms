<!-- NAVBAR -->
<nav class="main-header navbar navbar-expand navbar-orange navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="<?= base_url('assets/img/_main/user.svg'); ?>" class="user-image img-circle elevation-2" alt="User Image" width="160px" height="160px">
                <span class="d-none d-md-inline"><?= $user['first_name']; ?> <i class="fa fa-angle-down ml-2"></i></span>
            </a>
            <ul class="dropdown-menu" style="left: inherit; right: 0px;">
                <li><a href="<?= base_url('settings/profile'); ?>" class="dropdown-item"><i class="fa fa-user mr-1"></i> My Profile</a></li>
                
                <!-- <li class="dropdown-divider"></li> -->
                
                <li><a href="#" class="dropdown-item text-danger"><i class="fa fa-sign-out-alt mr-1"></i> Logout</a></li>
            </ul>
        </li>
        <!-- profile -->
        <!-- <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><?= $user['first_name']; ?></a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="#" class="dropdown-item"><i class="fa fa-user mr-1"></i> My Profile</a></li>
                
                <li class="dropdown-divider"></li>
                
                <li><a href="#" class="dropdown-item text-danger"><i class="fa fa-sign-out-alt mr-1"></i> Logout</a></li>
            </ul>
        </li> -->
    </ul>
</nav><!-- /Navbar -->