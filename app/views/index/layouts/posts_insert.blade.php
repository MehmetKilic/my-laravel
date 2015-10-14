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
               Blog Yazısı Oluştur
            </div>
            <div class="panel-body">
                <form action="/ypanel/blog/posts/insert" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead">Yazı Kategorisi : <br>
                            <select name="blog_category_id" class="form-control">
                                <option value="0">Seçiniz</option>
                                @foreach($categorys as $category)
                                <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Yazı Başlığı : <br>
                            <input type="text" name="post_title" id="post_title" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Yazı İçeriği: <br>
                            <textarea type="text" name="post_content" id="post_content" class="form-control"></textarea>
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Yazı Description (SEO) : <br>
                            <input type="text" name="post_description" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Yazı Keywords (SEO) : <br>
                            <input type="text" name="post_keywords" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Yazı Etiketleri (SEO) : <br>
                            <input type="text" name="post_tags" class="form-control">
                        </p><br>
                    </div>

                    <div class="col-md-12">
                        <p class="lead">Yazı Durumu : <br>
                            <select class="form-control" name="post_status">
                                <option value="1">Aktif</option>
                                <option value="0">Kapalı</option>
                            </select>
                        </p><br>
                    </div>

                    <div class="col-md-12"><button class="btn btn-success" type="submit">Ekle</button></div>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@include('admin.includes.footer')
