  <!-- Start XP Menubar -->                    
  <div class="xp-menubar text-left">
      <!-- Start XP Nav -->
      <nav class="xp-horizontal-nav xp-mobile-navbar xp-fixed-navbar">
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="xp-horizontal-menu">
              @each('layouts.menuitem', $menuList, 'menu', 'empty')
              {{-- @include('layouts.menuuuuuuu') --}}
            </ul>
          </div>
      </nav>
      <!-- End XP Nav -->
  </div>
  <!-- End XP Menubar -->