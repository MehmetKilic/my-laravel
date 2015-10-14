@include('index.includes.head')
@include('index.includes.header')
@include('index.includes.menu')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">{{ Lang::get('index/menu.dashboard') }}</h1>
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
                    <?php echo date("d.m.Y H:i:s");?> verileri
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Data</th>
                                    <th>Değer</th>
                                    <th>Zaman</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>1</td>
                                    <td>Text 1</td>
                                    <td>Text 2</td>
                                    <td class="center">Text 3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <div class="well">
                        <a class="btn btn-default btn-lg btn-block" target="_blank" href="/ypanel/search/statistics">Tüm Data</a>
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
    <i class="fa fa-bell fa-fw"></i> Cron İzlencesi
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="list-group">

        <a href="#" class="list-group-item">
            <i class="fa fa-upload fa-fw"></i> Server Rebooted
            <span class="pull-right text-muted small"><em>11:32 AM</em>
            </span>
        </a>

        <a href="#" class="list-group-item">
            <i class="fa fa-upload fa-fw"></i> Server Rebooted
            <span class="pull-right text-muted small"><em>11:32 AM</em>
            </span>
        </a>

        <a href="#" class="list-group-item">
            <i class="fa fa-upload fa-fw"></i> Server Rebooted
            <span class="pull-right text-muted small"><em>11:32 AM</em>
            </span>
        </a>

        <a href="#" class="list-group-item">
            <i class="fa fa-upload fa-fw"></i> Server Rebooted
            <span class="pull-right text-muted small"><em>11:32 AM</em>
            </span>
        </a>
       
    </div>
    <!-- /.list-group -->
    <a href="#" class="btn btn-default btn-block">View All Alerts</a>
</div>
<!-- /.panel-body -->
</div>
@include('index.includes.footer')
