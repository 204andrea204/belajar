@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <title>Login</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
</head>
<body class="my-login-page">
<form method="POST" action="{{ route('login') }}">
@csrf
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    
                    <div class="card fat" style="border-radius: 60px; margin-top: 10px;">   
                     <div class="brand" style="width: 200px; height: 200px;">
                        <img src="{{url('my-login/img/capstone.jpeg')}}" class="img-responsive" alt="Cinque Terre">
                    </div>               
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;">Login</h4>
                            <form method="POST">
                             
                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>

                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password
                                        
                                    </label>
                                    <input id="password" type="password" class="form-control" name="password" required data-eye>
                                </div>

                                <div class="form-group no-margin">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Login
                                    </button>
                                </div>  
                                <div class="margin-top20 text-center">
                                    Don't have an account? <a href="register.html">Create One</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
</body>
</html>


@endsection
