
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{asset('assets')}}/admin/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href={{asset('assets')}}/admin/"assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/css/main-style.css" rel="stylesheet" />



    <link href="{{asset('assets')}}/admin/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/css/main-style.css" rel="stylesheet" />
    @yield("head")

</head>

<body class="body-Login-back">

<div class="container">

    <div class="row">

        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    @include('home.messages')
                    <form role="form" action="{{('loginadmincheck')}}" method="post">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="email" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->

                            <button type="submit"  class="btn btn-lg btn-success btn-block">Login</button>
                            <a href="/registeruser" class="btn btn-lg btn-success btn-block">Register</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Scripts - Include with every page -->
<script src="{{asset('assets')}}/admin/assets/plugins/jquery-1.10.2.js"></script>
<script src="{{asset('assets')}}/admin/assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/plugins/metisMenu/jquery.metisMenu.js"></script>




<script src="{{asset('assets')}}/admin/assets/plugins/jquery-1.10.2.js"></script>
<script src="{{asset('assets')}}/admin/assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="{{asset('assets')}}/admin/assets/plugins/pace/pace.js"></script>
<script src="{{asset('assets')}}/admin/assets/scripts/siminta.js"></script>



</body>

</html>
