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
          <a href="{{ route('admin.user.index') }}">
            <div class="parent-icon">
              <i class="lni lni-user"></i>
            </div>
            <div class="menu-title">Users</div>
          </a>
        </li>
        <li>
          <a href="{{ route('admin.category.index') }}">
            <div class="parent-icon">
              <i class="lni lni-folder"></i>
            </div>
            <div class="menu-title">Categories</div>
          </a>
        </li>
        <li>
          <a href="{{ route('admin.tag.index') }}">
            <div class="parent-icon">
              <i class="lni lni-tag"></i>
            </div>
            <div class="menu-title">Tags</div>
          </a>
        </li>
        <li>
          <a href="{{ route('admin.post.index') }}">
            <div class="parent-icon">
              <i class="lni lni-files"></i>
            </div>
            <div class="menu-title">Posts</div>
          </a>
        </li>
        <li>
          <a href="pages-to-do.html">
            <div class="parent-icon">
              <i class="bi bi-check2-square"></i>
            </div>
            <div class="menu-title">To Do</div>
          </a>
        </li>
        
      </ul>
      <!--end navigation-->
    </aside>
    <!--end sidebar -->