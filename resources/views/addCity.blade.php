<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Registration Page</title>
        @include('partials/headerAttachmnents') 

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Register New City</div>
            <form action="{{ route('city.store') }}" method="post">
                @csrf

                <div class="body bg-gray">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                            @endforeach
                        </div>                        
                    @endif
                    <div class="form-group">
                        <input type="text" name="city" class="form-control" placeholder="City"/>
                    </div>
                </div>
                <div class="footer">                    
                    <button type="submit" class="btn bg-olive btn-block">Add</button>
                    @if(Session::has('success'))
                      <h5 class="text-center">{{ session('success') }}</h5>
                      <a href="{{ url('/') }}" class="text-center">home</a>
                      @else
                      <a href="{{ url('/') }}" class="text-center">Home</a>
                    @endif
                </div>
            </form>
        </div>
        @include('partials/attachments')

    </body>
</html>