<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            @if (Auth::guest())
                @include('layouts.nav-guest')
            @else
                @include('layouts.nav-user')
            @endif
        </ul>
    </div>
</div>
<!-- /sidebar menu -->
