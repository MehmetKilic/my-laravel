@include('admin.includes.head')
@include('admin.includes.header')
@include('admin.includes.menu')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Profil Yönetimi</h1>
        <div class="col-md-12">
            <a href="/ypanel/profile" type="button" class="btn btn-outline btn-danger" style="float: right;margin-bottom: 1%;width: 17%;">İptal</a>
            <div class="row" style="margin-left:-30px;float:right;margin-right:-1%;">
                <div class="col-md-2" style="width:100px;">
                    <button class="btn btn-info" style="float:right;margin-right:10px;" data-toggle="modal" data-target="#myModal"><span class="fa fa-unlock-alt"></span> Şifre Değiştir</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
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

    <!-- Bilgi Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Şifre Güncelleme</h4>
      </div>
      <div class="modal-body">
        <div class="row">
                <div class="col-md-12">
                    Şifrenizi aşağıda ki alanlardan güncelleyebilirsiniz.<br><br>    
                    <form action="/ypanel/profile/updatepassword" method="POST">
                    	<div class="col-md-12">
	                        <p class="lead">Yeni Şifreniz : <br>
	                            <input type="text" name="new_password" class="form-control">
	                        </p><br>
	                    </div>
                    </form>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
    </div>
    <!-- Bilgi Modal -->
    
    <div class="col-lg-12">
        <div class="panel panel-red">
            <div class="panel-heading">
               Profil Düzenle
            </div>
            <div class="panel-body">
                <form action="/ypanel/profile" method="post">
                <div class="row">
                    
                    <div class="col-md-12">
                        <p class="lead">Email Adresi: <br>
                            <input type="text" name="username" value="{{ $query->username }}" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12"><button class="btn btn-warning" type="submit">Düzenle</button></div>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@include('admin.includes.footer')
