<!doctype html>
<html lang="en">
  <head>
  	<title>DFEC - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ secure_asset('loginAsset/css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			{{-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #04</h2>
				</div>
			</div> --}}
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url('loginAsset/images/dfecloginlogo.jpg');">
			        </div>
						<div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
							<form action="{{ route('login') }}" method="POST" class="signin-form">
                                @csrf
			      		        <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required id="email" name="email" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                        <input type="checkbox" checked name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    {{-- <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div> --}}
                                    <div class="w-50 text-md-right">
                                        <p>
                                            Not a member?
                                            <a href="#" style="color: #e3b04b;">Sign Up</a>
                                        </p>
                                       
                                    </div>
                                    {{-- <p class="text-center">Not a member? <a data-toggle="tab" href="#signup" >Sign Up</a></p> --}}
                                </div>
                                
		                    </form>
		                    
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ secure_asset('js/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('js/popper.js') }}"></script>
    <script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('js/main.js') }}"></script>

	</body>
</html>

