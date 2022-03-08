<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <title>Book My Makeup</title>
    <?php include 'include/head.php' ?>
</head>

<body>
    <?php include 'include/header.php' ?>


    <section class="login-section login-section-pro">
        <div class="container">
            <div class="row">
                <section class="login">
                    <form class="login-form login-pro-form col-md-5 mx-auto">
                        <div class="form-group">
                            <label>Register</label>


                            <div class="register-steps register-step1">
                                <ul class="pro-user-type">
                                    <li> <label><input type="radio" name="salonType" id="salon" value="salon" checked /> Salon</label></li>
                                    <li> <label><input type="radio" name="salonType" id="makeup_artist" value="makeup_artist" /> Makeup Artist</label></li>
                                </ul>

                                <div class="form-group"><input type="text" placeholder="Enter Phone" class="form-control" maxlength="10" name="mobile_no"></div>
                                <div class="form-group"><input type="email" placeholder="Enter Email Id" class="form-control" maxlength="" name="email"></div>
                                <div class="form-group text-center"><button type="button" id="proRegisterBtn" class="btn login-btn">Register</button></div>
                                <p class="text-white">Have An Account? Click here to <a class="text-white" href="pro-login.php"> Sign In</a></p>
                            </div>

                            <div class="register-steps register-step2 d-custom-none mt-3">
                                <div class="form-group"><input type="text" placeholder="Enter OTP" class="form-control" maxlength="4" name="otp"></div>
                                <label class="resend-seconds"> <span class>180</span> sec</label>
                                <label class="cursor-pointer resend-btn">Resend OTP</label>
                                <div class="form-group text-center mt-3"><button type="button" id="verifyOTP" class="btn login-btn">Verify OTP</button></div>
                            </div>

                            <div class="register-steps register-step3 d-custom-none mt-3">
                                <div class="form-group"><input type="password" placeholder="Enter Password" class="form-control" maxlength="" name="password"></div>
                                <div class="form-group"><input type="password" placeholder="Confirm Password" class="form-control" maxlength="" name="confirmPassword"></div>
                                <div class="form-group text-center"><button type="button" id="proRegisterSubmit" class="btn login-btn">Submit</button></div>
                            </div>

                        </div>
                    </form>
                </section>

            </div>
        </div>
    </section>

    <?php include 'include/footer.php' ?>
    <script>
        $(function() {


            $("#proRegisterBtn").click(function() {

                var email = $('[name=email]').val();
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {

                    let salonType = $('input[name=salonType]:checked').val();
                    let post_data = {
                        category: salonType,
                        // category : 'makeup_artist',
                        mobile_no: $('[name=mobile_no]').val(),
                        email_id: $('[name=email]').val()
                    }
                    // console.log(post_data);
                    $.ajax({
                        url: base_url + 'auth/signup.php',
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(post_data),
                        success: function(data, item) {
                            // console.log(data);
                            // alert('Registration Successfully')
                            $('.register-steps').hide();
                            $('.register-step2').show();
                            localStorage.removeItem('tokenInfo');
                            token = data.token;
                            localStorage.setItem("tokenInfo", token);

                            var resend_seconds = $('.resend-seconds span').text();

                            let resendSetInterval = setInterval(function() {
                                resend_seconds--;
                                if (resend_seconds > 1) {
                                    $('.resend-seconds span').text(resend_seconds);
                                } else {
                                    $('.resend-seconds').hide();
                                    $('.resend-btn').show();
                                }
                            }, 1000);
                        },
                        error: function(error) {
                            toastr.error(error.responseJSON.message);
                        }
                    });
                } else {
                    toastr.error("invalid email address!")
                }


            });

            $('.resend-btn').click(function() {
                //     $('.resend-btn').hide();
                //     $('.resend-seconds').show();
                //    resendSetInterval();

            });

            $('#verifyOTP').click(function() {
                const tokanInfoConst = localStorage.getItem("tokenInfo");
                let post_data = {
                    otp: $('[name=otp]').val(),
                    token: tokanInfoConst
                }
                $.ajax({
                    url: base_url + 'auth/verify-otp.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(post_data, item) {
                        $('.register-steps').hide();
                        $('.register-step3').show();
                    },
                    error: function(error) {
                        toastr.error(error.responseJSON.message);
                    }
                });
            });

            $('#proRegisterSubmit').click(function() {
                let password = $('[name=password]').val();
                let confirmPassword = $('[name=confirmPassword]').val();
                if (password == confirmPassword) {
                    // debugger;
                    const tokanInfoConst2 = localStorage.getItem("tokenInfo");
                    let post_data = {
                        token: tokanInfoConst2,
                        password: password
                    }
                    $.ajax({
                        url: base_url + 'auth/set-password.php',
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(post_data),
                        success: function(post_data, item) {
                            toastr.success('Register Successfully');
                            setTimeout(function() {
                                window.location.replace('pro-login.php');
                            }, 1000);
                        },
                        error: function(error) {
                            toastr.error(error.responseJSON.message);
                        }
                    });
                } else {
                    toastr.error('password not matched');
                }
            });

        });
    </script>
</body>

</html>