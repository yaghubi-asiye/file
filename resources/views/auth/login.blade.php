
<link rel="stylesheet" href="login-register/css/font-awesome.min.css">
    <link type="text/css" href="login-register/css/style.css" rel="stylesheet" />

<body>
	<div class="container" id="container">
		<!-- start sing up form -->
		<div class="form-container sign-up-container">
			<form action="{{ route('register') }}" method="POST">
            @csrf
				<h1>ایجاد حساب</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fa fa-google-plus"></i></a>
					<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
				</div>
				<span>یا با ایمیل خود حساب ایجاد کنید</span>
                <input placeholder="نام" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <input placeholder="ایمیل" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <input placeholder="رمز عبور" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <input placeholder="تکرار رمز عبور" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
				<button type="submit">عضویت</button>
			</form>
		</div>
		<!-- end sing up form -->
		<!-- start sing in form -->
		<div class="form-container sign-in-container">
			<form action="{{ route('login') }}" method="POST">
            @csrf
				<h1>ورود</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fa fa-google-plus"></i></a>
					<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
				</div>
				<span>یا با حساب خود وارد شوید</span>
                <input placeholder="ایمیل" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <input placeholder="رمز عبور" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
				<a href="#">رمز عبور خود را فراموش کرده ام !</a>
				<button type="submit">ورود</button>
			</form>
		</div>
		<!-- end sing in form -->

		<div class="overlay-container">
			<div class="overlay">
				<!-- start sing in overlay -->
				<div class="overlay-panel overlay-right">
					<h1>خوش آمدید</h1>
					<p>برای برقراری ارتباط با ما لطفا حساب کاربری خود را ایجاد کنید</p>
					<button class="ghost" id="signIn">ورود</button>
				</div>
				<!-- end sing in overlay -->
				<!-- start sing up overlay -->
				<div class="overlay-panel overlay-left">
					<h1>سلام، دوست خوبم</h1>
					<p>وارد حساب کاربری خود شوید و با ما به کشف جهان بپردازید</p>
					<button class="ghost" id="signUp">عضویت</button>
				</div>
				<!-- end sing up overlay -->
			</div>
		</div>
    </div>

    <script  src="login-register/js/scripts.js"></script>


