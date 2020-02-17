<div id="sidebar" class="sidebar py-3">
    <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">MAIN</div>
    <ul class="sidebar-menu list-unstyled">
            @if(Request::is('admin*'))
                <li class="sidebar-list-item">
                    <a href="{{route('admin.dashboard')}}" class="sidebar-link text-muted {{Request::is('admin/dashboard*') ? 'active' : ''}}">
                        <i class="o-home-1 mr-3 text-gray"></i><span>Dashboard</span></a>
                </li>
                <li class="sidebar-list-item">
                    <a href="{{route('admin.slider.index')}}" class="sidebar-link text-muted {{Request::is('admin/slider*') ? 'active' : ''}}">
                        <i class="o-table-content-1 mr-3 text-gray"></i> <span>Sliders</span></a>
                </li>
                <li class="sidebar-list-item">
                    <a href="{{route('admin.event.index')}}" class="sidebar-link text-muted  {{Request::is('admin/event*') ? 'active' : ''}}">
                    <i class="o-table-content-1 mr-3 text-gray"></i> <span>Events</span></a>
                </li>
                <li class="sidebar-list-item">
                    <a href="{{route('admin.video.index')}}" class="sidebar-link text-muted  {{Request::is('admin/video*') ? 'active' : ''}}">
                        <i class="o-table-content-1 mr-3 text-gray"></i> <span>Videos</span></a>
                </li>
                <li class="sidebar-list-item">
                    <a href="#" data-toggle="collapse" data-target="#gallery" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Gallery</span></a>
                    <div id="gallery" class="collapse">
                        <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                            <li class="sidebar-list-item">
                                <a href="{{route('admin.gallery.index')}}" class="sidebar-link text-muted pl-lg-5  {{Request::is('admin/gallery*') ? 'active' : ''}}">Photo Gallery</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-list-item">
                    <a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Documents</span></a>
                    <div id="pages" class="collapse">
                        <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                            <li class="sidebar-list-item">
                                <a href="{{route('admin.category.index')}}" class="sidebar-link text-muted pl-lg-5  {{Request::is('admin/category*') ? 'active' : ''}}">Category</a>
                            </li>
                            <li class="sidebar-list-item">
                                <a href="{{route('admin.subcategory.index')}}" class="sidebar-link text-muted pl-lg-5  {{Request::is('admin/subcategory*') ? 'active' : ''}}">Sub Category</a>
                            </li>
                            <li class="sidebar-list-item">
                                <a href="{{route('admin.document.index')}}" class="sidebar-link text-muted pl-lg-5  {{Request::is('admin/document*') ? 'active' : ''}}">Documents List</a>
                            </li>
                        </ul>
                    </div>
                </li>
            <li class="sidebar-list-item">
                <a href="#" data-toggle="collapse" data-target="#pagess" aria-expanded="false" aria-controls="pagess" class="sidebar-link text-muted"><i class="o-survey-1 mr-3 text-gray"></i><span>Pages</span></a>
                <div id="pagess" class="collapse">
                    <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                        <li class="sidebar-list-item">
                            <a href="{{route('admin.secretary.index')}}" class="sidebar-link text-muted pl-lg-5  {{Request::is('admin/category*') ? 'active' : ''}}">Secretary General's</a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif

            @if(Request::is('editor*'))
                <li class="sidebar-list-item">
                    <a href="{{route('editor.dashboard')}}" class="sidebar-link text-muted active">
                        <i class="o-home-1 mr-3 text-gray"></i><span>Dashboard</span></a>
                </li>
            @endif

            @if(Request::is('member*'))
                <li class="sidebar-list-item">
                    <a href="{{route('member.dashboard')}}" class="sidebar-link text-muted active">
                        <i class="o-home-1 mr-3 text-gray"></i><span>Dashboard</span></a>
                </li>
            @endif

    </ul>
</div>
