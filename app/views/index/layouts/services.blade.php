@include('admin.includes.head')
@include('admin.includes.header')
@include('admin.includes.menu')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Web Servis Yönetimi</h1>
        <div class="col-md-12">
            <button data-toggle="modal" data-target="#insert" type="button" class="btn btn-outline btn-success" style="float: right;margin-bottom: 1%;width: 17%;">Yeni Servis Ekle</button>
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
                        </p>
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


    <!-- Yeni WebService Modal -->
    <div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <form action="/ypanel/webservice/insert" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Yeni Kayıt</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <p class="lead">WebServis Adı : <br>
                    <input type="text" name="service_name" class="form-control">
                </p><br>
            </div>

            <div class="col-md-12">
                <p class="lead">Servis Url : <br>
                    <input type="text" name="service_url" class="form-control">
                </p><br>
            </div>

            <div class="col-md-12">
                <p class="lead">Servis Parametreleri : <br>
                    <input type="text" name="service_params" class="form-control">
                </p><br>
            </div>

            <div class="col-md-12">
                <p class="lead">Servis Durumu : <br>
                    <select class="form-control" name="service_status">
                        <option value="0">Kapalı</option>
                        <option value="1">Aktif</option>
                    </select>
                </p><br>
            </div>

            <div class="col-md-12">
                <p class="lead">Servis Şablonu : <br>
                    <select class="form-control" name="service_template">
                        <option value="soap">Soap</option>
                        <option value="bot">Bot</option>
                    </select>
                </p><br>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">İptal</button>
        <button type="submit" class="btn btn-success">Oluştur</button>
      </div>
    </form>
    </div>
    </div>
    </div>
    <!-- Yeni WebService Modal -->

    <div class="col-lg-12">
        <div class="panel panel-green">
            <div class="panel-heading">
               Web Servisler
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" style="margin-top:3%;" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 184px;">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 222px;">Servis Adı</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 222px;">Servis Şablonu</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 207px;">İşlem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($query as $key)
                            <tr class="gradeA odd" role="row">
                                <td class="sorting_1">{{ $key->service_id }}</td>
                                <td>{{ $key->service_name }}</td>
                                <td>{{ $key->service_template }}</td>
                                <td class="center" style="text-align:center;">
                                    <a href="/ypanel/webservice/edit/{{ $key->service_id }}" style="color:#FFF;" class="btn btn-info">Düzenle</a>
                                    <a href="/ypanel/webservice/delete/{{ $key->service_id }}" style="color:#FFF;" class="btn btn-danger">Sil</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table></div></div>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@include('admin.includes.footer')
