@include('admin.includes.head')
@include('admin.includes.header')
@include('admin.includes.menu')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Cron Yönetimi</h1>
        <div class="col-md-12">
            <button data-toggle="modal" data-target="#insert" type="button" class="btn btn-outline btn-success" style="float: right;margin-bottom: 1%;width: 17%;">Yeni Cron Ekle</button>
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

    <!-- Yeni Blog Kategorisi Modal -->
    <div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <form action="/ypanel/blog/categories/insert" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Yeni Cron</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <p class="lead">Cron Adı : <br>
                    <input type="text" name="cron_title" class="form-control">
                </p><br>
            </div>

            <div class="col-md-12">
                <p class="lead">Çalıştırılacak Servis: <br>
                    <select class="form-control" name="category_status">
                        <option value="1">Aktif</option>
                        <option value="0">Kapalı</option>
                    </select>
                </p><br>
            </div>

            <div class="col-md-12">
                <p class="lead">Çalışma Zamanı: <br>
                    <input type="text" name="cron_time" class="form-control">
                </p><br>
            </div>

            <div class="col-md-12">
                <p class="lead">Kategori Keywords (SEO) : <br>
                    <input type="text" name="category_keywords" class="form-control">
                </p><br>
            </div>

            <div class="col-md-12">
                <p class="lead">Kategori Durumu : <br>
                    <select class="form-control" name="category_status">
                        <option value="1">Aktif</option>
                        <option value="0">Kapalı</option>
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
    <!-- Yeni Blog Kategorisi Modal -->

    <div class="col-lg-12">
        <div class="panel panel-green">
            <div class="panel-heading">
               Kategoriler
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" style="margin-top:3%;" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 184px;">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 222px;">Kategori Adı</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 222px;">Kategori Açıklaması</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 207px;">İşlem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($query as $key)
                            <tr class="gradeA odd" role="row">
                                <td class="sorting_1">{{ $key->category_id }}</td>
                                <td>{{ $key->category_name }}</td>
                                <td>{{ substr($key->category_description,0,60) }}...</td>
                                <td class="center" style="text-align:center;">
                                    <a href="/ypanel/blog/categories/edit/{{ $key->category_id }}" style="color:#FFF;" class="btn btn-info">Düzenle</a>
                                    <a href="/ypanel/blog/categories/delete/{{ $key->category_id }}" style="color:#FFF;" class="btn btn-danger">Sil</a></td>
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
