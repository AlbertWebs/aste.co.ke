<!DOCTYPE html>
<html lang="en">


<head>
    <?php $SiteSettings = DB::table('_site_settings')->get(); ?>
    @foreach ($SiteSettings as $SiteSettings)
    <head>
        <title> {{$SiteSettings->sitename}} - AdminsPanel </title>
      <!--== META TAGS ==-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!--== FAV ICON ==-->
      <link rel="shortcut icon" href="images/fav.ico">
  
      <!-- GOOGLE FONTS -->
      <link href="../../../../fonts.googleapis.com/csse9c0.css?family=Nunito+Sans:400,600,700" rel="stylesheet">
  
      <!-- FONT-AWESOME ICON CSS -->
      <link rel="stylesheet" href="css/font-awesome.min.css">
  
      <!--== ALL CSS FILES ==-->
      <link rel="stylesheet" href="{{asset('admin-theme/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('admin-theme/css/mob.css')}}">
      <link rel="stylesheet" href="{{asset('admin-theme/css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('admin-theme/css/materialize.css')}}" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="blog-login">
        <div class="blog-login-in">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <img width="200" src="{{url('/')}}/uploads/logo/{{$SiteSettings->logo}}" alt="" />
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="first_name1">Username</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <label for="last_name">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button class="waves-effect waves-light btn-large btn-log-in" type="submit">Login</button>
                    </div>
                </div>
                <a href="forgot.html" class="for-pass">Forgot Password?</a>
            </form>
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <script src="{{asset('admin-theme/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin-theme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin-theme/js/materialize.min.js')}}"></script>
    <script src="{{asset('admin-theme/js/custom.js')}}"></script>
    <script>
        $(document).ready(function() {
            var some_id = $('#first_name1');
            some_id.prop('type', 'text');
            some_id.removeAttr('autocomplete');
        });
    </script>
</body>


@endforeach
</html>