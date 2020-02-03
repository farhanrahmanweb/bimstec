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
                <li class="dropdown">
                    <a href="#" title="About us" data-toggle="dropdown">About us<i class="fas fa-angle-right pull-right"></i></a>
                    <ul class="dropdown-menu second-level">
                        <li class="dropdown">
                            <a href="{{route('about-bimstec')}}" title="About BIMSTEC">About BIMSTEC</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('bimstec-guiding-principles')}}" title="BIMSTEC Guiding Principles" data-toggle="dropdown">BIMSTEC Guiding Principles</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('bimstec-chairmanship')}}" title="BIMSTEC Chairmanship" data-toggle="dropdown">BIMSTEC Chairmanship</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('bimstec-secretariat')}}" title="BIMSTEC Secretariat" data-toggle="dropdown">BIMSTEC Secretariat <i class="fas fa-angle-right"></i></a>
                            <ul class="dropdown-menu third-level">
                                <li><a href="{{route('directors-divisions')}}">Directors and Divisions</a></li>
                                <li><a href="{{route('bimstec-organogram')}}">Organogram</a></li>
                                <li><a href="{{route('past-secretary-general')}}">Past Secretary General</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('bimstec-mechanism')}}" title="BIMSTEC Mechanism" data-toggle="dropdown">BIMSTEC Mechanism</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('bimstec-centres')}}" title="BIMSTEC Centres" data-toggle="dropdown">BIMSTEC Centres</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{route('secretary-general')}}" title="Secretary General">Secretary General</a>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="areas-cooperation.php" title="Pages">Areas of Cooperation <i class="fas fa-angle-right"></i></a>
                    <ul class="dropdown-menu second-level">
                        <li class="dropdown">
                            <a href="{{route('trade-investment')}}" title="Trade & Investment" data-toggle="dropdown">Trade & Investment <i class="fas fa-angle-right"></i></a>
                            <ul class="dropdown-menu third-level">
                                <li><a href="#">FTA</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('transport-communication')}}" title="Transport and Communication">Transport and Communication</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('energy')}}" title="Energy sector">Energy</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('tourism')}}" title="Tourism">Tourism</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('technology')}}" title="Technology">Technology</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('fisheries')}}" title="Fisheries">Fisheries</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('agriculture')}}" title="Agriculture">Agriculture</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('public-health')}}" title="Public Health">Public Health</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('poverty-alleviation')}}" title="Poverty Alleviation">Poverty Alleviation</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('counter-terrorism-transnational-crime')}}" title="Counter-Terrorism and Transnational Crime">Counter-Terrorism and Transnational Crime</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('environment-disaster-management')}}" title="Environment & Disaster Management">Environment & Disaster Management</a>
                        </li>

                        <li class="dropdown">
                            <a href="{{route('people-to-people-contact')}}" title="People to People Contact" data-toggle="dropdown">People to People Contact <i class="fas fa-angle-right"></i></a>
                            <ul class="dropdown-menu third-level">
                                <li><a href="bnptt.php">BNPTT</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('cultural-cooperation')}}" title="Cultural Cooperation">Cultural Cooperation</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('climate-change')}}" title="Climate Change">Climate Change</a>
                        </li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a data-toggle="dropdown" href="#" title="Events">Events <i class="fas fa-angle-right"></i></a>
                    <ul class="dropdown-menu second-level">
                        <li class="dropdown">
                            <a href="calendar-meetings.php" title="Calendar of Meetings">Calendar of Meetings</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" title="Concluded Events">Concluded Events</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="#" title="Gallery">Gallery <i class="fas fa-angle-right"></i></a>
                    <ul class="dropdown-menu second-level">
                        <li class="dropdown">
                            <a href="{{route('photos')}}" title="Photos">Photos</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('videos')}}" title="Videos">Videos</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="#" title="News">News <i class="fas fa-angle-right"></i></a>
                    <ul class="dropdown-menu second-level">
                        <li class="dropdown">
                            <a href="#" title="BIMSTEC e-Newsletters">BIMSTEC e-Newsletters</a>
                        </li>
                        <li class="dropdown">
                            <a href="bimstec-news.php" title="BIMSTEC NEWS">BIMSTEC NEWS</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" title="Press Release">Press Release</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" title="Videos">Videos</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{route('documents')}}" title="Documents">Documents</i></a>
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
