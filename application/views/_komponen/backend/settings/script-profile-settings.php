<script>
    $('#profileForm').validate({
        rules: {
            username: {
                required: true,
                minlength: 5
            },
            first_name: {
                required: true,
                minlength: 5
            },
            last_name: {
                minlength: 5
            },
            email: {
                required: true,
                email: true
            },
            current_password: {
                required: true,
                minlength: 8
            },
            change_password: {
                minlength: 8
            },
            retype_password:{
                minlength: 8,
                equalTo: '[name="change_password"]'
            }
        },
    //     // messages: {
    //     //     username: {
    //     //         required: "Please enter your Name",
    //     //         minlength: "Your Name must be at least 5 characters long."
    //     //     },
    //     //     email: {
    //     //         required: "Please enter your Email",
    //     //         email: "This is not the correct Email."
    //     //     },
    //     //     password_current: {
    //     //         required: "Please type your password to save changes.",
    //     //         minlength: "Your Password must be at least 8 characters long."
    //     //     },
    //     //     password: {
    //     //         minlength: "Your new Password must be at least 8 characters long."
    //     //     },
    //     //     password2:{
    //     //         minlength: "Your new Password must be at least 8 characters long.",
    //     //         equalTo: "Password doesn't match with the first one."
    //     //     }
    //     // },
        errorElement: 'span',
        errorClass: 'text-right pr-2',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
</script>