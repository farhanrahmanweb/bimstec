<nav class="navbar no-margin-bottom bootsnav alt-font bg-white sidebar-nav sidebar-nav-style-1 navbar-expand-lg">
    <!-- start logo -->
    <div class="col-12 sidenav-header">
        <div class="logo-holder">
            <a href="{{url('')}}" class="display-inline-block logo">
                <img alt="Pofo" src="{{asset('frontend/images/logo.png')}}" data-rjs="images/logo@2x.png"/></a>
        </div>
        <!-- end logo -->
        <button class="navbar-toggler mobile-toggle" type="button" id="mobileToggleSidenav">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <div class="col-12 px-0">
        <div id="navbar-menu" class="collapse navbar-collapse no-padding">
            <ul class="nav navbar-nav navbar-left-sidebar font-weight-500">
                <li class="{{ Request::path() == 'about-bimstec' ||
                              Request::path() == 'bimstec-guiding-principles' ||
                              Request::path() == 'bimstec-chairmanship' ||
                              Request::path() == 'bimstec-secretariat' ||
                              Request::path() == 'directors-divisions' ||
                              Request::path() == 'bimstec-organogram' ||
                              Request::path() == 'past-secretary-general'||
                              Request::path() == 'bimstec-mechanism' ||
                              Request::path() == 'bimstec-centres' ? 'dropdown active' : 'dropdown' }}">
                    <a href="#" title="About us" data-toggle="dropdown">About us<i class="fas fa-angle-right pull-right"></i></a>
                    <ul class="dropdown-menu second-level">
                        <li class="dropdown">
                            <a href="{{route('about-bimstec')}}" title="About BIMSTEC">About BIMSTEC</a>
                        </li>
                        <li class="{{Request::path() == 'bimstec-guiding-principles' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('bimstec-guiding-principles')}}" title="BIMSTEC Guiding Principles" data-toggle="dropdown">BIMSTEC Guiding Principles</a>
                        </li>
                        <li class="{{Request::path() == 'bimstec-chairmanship' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('bimstec-chairmanship')}}" title="BIMSTEC Chairmanship" data-toggle="dropdown">BIMSTEC Chairmanship</a>
                        </li>
                        <li class="{{Request::path() == 'bimstec-secretariat' ||
                                     Request::path() == 'directors-divisions' ||
                                     Request::path() == 'bimstec-organogram' ||
                                     Request::path() == 'past-secretary-general' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('bimstec-secretariat')}}" title="BIMSTEC Secretariat" data-toggle="dropdown">BIMSTEC Secretariat <i class="fas fa-angle-right"></i></a>
                            <ul class="dropdown-menu third-level">
                                <li class="{{Request::path() == 'directors-divisions' ? 'active' : '' }}"><a href="{{route('directors-divisions')}}">Directors and Divisions</a></li>
                                <li class="{{Request::path() == 'bimstec-organogram' ? 'active' : '' }}"><a href="{{route('bimstec-organogram')}}">Organogram</a></li>
                                <li class="{{Request::path() == 'past-secretary-general' ? 'active' : '' }}"><a href="{{route('past-secretary-general')}}">Past Secretary General</a></li>
                            </ul>
                        </li>
                        <li class="{{Request::path() == 'bimstec-mechanism' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('bimstec-mechanism')}}" title="BIMSTEC Mechanism" data-toggle="dropdown">BIMSTEC Mechanism</a>
                        </li>
                        <li class="{{Request::path() == 'bimstec-centres' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('bimstec-centres')}}" title="BIMSTEC Centres" data-toggle="dropdown">BIMSTEC Centres</a>
                        </li>
                    </ul>
                </li>
                <li class="{{Request::path() == 'secretary-general' ? 'dropdown active' : 'dropdown' }}">
                    <a href="{{route('secretary-general')}}" title="Secretary General">Secretary General</a>
                </li>
                <li class="{{Request::path() == 'areas-cooperation' ||
                             Request::path() == 'trade-investment' ||
                             Request::path() == 'transport-communication' ||
                             Request::path() == 'energy' ||
                             Request::path() == 'tourism' ||
                             Request::path() == 'technology' ||
                             Request::path() == 'fisheries' ||
                             Request::path() == 'agriculture' ||
                             Request::path() == 'public-health' ||
                             Request::path() == 'poverty-alleviation' ||
                             Request::path() == 'counter-terrorism-transnational-crime' ||
                             Request::path() == 'environment-disaster-management' ||
                             Request::path() == 'people-to-people-contact' ||
                             Request::path() == 'bnptt.php' ||
                             Request::path() == 'cultural-cooperation' ||
                             Request::path() == 'climate-change'
                             ? 'dropdown active' : 'dropdown' }}">
                    <a href="{{route('areas-cooperation')}}" title="Areas of Cooperation">Areas of Cooperation <i class="fas fa-angle-right"></i></a>
                    <ul class="dropdown-menu second-level">
                        <li class="{{Request::path() == 'trade-investment' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('trade-investment')}}" title="Trade & Investment" data-toggle="dropdown">Trade & Investment <i class="fas fa-angle-right"></i></a>
                            <ul class="dropdown-menu third-level">
                                <li><a href="#">FTA</a></li>
                            </ul>
                        </li>
                        <li class="{{Request::path() == 'transport-communication' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('transport-communication')}}" title="Transport and Communication">Transport and Communication</a>
                        </li>
                        <li class="{{Request::path() == 'energy' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('energy')}}" title="Energy sector">Energy</a>
                        </li>
                        <li class="{{Request::path() == 'tourism' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('tourism')}}" title="Tourism">Tourism</a>
                        </li>
                        <li class="{{Request::path() == 'technology' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('technology')}}" title="Technology">Technology</a>
                        </li>
                        <li class="{{Request::path() == 'fisheries' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('fisheries')}}" title="Fisheries">Fisheries</a>
                        </li>
                        <li class="{{Request::path() == 'agriculture' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('agriculture')}}" title="Agriculture">Agriculture</a>
                        </li>
                        <li class="{{Request::path() == 'public-health' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('public-health')}}" title="Public Health">Public Health</a>
                        </li>
                        <li class="{{Request::path() == 'poverty-alleviation' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('poverty-alleviation')}}" title="Poverty Alleviation">Poverty Alleviation</a>
                        </li>
                        <li class="{{Request::path() == 'counter-terrorism-transnational-crime' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('counter-terrorism-transnational-crime')}}" title="Counter-Terrorism and Transnational Crime">Counter-Terrorism and Transnational Crime</a>
                        </li>
                        <li class="{{Request::path() == 'environment-disaster-management' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('environment-disaster-management')}}" title="Environment & Disaster Management">Environment & Disaster Management</a>
                        </li>

                        <li class="{{Request::path() == 'people-to-people-contact' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('people-to-people-contact')}}" title="People to People Contact" data-toggle="dropdown">People to People Contact <i class="fas fa-angle-right"></i></a>
                            <ul class="dropdown-menu third-level">
                                <li class="{{Request::path() == 'bnptt.php' ? 'active' : '' }}"><a href="bnptt.php">BNPTT</a></li>
                            </ul>
                        </li>
                        <li class="{{Request::path() == 'cultural-cooperation' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('cultural-cooperation')}}" title="Cultural Cooperation">Cultural Cooperation</a>
                        </li>
                        <li class="{{Request::path() == 'climate-change' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('climate-change')}}" title="Climate Change">Climate Change</a>
                        </li>

                    </ul>
                </li>

                <li class="{{Request::path() == '#' ? 'dropdown active' : 'dropdown' }}">
                    <a data-toggle="dropdown" href="#" title="Events">Events</a>
                </li>
                <li class="{{Request::path() == 'photos' || Request::path() == 'videos' ? 'dropdown active' : 'dropdown' }}">
                    <a data-toggle="dropdown" href="#" title="Gallery">Gallery <i class="fas fa-angle-right"></i></a>
                    <ul class="dropdown-menu second-level">
                        <li class="{{Request::path() == 'photos' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('photos')}}" title="Photos">Photos</a>
                        </li>
                        <li class="{{Request::path() == 'videos' ? 'dropdown active' : 'dropdown' }}">
                            <a href="{{route('videos')}}" title="Videos">Videos</a>
                        </li>
                    </ul>
                </li>
                <li class="{{Request::path() == 'documents' ? 'dropdown active' : 'dropdown' }}">
                    <a href="{{route('documents')}}" title="Documents">Documents</a>
                </li>
                <li>
                    <div class="side-left-menu-close close-side"></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-12 position-absolute top-auto bottom-0 left-0 width-100 padding-20px-bottom sm-padding-15px-bottom">
        <div class="footer-holder">
            <form class="navbar-form no-padding search-box" role="search">
                <div class="input-group add-on">
                    <input class="form-control" placeholder="Enter your keywords..." name="srch-term" id="srch-term" type="text">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <div class="icon-social-medium margin-eleven-bottom padding-eight-top sm-padding-15px-top sm-margin-15px-bottom">
                <a title="Facebook" href="https://www.facebook.com/BimstecInDhaka/" target="_blank" class="text-link-extra-dark-gray"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                <a title="Twitter" href="https://twitter.com/BimstecInDhaka" target="_blank" class="text-link-extra-dark-gray"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                <a title="YouTube" href="https://www.youtube.com/channel/UCMQDUzdRfUbE9ZgCQ3D6ByA" target="_blank" class="text-link-extra-dark-gray"><i class="fab fa-youtube"
                                                                                                                                                        aria-hidden="true"></i></a>
            </div>
            <img class="img-fluid" src="{{asset('frontend/images/flags.png')}}" alt="">
            <div class="text-medium-gray text-extra-small border-top border-color-extra-light-gray padding-twelve-top sm-padding-15px-top"> © Copyright 2014 - 2019 <a href="#">BIMSTEC</a> Secretariat,
                Dhaka - All Right Reserved.
            </div>
        </div>
    </div>
</nav>
