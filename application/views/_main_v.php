<!DOCTYPE html>
<html lang="en">
<head>
    <!-- MAIN HEAD -->
    <?php $this->load->view('_komponen/backend/_main_head'); ?>

    <!-- Additional styles -->
    <?php if(!empty($additional_styles)): ?>
        <?php foreach($custom_styles as $v): ?>
            <?php $this->load->view($v); ?>
        <?php endforeach;?>
    <?php endif; ?>

    <!-- custom styles -->
    <?php if(!empty($custom_styles)): ?>
        <?php foreach($custom_styles as $v): ?>
            <link rel="stylesheet" href="<?= base_url('assets/css/backend/'.$v.'.css'); ?>">
        <?php endforeach;?>
    <?php endif; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed accent-orange">
<!-- site wrapper -->
<div class="wrapper">
    <!-- Preloader -->
    <?php $this->load->view('_komponen/backend/preloader_v'); ?>

    <!-- NAVBAR -->
    <?php $this->load->view('_komponen/backend/_main_navbar'); ?>
    
    <!-- SIDEBAR -->
    <?php $this->load->view('_komponen/backend/_main_sidebar') ?>

    <!-- CONTENT -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Starter Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <!-- <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol> -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's
                                    content.
                                </p>
                                
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                        
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's
                                    content.
                                </p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div><!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">Featured</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Special title treatment</h6>
                                
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="m-0">Featured</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">Special title treatment</h6>
                                
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- CONTROL BAR -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside><!-- /Control Bar -->

    <!-- FOOTER -->
    <?php $this->load->view('_komponen/backend/_main_footer') ?>

</div><!-- /site wrapper -->

    <!-- MAIN SCRIPT -->
    <?php $this->load->view('_komponen/backend/_main_script'); ?>

    <!-- custom script -->
    <?php if(!empty($custom_script)): ?>
        <?php foreach($custom_script as $v): ?>
            <?php $this->load->view($v); ?>
        <?php endforeach;?>
    <?php endif; ?>

    <!-- Preloader Script -->
    <?php $this->load->view('_komponen/backend/preloader_script'); ?>
</body>
</html>