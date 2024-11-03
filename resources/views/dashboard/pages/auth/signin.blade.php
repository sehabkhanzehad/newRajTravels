<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Sign in | M/S Raj Travels</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('adminDashboard') }}/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('adminDashboard') }}/css/main.css">
    <link rel="stylesheet" href="{{ asset('adminDashboard') }}/css/color_skins.css">

    <link rel="stylesheet" href="{{ asset('adminDashboard/css/progress.css') }}">
    <link rel="stylesheet" href="{{ asset('adminDashboard/css/toastify.min.css') }}">
</head>

<body class="theme-light">
    <!-- Page Loader -->
    <div id="loader" class="LoadingOverlay d-none">
        <div class="Line-Progress">
            <div class="indeterminate"></div>
        </div>
    </div>

    <div class="authentication">
        <div class="container">
            <div class="col-md-12 content-center">
                <div class="row">
                    <div class="col-lg-5 col-md-12 offset-lg-1 m-auto">
                        <div class="card-plain">
                            <div class="header">
                                <h5>Sign in</h5>
                            </div>

                            <form class="form">
                                <div class="input-group">
                                    <input type="text" id ="email" class="form-control" placeholder="Email">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="zmdi zmdi-account"></i></span>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <input type="password" id="password" class="form-control" placeholder="Password">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                                    </div>
                                </div>
                            </form>

                            <div class="footer">
                                <a onclick="signIn()" class="btn btn-primary btn-round btn-block">SIGN IN</a>
                                {{-- <a href="sign-up.html" class="btn btn-primary btn-simple btn-round btn-block">SIGN
                                    UP</a> --}}
                            </div>
                            {{-- <a href="forgot-password.html" class="link">Forgot Password?</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery Core Js -->
    <script src="{{ asset('adminDashboard') }}/bundles/libscripts.bundle.js"></script>
    <script src="{{ asset('adminDashboard') }}/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('adminDashboard/js/axios.min.js') }}"></script>
    <script src="{{ asset('adminDashboard/js/config.js') }}"></script>
    <script src="{{ asset('adminDashboard/js/toastify-js.js') }}"></script>
    <script>
        async function signIn() {
            let email = document.getElementById('email').value;
            let password = document.getElementById("password").value;

            if (email == "" && password == "") {
                errorToast("Please enter your email and password.");
            } else if (email == "") {
                errorToast("Please enter your email.");
            } else if (password == "") {
                errorToast("Please enter your password.");
            } else {
                const re =
                    /^(?:(?:[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*")|(?:[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+)*))@(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)|[a-zA-Z0-9-]*[a-zA-Z0-9]:(?:(?:[ -~]|\\[^\r\n])*)\])$/;
                if (!re.test(email)) {
                    errorToast("Please enter a valid email.");
                } else {
                    showLoader();
                    const response = await axios.post("{{ route('auth.signin') }}", {
                        email: email,
                        password: password
                    });
                    hideLoader();

                    if (response.data.status == "success") {
                        successToast(response.data.message);
                        setTimeout(() => {
                            window.location.href = response.data.url;
                        }, 1000);
                    } else {
                        // errorToast(response.data.message);
                        errorToast(response.data['message']);
                    }
                }
            }
        }
    </script>
</body>

</html>
