<!-- HEADER -->
<nav class="navbar navbar-default navbar-fixed-top navShadow">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}"><i class="fa fa-home"></i>
                        &nbsp;&nbsp;Home</a></li>
                <li><a href="{{ url('/mahasiswa') }}"><i class="fa fa-user"></i>
                        &nbsp;&nbsp;Mahasiswa</a></li>
                <li><a href="{{ url('/dosen') }}"><i class="fa fa-university"></i>
                        &nbsp;&nbsp;Dosen</a></li>
                <li><a href="{{ url('/frs') }}"><i class="fa fa-calendar-check-o"></i>
                        &nbsp;&nbsp;KRS</a></li>
                <li><a href="{{ url('/daftar_kelas') }}"><i class="fa fa-group"></i>
                        &nbsp;&nbsp;Daftar Kelas</a>
                </li>
                <li><a href="{{ url('/mata_kuliah') }}"><i class="fa fa-book"></i>
                        &nbsp;&nbsp;Mata Kuliah</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br><br><br><br>
<!-- END HEADER -->