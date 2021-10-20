<div id="header-container">
  <div id="side-menu-button" class="side-menu-button">
    <button type="button" class="menu-btn"><i class="fas fa-bars"></i><span>MENU</span></button>
  </div>
  <div id="header-inner">
    <div id="header-content">
        <h1>Company Manager</h1>
        <div id="header-links">

            <a href="/">Home</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                Logout
              </a>
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </div>
    </div>
  </div>
</div>
