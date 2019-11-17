<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
        @include('partials/headerAttachmnents')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script >
            function botton() {
            document.getElementByID('').innerHTML =''
        }

        </script>
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="{{ route('login') }}" method="post">
                @csrf
                
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" id="userid"name="email" value="{{ old('email') }}" @error('email') is-invalid @enderror" required autocomplete="email" autofocus class="form-control"/>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="form-group">
                        <input type="password" id="Pass" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                    </div>     
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <div class="form-group">
                        <input type="checkbox" id="btn" onclick="botton" name="remember" {{ old('remember') ? 'checked' : '' }}/> Remember me
                    </div>
                     
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block" name="login">Sign me in</button>  
                    
                    <p><a href="#">I forgot my password</a></p>
                    
                    <a href="{{ route('register')}}" class="text-center">Register a new membership</a>
                </div>
            </form>
        </div>
        @include('partials/attachments')

    </body>
</html>