@include('admin.includes.head')
@include('admin.includes.header')
@include('admin.includes.menu')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Panel</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
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
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-8">
<!-- /.panel -->
<div class="panel panel-default">
<div class="panel-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Son Kullanıcılar
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>İsim</th>
                                    <th>Email</th>
                                    <th>Statü</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( $allMembers as $key => $value )
                                <tr class="odd gradeX">
                                    <td>{{ $value->member_id }}</td>
                                    <td>{{ $value->member_name }}</td>
                                    <td>{{ $value->member_email }}</td>
                                    <td>@if( $value->member_status == 0 ) {{ 'Deaktif' }} @else {{ 'Aktif' }} @endif</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <div class="well">
                        <a class="btn btn-default btn-lg btn-block" target="_blank" href="/ypanel/members">Tüm Kullanıcılar</a>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-8 -->
<div class="col-lg-4">
<div class="panel panel-default">
<div class="panel-heading">
    <i class="fa fa-bell fa-fw"></i> Son Eklenen Siteler
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="list-group">
        @foreach( $allWebSites as $key => $value )
        <a href="{{ $value->site_url }}" target="_blank" class="list-group-item" style="height:70px;">
            <i class="fa fa-globe fa-fw"></i> {{ $value->site_url }}
            <span class="pull-right text-muted small"><em>{{ $value->created_at }}</em>
            </span>
        </a>
        @endforeach
    </div>
    <!-- /.list-group -->
    <a href="/ypanel/sites" class="btn btn-default btn-block">Tüm Siteler</a>
</div>
<!-- /.panel-body -->
</div>
@include('admin.includes.footer')
