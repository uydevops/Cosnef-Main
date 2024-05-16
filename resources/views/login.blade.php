<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Cosneff Laser Technology - Login</title>


    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .divider {
            display: flex;
            align-items: center;
            color: #eee;
            font-weight: normal;
        }

        .divider:after {
            margin-left: 10px;
        }

        .divider:before {
            margin-right: 10px;
        }

        .LoginCard {
            background-color: #f8f9fa;
            border-radius: 15px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.1);
            padding: 50px;
        }


        .form-outline .form-control {
            border: 0;
            border-bottom: 1px solid #ced4da;
            border-radius: 0;
            box-shadow: none;
        }


        .form-outline .form-control:focus {
            box-shadow: none;
            border-bottom: 2px solid #007bff;
        }

        body {
            background-color: #f8f9fa;
        }

        .bg-dark {
            background-color: #343a40 !important;
        }

        /**** inputların border */

        .form-outline .form-control {
            border: 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.15);
            /* Şeffaf border */
            border-radius: 10px;
            /* Border yarıçapı */
            box-shadow: none;
        }

        .form-outline .form-control:focus {
            box-shadow: none;
            border-bottom: 2px solid #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action="{{route('auth')}}" method="POST" class="LoginCard">
                        @csrf
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">Kullanici Adi</label>
                            <input type="text" id="form1Example13" class="form-control form-control-lg" name="username" />
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form1Example23">Şifre</label>
                            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" />
                        </div>


                        <!----Hatalı Giriş Uyarısı-->
                        @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{session('error')}} <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        @endif
                    

                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block">Giriş Yap <i class="fas fa-sign-in-alt"></i></button>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-12">
                    <p class="mb-0">© {{date('Y')}} <a href="https://www.altf4yazilim.com.tc" class="text-white">Altf4 Yazılım</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>