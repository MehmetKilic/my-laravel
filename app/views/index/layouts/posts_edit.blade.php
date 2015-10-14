@include('admin.includes.head')
@include('admin.includes.header')
@include('admin.includes.menu')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Blog Yazısı Yönetimi</h1>
        <div class="col-md-12">
            <a href="/ypanel/blog/posts" type="button" class="btn btn-outline btn-danger" style="float: right;margin-bottom: 1%;width: 17%;">İptal</a>
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
               Blog Yazısı Düzenle
            </div>
            <div class="panel-body">
                <form action="/ypanel/blog/posts/edit/{{ $query->post_id }}" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead">Yazı Kategorisi : <br>
                            <select class="form-control" name="blog_category_id">
                                <option value="0"  @if($query->blog_category_id == 0 ) {{"selected"}} @endif>Seçiniz</option>
                                @foreach($categorys as $category)
                                <option value="{{ $category->category_id }}" @if($category->category_id == $query->blog_category_id ) {{"selected"}} @endif>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Yazı Başlığı : <br>
                            <input type="text" name="post_title" value="{{ $query->post_title }}" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Yazı İçeriği: <br>
                            <textarea type="text" name="post_content" id="post_content" class="form-control">{{ $query->post_content }}</textarea>
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Yazı Description (SEO) : <br>
                            <input type="text" name="post_description" value="{{ $query->post_description }}" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Yazı Keywords (SEO) : <br>
                            <input type="text" name="post_keywords" value="{{ $query->post_keywords }}" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Yazı Etiketleri (SEO) : <br>
                            <input type="text" name="post_tags" value="{{ $query->post_tags }}" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Yazı Durumu : <br>
                            <select class="form-control" name="post_status">
                                <option value="1" <?php if($query->post_status == 1) {echo 'selected';} ?>>Aktif</option>
                                <option value="0" <?php if($query->post_status == 0) {echo 'selected';} ?>>Kapalı</option>
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
