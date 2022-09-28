<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <div>
          <img src="{{asset('assets/admin/images/logo-icon-2.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
          <h4 class="logo-text">Blackdash</h4>
        </div>
        <div class="toggle-icon ms-auto">
          <ion-icon name="menu-sharp"></ion-icon>
        </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
       
        <li class="menu-label">Blog</li>
        <li>
          <a href="{{ route('admin.main.index') }}">
            <div class="parent-icon">
            <i class="lni lni-home"></i>
            </div>
            <div class="menu-title">Home</div>
          </a>
        </li>

        <li>
          <a href="{{ route('personal.liked.index')}}">
            <div class="parent-icon">
              <i class="lni lni-heart"></i>
            </div>
            <div class="menu-title">Liked posts</div>
          </a>
        </li>
        <li>
          <a href="{{ route('personal.comment.index')}}">
            <div class="parent-icon">
              <i class="lni lni-comments"></i>
            </div>
            <div class="menu-title">Comments</div>
          </a>
        </li>
      </ul>
      <!--end navigation-->
    </aside>
    <!--end sidebar -->