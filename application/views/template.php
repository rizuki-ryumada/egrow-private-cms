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
<body class="">
    <?php $this->load->view('_komponen/backend/preloader_v'); ?>

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