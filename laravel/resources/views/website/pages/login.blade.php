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
                                <h4 class="fw-bold">
                                    <span class="text-brand">SIGN</span> IN
                                </h4>
                            </marquee>
                        </div>
                        <form action="{{ route('login.data') }}" method="post">
                            @csrf
                            <!-- E-mail form group start -->
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="enter your email" />
                                @error('email')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- E-mail form group start -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="Password" name="password" id="password" class="form-control"
                                    placeholder="123" />
                                @error('Password')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="text-center mb-2">
                                <strong>Create A New Account?
                                    <a href="{{ route('registerpage') }}" class="text-decoration-none text-brand">click
                                        Here</a></strong>
                            </div>
                            <!-- sing up buttton -->
                            <div class="mb-3">
                                <button type="submit" class="btn btn-danger form-control">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BOOTSTTAP MIN JS LATEST VERSIN OF BOOTSTRAP 5 -->
    <script src="{{ asset('website') }}/js/bootstrap.bundle.min.js"></script>
</body>

</html>
