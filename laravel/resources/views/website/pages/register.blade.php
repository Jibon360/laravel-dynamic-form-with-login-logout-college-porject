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
                        <div class="signup-title my-2">
                            <marquee behavior="" direction="">
                                <h4 class="fw-bold">
                                    <span class="text-brand">SIGN</span> UP
                                </h4>
                            </marquee>
                        </div>
                        <form action="{{ route('register.data') }}" method="post">
                            @csrf
                            <!-- name form group start -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="enter your name" value="{{ old('name') }}" />
                                    @error('name')
                                        <span class=" text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <!-- E-mail form group start -->
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="enter your email" value="{{ old('email') }}" />
                                    @error('email')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Password form group start -->
                            <div class="mb-3">
                                <label for="password" class="form-label">password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="123" />
                                    @error('password')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- confirm password form group start -->
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                                    placeholder="123" />
                                    @error('password_confirmation')
                                    <span class=" text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center mb-2">
                                <strong>Already Have an Account?
                                    <a href="{{ route('loginpage') }}" class="text-decoration-none text-brand">click
                                        Here</a></strong>
                            </div>
                            <!-- sing up buttton -->
                            <div class="mb-3">
                                <button type="submit" class="btn btn-danger form-control">
                                    Register
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