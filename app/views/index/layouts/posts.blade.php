@include('admin.includes.head')
@include('admin.includes.header')
@include('admin.includes.menu')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Blog Yazıları Yönetimi</h1>
        <div class="col-md-12">
            <a href="/ypanel/blog/posts/insert" data-target="#insert" type="button" class="btn btn-outline btn-success" style="float: right;margin-bottom: 1%;width: 17%;">Yeni Yazı Ekle</a>
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

    <div class="col-lg-12">
        <div class="panel panel-green">
            <div class="panel-heading">
               Yazılar
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" style="margin-top:3%;" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 184px;">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 222px;">Kategori</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 222px;">Başlık</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 207px;">İşlem</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($query as $key)
                            <tr class="gradeA odd" role="row">
                                <td class="sorting_1">{{ $key->post_id }}</td>
                                <td>@foreach($categorys as $category) @if( $category->category_id == $key->blog_category_id ) {{ $category->category_name }} @endif @endforeach</td>
                                <td>{{ $key->post_title }} </td>
                                <td class="center" style="text-align:center;">
                                    <a href="/ypanel/blog/posts/edit/{{ $key->post_id }}" style="color:#FFF;" class="btn btn-info">Düzenle</a>
                                    <a href="/ypanel/blog/posts/delete/{{ $key->post_id }}" style="color:#FFF;" class="btn btn-danger">Sil</a></td>
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
