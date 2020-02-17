<header class="header">
    <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#"
                                                                      class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i
                class="fas fa-align-left"></i></a><a href="{{route('admin.dashboard')}}"
                                                     class="navbar-brand font-weight-bold text-uppercase text-base">BIMSTEC {{Auth::user()->role->name}}
            Panel</a>
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
            <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown"
                                                     aria-haspopup="true" aria-expanded="false"
                                                     class="nav-link dropdown-toggle">
                    <img src="{{asset('storage/profile/'.\Illuminate\Support\Facades\Auth::user()->image)}}"
                         alt="Jason Doe"
                         style="width: 2.5rem; height: 2.5rem; object-fit: cover; object-position: center;"
                         class="img-fluid rounded-circle shadow">
                </a>
                <div aria-labelledby="userInfo" class="dropdown-menu">
                    <a href="#" class="dropdown-item">
                        <strong
                            class="d-block text-uppercase headings-font-family">{{\Illuminate\Support\Facades\Auth::user()->name}}</strong>
                        <small class="text-primary">{{\Illuminate\Support\Facades\Auth::user()->email}}</small>
                        <br>
                        <small>{{\Illuminate\Support\Facades\Auth::user()->role->name}}</small>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('admin.profile.edit',\Illuminate\Support\Facades\Auth::user()->id)}}"
                       class="dropdown-item">Update Profile</a>
                    <a href="{{route('admin.changePassword')}}" class="dropdown-item">Change Password</a>
                    <a href="{{route('admin.profile.create')}}" class="dropdown-item">Create Users</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="dropdown-item">
                        Sign Out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
</header>
