@include('index.includes.head')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Sistem Paneli</h3>
                </div>
                @if($error = Session::get('error'))
                <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <i class="fa fa-ban-circle"></i>{{ $error }}
                </div>
                @endif

                @if($success = Session::get('success'))
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <i class="fa fa-ok-sign"></i>{{ $success }}
                </div>
                @endif
                <div class="panel-body">
                    <form method="POST" action="{{ URL::asset('panel/login')}}">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="username" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-lg btn-success btn-block">Giriş</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="row" style="text-align:center;">
                <div class="col-md-12">
                    <a class="btn btn-default">
                      beta <span class="badge">v1.0.7</span>
                    </a>
                </div> 
            </div>
        </div>
    </div>
</div>
@include('index.includes.footer')