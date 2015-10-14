@include('admin.includes.head')
@include('admin.includes.header')
@include('admin.includes.menu')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Web Servis Yönetimi</h1>
        <div class="col-md-12">
            <a href="/ypanel/webservice" type="button" class="btn btn-outline btn-danger" style="float: right;margin-bottom: 1%;width: 17%;">İptal</a>
            <div class="row" style="margin-left:-30px;float:right;margin-right:-1%;">
                <div class="col-md-2" style="width:100px;">
                    <button class="btn btn-info" style="width:100%;" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-question-sign"></span> Bilgi</button>
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
        <h4 class="modal-title" id="myModalLabel">Web Servisler Hakkında</h4>
      </div>
      <div class="modal-body">
        <div class="row">
                <div class="col-md-12">
                    Yeni bir web servis oluştururken dikkat etmeniz gereken noktalar, ilgili parametreleri aşağıda ki gibi olmalıdır.<br><br>    
                    <p class="lead">Kullanımı : <br>
                        <p style="background: #ff0;">
                            [{<br>&nbsp;&nbsp;&nbsp;&nbsp;"url_params":"http://www.altinkaynak.com.tr/test",<br>&nbsp;&nbsp;&nbsp;&nbsp;"username":"webserviskullanici",<br>&nbsp;&nbsp;&nbsp;&nbsp;"password":"webservisparola",<br>&nbsp;&nbsp;&nbsp;&nbsp;"function":"GetCurrency",<br>&nbsp;&nbsp;&nbsp;&nbsp;"response":"GetCurrencyResult"<br>    }]
                    </p><br>
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
               Web Servis Düzenle
            </div>
            <div class="panel-body">
                <form action="/ypanel/webservice/edit/{{ $query->service_id }}" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead">WebServis Adı : <br>
                            <input type="text" name="service_name" value="{{ $query->service_name }}" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Servis Url : <br>
                            <input type="text" name="service_url" value="{{ $query->service_url }}" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Servis Parametreleri : <br>
                            <input type="text" name="service_params" value="{{ $query->service_params }}" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Servis Durumu : <br>
                            <select class="form-control" name="service_status">
                                <option value="1" <?php if($query->service_status == 1) {echo 'selected';} ?>>Aktif</option>
                                <option value="0" <?php if($query->service_status == 0) {echo 'selected';} ?>>Kapalı</option>
                            </select>
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Servis Şablonu : <br>
                            <select class="form-control" name="service_template">
                                <option value="soap" <?php if($query->service_template == 'soap') {echo 'selected';} ?>>Soap</option>
                                <option value="bot" <?php if($query->service_template == 'bot') {echo 'selected';} ?>>Bot</option>
                            </select>
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
