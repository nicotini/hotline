<!doctype html>
<html lang="en" class="semi-dark h-100">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="{{asset('assets/admin/css/pace.min.css')}}" rel="stylesheet" />
  <script src="{{asset('assets/admin/js/pace.min.js')}}"></script>

  <!--plugins-->
  
  <link href="{{asset('assets/admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/admin/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/admin/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
  
<!-- summernote -->
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-lite.min.css') }}">
  <!-- CSS Files -->
  <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/css/icons.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('assets/admin/plugins/input-tags/css/tagsinput.css')}}">
  <!--Theme Styles-->
  <link href="{{asset('assets/admin/css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/admin/css/semi-dark.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/admin/css/header-colors.css')}}" rel="stylesheet" />

  <title>Blog Admin Panel</title>
</head>

<body class="d-flex flex-column h-100">


  <!--start wrapper-->
  <div class="wrapper">

    @include('admin.includes.sidebar')

    <!--start top header-->
    <header class="top-header">
      <nav class="navbar navbar-expand gap-3">
        <div class="mobile-menu-button">
          <i class="bi bi-list"></i>
        </div>
        <div class="top-navbar-right ms-auto">

          <ul class="navbar-nav align-items-center">
            <li class="nav-item mobile-search-button">
              <a class="nav-link" href="javascript:;">
                <div class="">
                  <i class="bi bi-search"></i>
                </div>
              </a>
            </li>
           
            
            
            <li class="nav-item dropdown dropdown-user-setting">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                <div class="user-setting">
                  <img src="https://via.placeholder.com/110X110/212529/fff" class="user-img" alt="">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="javascript:;">
                    <div class="d-flex flex-row align-items-center gap-2">
                      <img src="https://via.placeholder.com/110X110/212529/fff" alt="" class="rounded-circle" width="54" height="54">
                      <div class="">
                        <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                        <small class="mb-0 dropdown-user-designation text-secondary">UI Developer</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:;">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <ion-icon name="person-outline"></ion-icon>
                      </div>
                      <div class="ms-3"><span>Profile</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:;">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <ion-icon name="settings-outline"></ion-icon>
                      </div>
                      <div class="ms-3"><span>Setting</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:;">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <ion-icon name="speedometer-outline"></ion-icon>
                      </div>
                      <div class="ms-3"><span>Dashboard</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:;">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <ion-icon name="wallet-outline"></ion-icon>
                      </div>
                      <div class="ms-3"><span>Earnings</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:;">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <ion-icon name="cloud-download-outline"></ion-icon>
                      </div>
                      <div class="ms-3"><span>Downloads</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:;">
                    <div class="d-flex align-items-center">
                      <div class="">
                        <ion-icon name="log-out-outline"></ion-icon>
                      </div>
                      <div class="ms-3">
                        <form action="{{ route('logout') }}" method="post">
                          @csrf
                          <input type="submit" value="Logout">
                        </form>
                    </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

          </ul>

        </div>
      </nav>
    </header>
    <!--end top header-->


    @yield('content')


    <!--start footer-->
    <footer class="footer mt-auto py-3 position-fixed">
        <div class="container">
            <div class="footer-text">
                Copyright © 2021. All right reserved.
            </div>
        </div>
    </footer>
    <!--end footer-->


    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top">
      <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
    <!--End Back To Top Button-->

    


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

  </div>
  <!--end wrapper-->


  <!-- JS Files-->
  <script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/admin/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('assets/admin/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{ asset('assets/admin/plugins/summernote/summernote-lite.min.js') }}"></script>
  <script src="{{asset('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <!--plugins-->
  <!-- Summernote -->
  
  <script src="{{asset('assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('assets/admin/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
  <script src="{{ asset('assets/admin/plugins/input-tags/js/tagsinput.js')}}"></script>
  <script src="{{ asset('assets/admin/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/form-select2.js') }}"></script>
  <!-- <script src="{{asset('assets/admin/js/index.js')}}"></script> -->
  <!-- Main JS-->
  <script src="{{asset('assets/admin/js/main.js')}}"></script>
  <script>
    
     $(function () {
    // Summernote
    $('#summernote').summernote({
      toolbar: [
      // [groupName, [list of button]]
      ['style', ['bold', 'italic', 'underline', 'clear']],
      ['font', ['strikethrough', 'superscript', 'subscript']],
      ['fontsize', ['fontsize']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['height', ['height']]
    ]
    })
  
    });
  </script>

</body>

</html>