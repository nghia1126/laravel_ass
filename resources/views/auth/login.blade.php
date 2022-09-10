
<!-- For favicon png -->
{{-- @extends('layout.master')
@section('title', 'Đăng nhập-Đăng kí')

@section('content') --}}



{{-- FORM LOGIN --}}
<style>
            .box {
        position: relative;
        top: 0;
        opacity: 1;
        float: left;
        padding: 60px 50px 40px 50px;
        width: 100%;
        background: #fff;
        border-radius: 10px;
        transform: scale(1);
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        z-index: 5;

        &.back {
            transform: scale(0.95);
            -webkit-transform: scale(0.95);
            -ms-transform: scale(0.95);
            top: -20px;
            opacity: .8;
            z-index: -1;
        }

        &:before {
            content: "";
            width: 100%;
            height: 30px;
            border-radius: 10px;
            position: absolute;
            top: -10px;
            background: rgba(255, 255, 255, 0.6);
            left: 0;
            transform: scale(0.95);
            -webkit-transform: scale(0.95);
            -ms-transform: scale(0.95);
            z-index: -1;
        }
        }

        .overbox .title {
        color: #fff;

        &:before {
            background: #fff;
        }
        }

        .title {
        width: 100%;
        float: left;
        line-height: 46px;
        font-size: 34px;
        font-weight: 700;
        letter-spacing: 2px;
        color: #ED2553;
        position: relative;

        &:before {
            content: "";
            width: 5px;
            height: 100%;
            position: absolute;
            top: 0;
            left: -50px;
            background: #ED2553;
        }
        }

        .input {
        transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
        -webkit-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
        -ms-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);

        label, input, .spin {
            transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
            -ms-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
        }
        }

        .button {
        transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
        -webkit-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
        -ms-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);

        button .button.login button i.fa {
            transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
            -ms-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
        }
        }

        .material-button .shape {
        &:before, &:after {
            transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
            -ms-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
        }
        }

        .button.login button {
        transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
        -webkit-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
        -ms-transition: 300ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        .material-button, .alt-2, .material-button .shape, .alt-2 .shape, .box {
        transition: 400ms cubic-bezier(0.4, 0, 0.2, 1);
        -webkit-transition: 400ms cubic-bezier(0.4, 0, 0.2, 1);
        -ms-transition: 400ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        .input {
        width: 100%;
        float: left;

        label, input, .spin {
            width: 100%;
            float: left;
        }
        }

        .button {
        width: 100%;
        float: left;

        button {
            width: 100%;
            float: left;
        }
        }

        .input, .button {
        margin-top: 30px;
        height: 70px;
        }

        .input {
        position: relative;

        input {
            position: relative;
        }
        }

        .button {
        position: relative;

        button {
            position: relative;
        }
        }

        .input {
        input {
            height: 60px;
            top: 10px;
            border: none;
            background: transparent;
            font-family: 'Roboto', sans-serif;
            font-size: 24px;
            color: rgba(0, 0, 0, 0.8);
            font-weight: 300;
        }

        label {
            font-family: 'Roboto', sans-serif;
            font-size: 24px;
            color: rgba(0, 0, 0, 0.8);
            font-weight: 300;
        }
        }

        .button button {
        font-family: 'Roboto', sans-serif;
        font-size: 24px;
        color: rgba(0, 0, 0, 0.8);
        font-weight: 300;
        }

        .input {
        &:before, .spin {
            width: 100%;
            height: 1px;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        &:before {
            content: "";
            background: rgba(0, 0, 0, 0.1);
            z-index: 3;
        }

        .spin {
            background: #ED2553;
            z-index: 4;
            width: 0;
        }
        }

        .overbox .input {
        .spin {
            background: rgba(255, 255, 255, 1);
        }

        &:before {
            background: rgba(255, 255, 255, 0.5);
        }
        }

        .input label {
        position: absolute;
        top: 10px;
        left: 0;
        z-index: 2;
        cursor: pointer;
        line-height: 60px;
        }

        .button {
        &.login {
            width: 60%;
            left: 20%;

            button {
            width: 100%;
            line-height: 64px;
            left: 0%;
            background-color: transparent;
            border: 3px solid rgba(0, 0, 0, 0.1);
            font-weight: 900;
            font-size: 18px;
            color: rgba(0, 0, 0, 0.2);
            }
        }

        button {
            width: 100%;
            line-height: 64px;
            left: 0%;
            background-color: transparent;
            border: 3px solid rgba(0, 0, 0, 0.1);
            font-weight: 900;
            font-size: 18px;
            color: rgba(0, 0, 0, 0.2);
        }

        &.login {
            margin-top: 30px;
        }

        margin-top: 20px;

        button {
            background-color: #fff;
            color: #ED2553;
            border: none;
        }

        &.login button {
            &.active {
            border: 3px solid transparent;
            color: #fff !important;

            span {
                opacity: 0;
                transform: scale(0);
                -webkit-transform: scale(0);
                -ms-transform: scale(0);
            }

            i.fa {
                opacity: 1;
                transform: scale(1) rotate(-0deg);
                -webkit-transform: scale(1) rotate(-0deg);
                -ms-transform: scale(1) rotate(-0deg);
            }
            }

            i.fa {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            line-height: 60px;
            transform: scale(0) rotate(-45deg);
            -webkit-transform: scale(0) rotate(-45deg);
            -ms-transform: scale(0) rotate(-45deg);
            }

            &:hover {
            color: #ED2553;
            border-color: #ED2553;
            }
        }

        margin: 40px 0;
        overflow: hidden;
        z-index: 2;

        button {
            cursor: pointer;
            position: relative;
            z-index: 2;
        }
        }

        .pass-forgot {
        width: 100%;
        float: left;
        text-align: center;
        color: rgba(0, 0, 0, 0.4);
        font-size: 18px;
        }

        .click-efect {
        position: absolute;
        top: 0;
        left: 0;
        background: #ED2553;
        border-radius: 50%;
        }

        .overbox {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        overflow: inherit;
        border-radius: 10px;
        padding: 60px 50px 40px 50px;

        .title, .button, .input {
            z-index: 111;
            position: relative;
            color: #fff !important;
            display: none;
        }

        .title {
            width: 80%;
        }

        .input {
            margin-top: 20px;

            input, label {
            color: #fff;
            }
        }

        .material-button, .alt-2 {
            display: block;

            .shape {
            display: block;
            }
        }
        }

        .material-button, .alt-2 {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        background: #ED2553;
        position: absolute;
        top: 40px;
        right: -70px;
        cursor: pointer;
        z-index: 100;
        transform: translate(0%, 0%);
        -webkit-transform: translate(0%, 0%);
        -ms-transform: translate(0%, 0%);
        }

        .material-button .shape, .alt-2 .shape {
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        }

        .material-button .shape:before, .alt-2 .shape:before, .material-button .shape:after, .alt-2 .shape:after {
        content: "";
        background: #fff;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(360deg);
        -webkit-transform: translate(-50%, -50%) rotate(360deg);
        -ms-transform: translate(-50%, -50%) rotate(360deg);
        }

        .material-button .shape:before, .alt-2 .shape:before {
        width: 25px;
        height: 4px;
        }

        .material-button .shape:after, .alt-2 .shape:after {
        height: 25px;
        width: 4px;
        }

        .material-button.active, .alt-2.active {
        top: 50%;
        right: 50%;
        transform: translate(50%, -50%) rotate(0deg);
        -webkit-transform: translate(50%, -50%) rotate(0deg);
        -ms-transform: translate(50%, -50%) rotate(0deg);
        }

        body {
        background-image: url(https://lh4.googleusercontent.com/-XplyTa1Za-I/VMSgIyAYkHI/AAAAAAAADxM/oL-rD6VP4ts/w1184-h666/Android-Lollipop-wallpapers-Google-Now-Wallpaper-2.png);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        min-height: 100vh;
        font-family: 'Roboto', sans-serif;
        overflow: hidden;
        }

        html {
        overflow: hidden;
        }

        .materialContainer {
        width: 100%;
        max-width: 460px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        }

        * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style-type: none;
        outline: none;

        &:after, &::before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style-type: none;
            outline: none;
        }
        }
</style>
{{-- END FORMLOGIN --}}




    <!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    {{-- Form LOGIN --}}
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class="materialContainer">
 <form action="{{route('auth.postLogin')}}" method="POST">
    @csrf
    <div class="box">
        <a href="{{route('/')}}"><i class="fa-solid fa-arrow-left"></i></a>
       <div class="title">LOGIN</div>

       <div class="input">
          <label for="name">Email</label>
          <input type="email" name="email" placeholder="{{$errors->first('email')}}" style=" border:1px solid <?php echo ($errors->first('email') ? 'red' : '#ededed') ?>" value="{{old('email')}}">
          <span class="spin"></span>
       </div>

       <div class="input">
          <label for="pass">Password</label>
          <input type="password" name="password" placeholder="{{$errors->first('password')}}" style="border:1px solid <?php echo ($errors->first('password') ? 'red' : '#ededed') ?>" value="{{old('password')}}">
          <span class="spin"></span>
       </div>

       <div class="button login">
          <button type="submit" ><span>SUBMIT</span> <i class="fa fa-check"></i></button>
       </div>

       <p>You do not have an account?</p> <a href="{{route('auth.getsignup')}}" class="pass-forgot">Create an account</a>

    </div>
</form>




        {{-- <div class="overbox">
           <div class="material-button alt-2"><span class="shape"></span></div>

           <div class="title">REGISTER</div>

           <div class="input">
              <label for="regname">Username</label>
              <input type="text" name="regname" id="regname">
              <span class="spin"></span>
           </div>

           <div class="input">
              <label for="regpass">Password</label>
              <input type="password" name="regpass" id="regpass">
              <span class="spin"></span>
           </div>

           <div class="input">
              <label for="reregpass">Repeat Password</label>
              <input type="password" name="reregpass" id="reregpass">
              <span class="spin"></span>
           </div>

           <div class="button">
              <button><span>NEXT</span></button>
           </div>


        </div> --}}

     </div>

    {{-- END FORM LOGIN --}}

    {{-- <div class="container">
<hr>





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 800px;">
	<h2 class="card-title mt-3 text-center">Create Account</h2>
	<p class="text-center">Get started with your free account</p>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+971</option>
		    <option value="1">+972</option>
		    <option value="2">+198</option>
		    <option value="3">+701</option>
		</select>
    	<input name="" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control">
			<option selected=""> Select job type</option>
			<option>Designer</option>
			<option>Manager</option>
			<option>Accaunting</option>
		</select>
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Repeat password" type="password">
    </div> <!-- form-group// -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->
    <p class="text-center">Have an account? <a href="">Log In</a> </p>
</form>
</article>
</div> <!-- card.// -->

</div>
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">
<div class="card-body text-center">
    <h3 class="text-white mt-3">Bootstrap 4 UI KIT</h3>
<p class="h5 text-white">Components and templates  <br> for Ecommerce, marketplace, booking websites
and product landing pages</p>   <br>
<p><a class="btn btn-warning" target="_blank" href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com
 <i class="fa fa-window-restore "></i></a></p>
</div>
<br><br>
</article> --}}
    {{-- <div class="container" id="container">

	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<div class="form-container sign-in-container">
            <form action="{{route('auth.postLogin')}}"
            method="POST"
        >
            @csrf
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="text" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="password" />
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script>
            const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
</script> --}}
{{-- <div class="customer-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <!--login area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form" data-aos="fade-up" data-aos-delay="0">
                    <h3>Login</h3>
                    @if(Session::has('error'))
                    <div class="alert alert-danger w-100 ml-30">
                        <p class="font-light">{{Session::get('error')}}</p>
                    </div>
                    @endif
                    <form action="{{route('auth.postLogin')}}" method="POST">
                        @csrf
                        <div class="default-form-box">
                            <label>Email <span>*</span></label>
                            <input type="text" name="email" placeholder="{{$errors->first('email')}}" style=" border:1px solid <?php echo ($errors->first('email') ? 'red' : '#ededed') ?>" value="{{old('email')}}">
                        </div>
                        <div class=" default-form-box">
                            <label>Passwords <span>*</span></label>
                            <input type="password" name="password" placeholder="{{$errors->first('password')}}" style="border:1px solid <?php echo ($errors->first('password') ? 'red' : '#ededed') ?>" value="{{old('password')}}">
                        </div>
                        <div class="login_submit">
                            <button class="btn btn-md btn-black-default-hover mb-4" type="submit">login</button>
                            <label class="checkbox-default mb-4" for="offer">
                                <input type="checkbox" id="offer">
                                <span>Remember me</span>
                            </label>
                            <div style="display: flex;justify-content:space-between">
                                <div>
                                    <a href="#">Lost your password?</a>
                                </div>
                                <div>
                                    <a href="">Don't have account? Sign up now</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}
            <!--login area start-->
            <div class="col-lg-3"></div>
            <!--register area start-->
            <!-- <div class="col-lg-6 col-md-6">
                <div class="account_form register" data-aos="fade-up" data-aos-delay="200">
                    <h3>Register</h3>
                    <form action="" method="POST">
                        <div class="default-form-box">
                            <label>Email address <span>*</span></label>
                            <input type="text">
                        </div>
                        <div class="default-form-box">
                            <label>Passwords <span>*</span></label>
                            <input type="password">
                        </div>
                        <div class="login_submit">
                            <button class="btn btn-md btn-black-default-hover" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div> -->
            <!--register area end-->
        </div>
    </div>
</div> <!-- ...:::: End Customer Login Section :::... -->
    {{-- <form action="{{ route('auth.postLogin') }}" method="post">
        @csrf
        @if ($errors->any())
            <h5 style="color: red"> {{ $errorMsg }}</h5>
        @endif
        <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
        @error('email')
            <h6 style="color: rgb(255, 0, 0)">{{ $message }} </h6>
        @enderror
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
        @error('password')
            <h6 style="color: rgb(255, 0, 0)">{{ $message }} </h6>
        @enderror
        <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
        <a class="underlineHover" href=""> Đăng Ký</a>
    </div> --}}
{{-- @endsection --}}
{{-- @include('layout.footer') --}}

<script>
            $(function() {

        $(".input input").focus(function() {

        $(this).parent(".input").each(function() {
            $("label", this).css({
                "line-height": "18px",
                "font-size": "18px",
                "font-weight": "100",
                "top": "0px"
            })
            $(".spin", this).css({
                "width": "100%"
            })
        });
        }).blur(function() {
        $(".spin").css({
            "width": "0px"
        })
        if ($(this).val() == "") {
            $(this).parent(".input").each(function() {
                $("label", this).css({
                    "line-height": "60px",
                    "font-size": "24px",
                    "font-weight": "300",
                    "top": "10px"
                })
            });

        }
        });

        $(".button").click(function(e) {
        var pX = e.pageX,
            pY = e.pageY,
            oX = parseInt($(this).offset().left),
            oY = parseInt($(this).offset().top);

        $(this).append('<span class="click-efect x-' + oX + ' y-' + oY + '" style="margin-left:' + (pX - oX) + 'px;margin-top:' + (pY - oY) + 'px;"></span>')
        $('.x-' + oX + '.y-' + oY + '').animate({
            "width": "500px",
            "height": "500px",
            "top": "-250px",
            "left": "-250px",

        }, 600);
        $("button", this).addClass('active');
        })

        $(".alt-2").click(function() {
        if (!$(this).hasClass('material-button')) {
            $(".shape").css({
                "width": "100%",
                "height": "100%",
                "transform": "rotate(0deg)"
            })

            setTimeout(function() {
                $(".overbox").css({
                    "overflow": "initial"
                })
            }, 600)

            $(this).animate({
                "width": "140px",
                "height": "140px"
            }, 500, function() {
                $(".box").removeClass("back");

                $(this).removeClass('active')
            });

            $(".overbox .title").fadeOut(300);
            $(".overbox .input").fadeOut(300);
            $(".overbox .button").fadeOut(300);

            $(".alt-2").addClass('material-buton');
        }

        })

        $(".material-button").click(function() {

        if ($(this).hasClass('material-button')) {
            setTimeout(function() {
                $(".overbox").css({
                    "overflow": "hidden"
                })
                $(".box").addClass("back");
            }, 200)
            $(this).addClass('active').animate({
                "width": "700px",
                "height": "700px"
            });

            setTimeout(function() {
                $(".shape").css({
                    "width": "50%",
                    "height": "50%",
                    "transform": "rotate(45deg)"
                })

                $(".overbox .title").fadeIn(300);
                $(".overbox .input").fadeIn(300);
                $(".overbox .button").fadeIn(300);
            }, 700)

            $(this).removeClass('material-button');

        }

        if ($(".alt-2").hasClass('material-buton')) {
            $(".alt-2").removeClass('material-buton');
            $(".alt-2").addClass('material-button');
        }

        });

        });
</script>
