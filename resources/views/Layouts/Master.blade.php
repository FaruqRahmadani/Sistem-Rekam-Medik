<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Aplikasi Rujukan Pasien</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}" id="maincss">
</head>

<body>
  <div class="wrapper">
    <header class="topnavbar-wrapper">
      <nav class="navbar topnavbar" role="navigation">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <div class="brand-logo">
              <p>SI Rekam Medik</p>
            </div>
            <div class="brand-logo-collapsed">
              <p>SI-REM</p>
            </div>
          </a>
        </div>
        <div class="nav-wrapper">
          <ul class="nav navbar-nav">
            <li>
              <a class="hidden-xs" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed">
                <em class="fa fa-navicon"></em>
              </a>
              <a class="visible-xs sidebar-toggle" href="#" data-toggle-state="aside-toggled" data-no-persist="true">
                <em class="fa fa-navicon"></em>
              </a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-list">
              <a href="#" data-toggle="dropdown" data-toggle-state="offsidebar-open" data-no-persist="true">
                <em class="fa fa-user"></em>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <aside class="aside">
      <div class="aside-inner">
        <nav class="sidebar" data-sidebar-anyclick-close="">
          <ul class="nav">
            <li>
              <a href="/">
                <em class="icon-grid"></em>
                <span>Dashboard</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <aside class="offsidebar hide">
      <nav>
        <div role="tabpanel">
          <div class="tab-content">
            <div class="tab-pane fade in active" id="app-chat" role="tabpanel">
              <li class="has-user-block">
                <div id="user-block">
                  <div class="item user-block">
                    <div class="user-block-picture">
                      <div class="user-block-status">
                        <img class="img-thumbnail img-circle" src="{{asset('img/user/default.png')}}" alt="Avatar" width="60" height="60">
                        <div class="circle circle-success circle-lg"></div>
                      </div>
                    </div>
                    <div class="user-block-info">
                      <span class="user-block-name">#######</span>
                      <span class="user-block-role">#######</span>
                    </div>
                  </div>
                </div>
              </li>
              <hr class="no-margin">
              <ul class="nav">
                <li class="nav-item">
                  <a class="media-box p mt0" href="#" id="logout">
                    <span class="media-box-body">
                      <span class="media-box-heading">
                        <em class="fa fa-power-off"></em> Logout
                      </span>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </aside>
    <section>
      <div id="app" class="content-wrapper">
        @yield('content')
      </div>
    </section>
    <footer>
      <span>&copy; 2017 - Angle</span>
    </footer>
  </div>
  <script src="{{asset('js/app.js')}}"></script>
  @if (session('alert'))
    <script type="text/javascript">
    notif('{{session('tipe')}}', '{{session('judul')}}', '{{session('pesan')}}');
    </script>
  @endif
  @if ($errors->any())
    <script type="text/javascript">
    notif('error', 'Error', '{{ $errors->first() }}');
    </script>
  @endif
</body>
</html>
