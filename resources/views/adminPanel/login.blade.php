<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">

                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Willkommen beim Mitarbeiter-Login!</h1>
                                <h6 class="h6 text-gray-900 mb-1">Du bist Mitarbeiter beim Hotel Blackforest?</h6>
                                <h6 class="h6 text-gray-900 mb-4">Dann kannst du dich hier mit deinen Zugangsdaten
                                    anmelden!</h6>
                                <h6 class="h7 text-gray-900 mb-1">Kein Mitarbeiter? Dann hier lang:</h6>
                                <a href="{{url('/')}}" class="btn btn-info btn-sm mb-4">Zurück zur Website.</a>
                            </div>
                            <form class="user" method="post" action="{{url('admin/login')}}">
                                @csrf
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control form-control-user"
                                           aria-describedby="emailHelp"
                                           placeholder="E-Mail Adresse"
                                           required>
                                </div>
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control form-control-user"
                                           placeholder="Passwort" required>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Anmelden"/>
                                <hr>

                            </form>

                            @if(Session::has('msg'))
                                <p class="text-danger">{{session('msg')}}</p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{url('js/sb-admin-2.min.js')}}"></script>

@yield('scripts')

</body>

</html>
