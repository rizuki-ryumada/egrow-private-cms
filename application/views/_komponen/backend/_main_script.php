<!-- SCRIPT -->
<!-- JQuery -->
<script src="<?= base_url('assets/vendor/node_modules/jquery/dist/jquery.min.js'); ?>"></script>
<!-- bootstrap 4 bundle -->
<script src="<?= base_url('assets/vendor/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/vendor/node_modules/admin-lte/dist/js/adminlte.min.js'); ?>"></script>
<!-- adminLTE js -->
<script src="<?= base_url('assets/vendor/node_modules/admin-lte/dist/js/adminlte.min.js'); ?>"></script>
<!-- sweet alert 2 -->
<script src="<?= base_url('assets/vendor/node_modules/sweetalert2/dist/sweetalert2.all.min.js'); ?>"></script>

<!-- FIXME remove on production -->
<!-- demo Adminlte -->
<script src="<?= base_url('assets/vendor/node_modules/admin-lte/dist/js/demo.js'); ?>"></script>

<!-- Jquery Validate -->
<script src="<?= base_url('assets/vendor/node_modules/jquery-validation/dist/jquery.validate.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/node_modules/jquery-validation/dist/additional-methods.min.js'); ?>"></script>
<!-- /SCRIPT -->

<!-- General popup message using Swal -->
<script>
    // toaster popup notifications
    toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }
    
    <?php if($this->session->flashdata('notif_msg')): ?>
        toastr["<?= $this->session->flashdata('notif_msg')['icon']; ?>"]("<?= $this->session->flashdata('notif_msg')['msg']; ?>")
    <?php endif; ?>

    $(document).ready(function(){
        // $("body").overlayScrollbars({ 
        //     // className : 'os-theme-dark'
        // }); // set overlay scrollbar to body tag html
        $(".sidebar").overlayScrollbars({
            className : "os-theme-light"
        }); // set overlay sidebar scrollbar color to dark
    });

    <?php if(!empty($this->session->flashdata('swal_msg'))): ?>
        $(document).ready(() => {
            Swal.fire({
                title: '<?= $this->session->flashdata('msg')['title']; ?>',
                icon: '<?= $this->session->flashdata('msg')['icon']; ?>',
                html: '<?= $this->session->flashdata('msg')['msg']; ?>',
                showCloseButton: false,
                showCancelButton: false,
                focusConfirm: true,
                confirmButtonText: 'Ok',
                    // '<i class="fa fa-thumbs-up"></i> Great!',
                confirmButtonAriaLabel: 'Ok',
            });
        });
    <?php endif; ?>
</script>