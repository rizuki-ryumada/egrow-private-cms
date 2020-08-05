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
                        <h1 class="m-0 text-dark"><?= $page_title; ?></h1>
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
                <!-- row main view -->
                <?php $this->load->view('backend/'.$load_view); ?>
                <!-- /row main view -->
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
            <?php $this->load->view('_komponen/backend/'.$v); ?>
        <?php endforeach;?>
    <?php endif; ?>

    <!-- Preloader Script -->
    <?php $this->load->view('_komponen/backend/preloader_script'); ?>
</body>
</html>