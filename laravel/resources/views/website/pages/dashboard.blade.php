<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Laravel login Registration Form Desing Using html css bootstrap and
        laravel
    </title>
    <!-- BOOTSTRAP MIN CSS LATEST VERSION OF BOOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('website') }}/css/bootstrap.min.css" />
    <!-- CUSOTM CSS STYLING -->
    <link rel="stylesheet" href="{{ asset('website') }}/css/style.css" />
</head>

<body>

    <section class="registration">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="signup-form shadow">
                        @if (session()->has('message'))
                            <div class=" alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        @if (session()->has('error_message'))
                            <div class=" alert alert-danger">
                                {{ session()->get('error_message') }}
                            </div>
                        @endif
                        <div class="signup-title my-2">
                            <marquee behavior="" direction="">
                                <h4 class="fw-bold">Login Users
                                    <span class="text-brand"> Informations</span>
                                </h4>
                            </marquee>

                            <div class="row g-2">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <strong>Name:</strong>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class=" text-brand">{{ Auth::user()->name }}</span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <strong>E-mail:</strong>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <span class=" text-brand">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <strong>Account Create Time:</strong>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul class="list-inline">
                                        <li class="text-brand list-inline-item">Day:
                                            {{ Auth::user()->created_at->format('d/M/Y') }}</li>
                                        <br>
                                        <li class="text-brand list-inline-item">Time:
                                            {{ Auth::user()->created_at->format('h:i:s A') }}</li>
                                        <br>

                                        <li class="text-brand list-inline-item">
                                            ({{ Auth::user()->created_at->diffForHumans() }})</li>
                                    </ul>
                                </div>

                            </div>
                        </div>



                        <div class=" text-center">
                            <a href="{{ route('loginpage') }}" class="btn btn-danger">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOOTSTTAP MIN JS LATEST VERSIN OF BOOTSTRAP 5 -->
    <script src="{{ asset('website') }}/js/bootstrap.bundle.min.js"></script>
</body>

</html>
