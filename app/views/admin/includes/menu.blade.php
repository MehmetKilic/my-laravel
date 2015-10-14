<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="lead" style="font-size:12pt;text-align:center;">
                Hoşgeldiniz Sayın,<br>  <b>{{ Auth::admin()->get()->admin_name }}</b>
            </li>
            <li>
                <a href="/ypanel"><i class="fa fa-home fa-fw"></i> Anasayfa</a>
            </li>
            <li>
                <a href="/ypanel/site"><i class="fa fa-globe fa-fw"></i> Web Siteleri</a>
            </li>
            <li>
                <a href="/ypanel/members"><i class="fa fa-user fa-fw"></i> Kullanıcılar</a>
            </li>
            <li>
                <a href="/ypanel/api"><i class="fa fa-code fa-fw"></i> Api Yönetimi</a>
            </li>
            <li>
                <a href="/ypanel/language"><i class="fa fa-language fa-fw"></i> Dil Yönetimi</a>
            </li>
            <li>
                <a href="/ypanel/data"><i class="fa fa-database fa-fw"></i> Data Yönetimi</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>
<div id="page-wrapper">