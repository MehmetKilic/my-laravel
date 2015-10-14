<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="lead" style="font-size:12pt;text-align:center;">
                Hoşgeldiniz Sayın,<br>  <b>{{ Auth::admin()->get()->username }}</b>
            </li>
            <li>
                <a href="/ypanel"><i class="fa fa-home fa-fw"></i> Anasayfa</a>
            </li>
            <li>
                <a href="/ypanel/blog/categories"><i class="fa fa-folder-open fa-fw"></i> Kategoriler</a>
            </li>
            <li>
                <a href="/ypanel/blog/posts"><i class="fa fa-file-text fa-fw"></i> Yazılar</a>
            </li>
            <!--<li>
                <a href="/ypanel/cron"><i class="fa fa-clock-o fa-fw"></i> Cron Yönetimi</a>
            </li>-->
            <li>
                <a href="/ypanel/webservice"><i class="fa fa-terminal fa-fw"></i> Web Service Yönetimi</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>
<div id="page-wrapper">