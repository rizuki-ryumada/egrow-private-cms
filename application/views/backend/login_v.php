<!DOCTYPE html>
<html lang="en">
<head>
    <!-- MAIN HEAD -->
    <?php $this->load->view('_komponen/backend/_main_head'); ?>
</head>
<body class="hold-transition login-page">
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
                                <p class="login-box-msg">Sign in to manage your site.</p>
                                
                                <form id="loginForm" action="<?= base_url('epLogin/logmein'); ?>" method="post">
                                    <div class="input-group mb-3">
                                        <input type="username" class="form-control" name="nama_pengguna" placeholder="nama_pengguna">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" name="sandi" placeholder="kata_sandi">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <!-- <div class="icheck-primary">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">
                                                    Remember Me
                                                </label>
                                            </div> -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
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
    <script>
        $('#loginForm').validate({
            rules: {
                nama_pengguna: {
                    required: true,
                    minlength: 5
                },
                sandi: {
                    required: true,
                    minlength: 8
                }
            },
            messages: {
                nama_pengguna: {
                    required: "Harap masukkan nama pengguna anda.",
                    minlength: "Nama pengguna kamu seharusnya tidak kurang dari 5 karakter."
                },
                sandi: {
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
    </script>
</body>
</html>