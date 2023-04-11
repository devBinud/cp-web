<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codepilot Technologies</title>
    <link rel="icon" type="image/x-icon" href="{{ url('assets/public/img/fav.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <style>
        body {
            background-image: url("assets/admin/img/loginbg.jpg");
            background-size: cover;
        }

        h3 {
            font-size: 24px;
            line-height: 30px;
        }

        label {
            font-size: 22px;
        }

        .request-otp-header {
            margin: 40px 0px;
        }

        .login-label label {
            color: #333333;
            font-weight: 600;
            font-size: 20px;
        }

        .input-edit {
            border: none !important;
            border-bottom: 4px solid rgb(0, 0, 0) !important;
            padding: 6px 0px;
            font-size: 14px;
        }

        .input-edit:focus {
            border-bottom-color: #393433 !important;
            box-shadow: none;
            outline: 0;
        }

        .request-otp {
            margin-top: 40px;
            background: linear-gradient(#000000, #1c0491);
            font-size: 14px;
            color: #fff;
            border-radius: 7px
        }

        .request-otp:focus {
            box-shadow: none;
        }

        .fa-chevron-left {
            cursor: pointer;
        }

        .resend-otp {
            margin-top: 6px;
            cursor: pointer;
        }

        .login-setup-section {
            background: rgb(255, 255, 255);
            padding: 100px 100px;
            border-radius: 50px;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class="container new-login-area">

        <div class="row ">
            <div class="col-md-6 "
                style="position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);">
                <div id='sign-in' class='login-setup-section'>
                    <form action="{{ url('/login') }}" method="post" id="loginn">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">

                                    <label>Username:</label><br>
                                    <input class="form-control input-edit" type="text" name="username">
                                    <label>Password:</label><br>
                                    <input class="form-control input-edit" type="password" name="password"><br>
                                </div>
                                <button type="submit" class="btn btn-default btn-lg btn-block request-otp"
                                    id='request-otp'>Submit</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            $('#loginn').submit(function(e) {

                e.preventDefault();

                var formData = new FormData(this);


                // clear all error message
                // error.text('');

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (!data.success) {
                            alert(data.message);
                        } else {
                            window.location.replace(
                                "{{ url('/dashboard') }}");
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
