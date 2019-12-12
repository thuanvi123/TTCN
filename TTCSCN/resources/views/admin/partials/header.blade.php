
<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav style="height: 60px" class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open">
                    <a  href="" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                        <img   src="{{ asset('admin_assets/images/img.jpg') }}" alt="">
                        <?php if (is_object( Auth::user() )) : ?>
                        <p >{{ Auth::user()->name }}</p>
                        <?php endif; ?>
                    </a>
                    <div  class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="{{ route('admin.auth.logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i  class="fa fa-sign-out pull-right"></i> Log Out</a>
                        <form  id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>