@include('admin.includes.head')
@include('admin.includes.header')
@include('admin.includes.menu')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Blog Kategori Yönetimi</h1>
        <div class="col-md-12">
            <a href="/ypanel/blog/categories" type="button" class="btn btn-outline btn-danger" style="float: right;margin-bottom: 1%;width: 17%;">İptal</a>
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
        <div class="panel panel-red">
            <div class="panel-heading">
               Blog Kategorisi Düzenle
            </div>
            <div class="panel-body">
                <form action="/ypanel/blog/categories/edit/{{ $query->category_id }}" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead">Kategori Adı : <br>
                            <input type="text" name="category_name" value="{{ $query->category_name }}" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Category Description (SEO) : <br>
                            <input type="text" name="category_description" value="{{ $query->category_description }}" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Category Keywords (SEO) : <br>
                            <input type="text" name="category_keywords" value="{{ $query->category_keywords }}" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Kategori Durumu : <br>
                            <select class="form-control" name="category_status">
                                <option value="1" <?php if($query->category_status == 1) {echo 'selected';} ?>>Aktif</option>
                                <option value="0" <?php if($query->category_status == 0) {echo 'selected';} ?>>Kapalı</option>
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
