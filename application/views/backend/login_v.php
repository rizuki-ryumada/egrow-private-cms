<!DOCTYPE html>
<html lang="en">
<head>
    <!-- MAIN HEAD -->
    <?php $this->load->view('_komponen/backend/_main_head'); ?>
    
    <!-- custom login styles -->
    <link rel="stylesheet" href="<?= base_url('assets/css/backend/login_styles.css'); ?>">

</head>
<body class="hold-transition login-page">
    <?php $this->load->view('_komponen/backend/preloader_v'); ?>

    <div class="wrapper w-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100">
                <div class="col-md-4 d-flex justify-content-center align-self-center">
                    <div class="login-box">
                        <div class="login-logo">
                            <a href="<?= base_url(); ?>"><img src="<?= base_url('assets/img/_main/egrow_text_logo.svg" alt="Egrow Private'); ?>"></a>
                        </div>
                        <!-- /.login-logo -->
                        <div class="card">
                            <div class="card-body login-card-body">
                                <?php if($this->session->flashdata('msg')): ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-ban"></i> Error!</h5>
                                        <?= $this->session->flashdata('msg'); ?>
                                    </div>
                                <?php elseif(validation_errors()): ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-ban"></i> Error!</h5>
                                        <?= validation_errors(); ?>
                                    </div>
                                <?php else: ?>
                                    <p class="login-box-msg">Sign in to manage your site.</p>
                                <?php endif; ?>
                                
                                <form id="loginForm" action="<?= base_url('epLogin'); ?>" method="POST">
                                    <div class="input-group mb-3">
                                        <input type="username" class="form-control" name="username" placeholder="nama_pengguna" >
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="kata_sandi" >
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="icheck-warning">
                                                <input type="checkbox" name="remember" id="remember">
                                                <label for="remember">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-warning btn-block"><i class="fa fa-sign-in-alt"></i> Sign In</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
                                
                                <hr>
                                <p class="text-center mb-0"><small><strong>&copy; <?= date('Y'); ?> <a href="">Egrow Private</a>.</strong> All rights reserved.</small>
                                </p>
                                <!-- <p class="mb-1">
                                    <a href="forgot-password.html">I forgot my password</a>
                                </p> -->
                            </div>
                            <!-- /.login-card-body -->
                        </div>
                    </div><!-- /.login-box -->
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN SCRIPT -->
    <?php $this->load->view('_komponen/backend/_main_script'); ?>
    <!-- Validation Script -->
    <script src="<?= base_url('assets/vendor/node_modules/jquery-validation/dist/jquery.validate.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/node_modules/jquery-validation/dist/additional-methods.min.js'); ?>"></script>
    <script>
        $(document).ready(() => {
            $('#loginForm').validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 5
                    },
                    password: {
                        required: true,
                        minlength: 8
                    }
                },
                messages: {
                    username: {
                        required: "Harap masukkan nama pengguna anda.",
                        minlength: "Nama pengguna kamu seharusnya tidak kurang dari 5 karakter."
                    },
                    password: {
                        required: "Harap masukkan kata sandi anda.",
                        minlength: "Kata sandi kamu seharusnya tidak kurang dari 8 karakter."
                    }
                },
                errorElement: 'span',
                errorClass: 'text-right pr-2',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.input-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
    <!-- Preloader Script -->
    <?php $this->load->view('_komponen/backend/preloader_script'); ?>
</body>
</html>