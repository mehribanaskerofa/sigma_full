

{{--<select onchange="location = this.value;" class="language-dropdown" style="background: transparent; color:white; border:none;">--}}
{{--    @foreach(config('app.languages') as $lang)--}}
{{--        <option value="{{_langUrl($lang)}}" @if($lang==app()->getLocale()) selected @endif>{{$lang}}</option>--}}
{{--    @endforeach--}}
{{--</select>--}}

<header class="sigma-header">
    <nav class="navbar navbar-expand-xl">
        <div class="navbar-box"><button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button><a class="navbar-brand "
                                                                   href="{{route('home')}}">
                <!-- <img
                    src="https://cdn.sigma.software/wp-content/themes/ems3/build/project/images/sigma-software-logo.svg"
                    width="120" height="34" alt="Sigma Software logo"> -->
                AZERELLİ
            </a></div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-md-none" id="searchMobile">
                <form class="header-search form-inline"><input class="form-control" type="search"
                                                               placeholder="Axtarış" aria-label="Search"><button class="header-search-button-x"
                                                                                                                 type="reset">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button><button class="header-search-button btn" type="submit">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </form>
            </div>
            <ul class="navbar-nav mr-auto">
                @php
                $menus=\App\Models\Menu::with('translations')->get()->skip(1);
                @endphp
                @foreach($menus->where('parent_id',null) as $index=>$parentMenu)
                <li id="menu-item-17{{$index}}"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17{{$index}}
                    @if($menus->where('parent_id',$parentMenu->id)->count()) dropdown has-megamenu @endif nav-item">
                    @if($menus->where('parent_id',$parentMenu->id)->count())

                        <a href="
                        @if($parentMenu->landing)
                             {{route('landing.'.$parentMenu->slug ?? null)}}
                         @else
                            {{route('app',['slug1' =>$parentMenu->slug ?? null])}}
                        @endif
                        " class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" id="navbarDropdown{{$index}}">
                        <span class="d-none d-md-inline-block">
                            {{$parentMenu->name}}
                        </span>

                        <div class="h2 d-md-none">{{$parentMenu->name}}</div>
                    </a>
                    <a class="direct-link d-md-none" href="
                    @if($parentMenu->landing)
                             {{route('landing.'.$parentMenu->slug ?? null)}}
                         @else
                            {{route('app',['slug1' =>$parentMenu->slug ?? null])}}
                        @endif
                    " title="">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <div class="dropdown-menu megamenu" aria-labelledby="navbarDropdown{{$index}}">
                        <div class="row">
{{--                            <div class="col-md-auto">--}}

{{--                                <div class="megamenu-col">--}}
                            @php $lop=true; @endphp
                                    @foreach($menus->where('parent_id',$parentMenu->id) as $childMenu)


                                    @if($menus->where('parent_id',$childMenu->id)->count()>3)
                                            <div class="col-md-auto">

                                                <div class="megamenu-col">
                                    <div class="h3 col-title heading-underline">{{$childMenu->name}}</div>
                                            <ul>
                                                @foreach($menus->where('parent_id',$childMenu->id) as $childsMenu)
                                                    <li><a alt="{{$childMenu->landing}}" href="
                                                    @if($childsMenu->landing)
                                                    {{route('landing.'.$childsMenu->slug)}}
                                                    @else
                                                    {{route('app',['slug1' =>$parentMenu->slug,'slug2'=>$childsMenu->slug])}}
                                                    @endif
                                                    "
                                                           class="megamenu-link ">{{$childsMenu->name}}</a></li>
                                                @endforeach
                                            </ul>
                                                </div></div>
                                    @endif

                                        @if($menus->where('parent_id',$childMenu->id)->count()<=3 && $lop)

{{--                                            <ul>--}}
                                                    @php $groupedMenu1 = $menus->where('parent_id',$parentMenu->id)->chunk(4);
                                                    $groupedMenu=$groupedMenu1;
                                                    @endphp
                                        @foreach($groupedMenu as $group)
                                                        <div class="col-md-auto">

                                                            <div class="megamenu-col">
                                                        <ul>
                                                        @foreach($group as $childssMenu)

                                        <li><a href="
                                         @if($childssMenu->landing)
                                                    {{route('landing.'.$childssMenu->slug)}}
                                                    @else
                                                    {{route('app',['slug1' =>$parentMenu->slug,'slug2'=>$childssMenu->slug])}}
                                                    @endif
                                        "
                                               class="megamenu-link ">{{$childssMenu->name}}</a></li>

                                                        @endforeach
            </ul>
                                                </div></div>
                                        @endforeach
{{--                                            </ul>--}}

                                            @php $lop=false; @endphp
                                        @endif
                                    @endforeach
{{--                                </div>--}}

{{--                            </div>--}}

                            <div class="col d-none d-xl-block">
                                <div class="megamenu-info-col">
                                    <p>Rely on our subject matter experts who speak your business language and
                                        are well aware of your industry specifics, best practices, standards,
                                        and regulations.<br> <br> We will help you both cope with typical
                                        industry challenges and find non-conventional ways to increase your
                                        business efficiency.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                        @if($menus->where('parent_id',$parentMenu->id)->count()==0)

                            <div class="nav-link">
                        <span class="d-none d-md-inline-block">
                            <a href="{{route('app',['slug1' =>$parentMenu->slug])}}">{{$parentMenu->name}}</a>
                        </span>
                                <div class="h2 d-md-none">{{$parentMenu->name}}</div>
                            </div>
                            <a class="direct-link d-md-none" href="{{route('app',['slug1' =>$parentMenu->slug])}}" title="">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        @endif
                </li>
                @endforeach
{{--                <li id="menu-item-171"--}}
{{--                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-171 nav-item">--}}

{{--                    <div class="nav-link">--}}
{{--                        <span class="d-none d-md-inline-block">--}}
{{--                            <a href="/case-studies">Case Studies</a>--}}
{{--                        </span>--}}
{{--                        <div class="h2 d-md-none">Case Studies</div>--}}
{{--                    </div>--}}

{{--                    <a class="direct-link d-md-none" href="/case-studies" title="">--}}
{{--                        <i class="fa-solid fa-arrow-right"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}

            </ul>
        </div>
    </nav>
    <div class="header-actions">
        <div class="d-none d-md-flex" id="searchDesktop">
            <div id="___gcse_0">
                <div class="gsc-control-cse gsc-control-cse-ru">
                    <div class="gsc-control-wrapper-cse" dir="ltr">
                        <form class="gsc-search-box gsc-search-box-tools" accept-charset="utf-8">
                            <table cellspacing="0" cellpadding="0" role="presentation" class="gsc-search-box">
                                <tbody>
                                <tr>
                                    <td class="gsc-input">
                                        <div class="gsc-input-box" id="gsc-iw-id1">
                                            <table cellspacing="0" cellpadding="0" role="presentation"
                                                   id="gs_id50" class="gstl_50 gsc-input"
                                                   style="width: 100%; padding: 0px;">
                                                <tbody>
                                                <tr>
                                                    <td id="gs_tti50" class="gsib_a"><input
                                                            autocomplete="off" type="text" size="10"
                                                            class="gsc-input" name="search"
                                                            title="поиск" aria-label="поиск"
                                                            id="gsc-i-id1"
                                                            style="width: 100%; padding: 0px; border: none; margin: 0px; height: auto; outline: none;"
                                                            dir="ltr" spellcheck="false"
                                                            placeholder="Axtarış"></td>
                                                    <td class="gsib_b">
                                                        <div class="gsst_b" id="gs_st50" dir="ltr"><a
                                                                class="gsst_a" href="javascript:void(0)"
                                                                style="display: none;"
                                                                title="Очистить окно поиска"
                                                                role="button"><span class="gscb_a"
                                                                                    id="gs_cb50"
                                                                                    aria-hidden="true">×</span></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                    <td class="gsc-search-button">
                                        <button class="gsc-search-button gsc-search-button-v2"
                                                aria-label="Search">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </td>
                                    <td class="gsc-clear-button">
                                        <div class="gsc-clear-button" title="удалить результаты">&nbsp;
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>

                        <div class="gsc-modal-background-image" tabindex="0"></div>
                    </div>
                </div>
            </div>
        </div> <button type="button" class="btn btn-primary header-contact-button" data-toggle="modal"
                       data-target="#contactUsModal11"> <span class="d-none d-md-inline-block pr-3" aria-hidden="true">
                        <i class="fa-regular fa-circle-dot"></i>
                    </span> ƏLAQƏ </button>
    </div>
</header>





<div class="modal fade" id="contactUsModal11" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="h2 modal-title">Contact us</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> <i class="fa-solid fa-xmark"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">Thank you for reaching out to Sigma Software!<br> Please fill the form
                    below. Our team will contact you shortly.</p>
                <div class="contactform" style="margin: 0 auto;">
                    <form action="{{route('contact')}}" method="post">
                        @csrf
                        <label for="fname">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Your email..">
                        <span class="text-danger" id="emailError"></span>
                        <input type="submit" id="contact-btn" value="Submit">
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade filters-modal" id="filtersModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal"
                                               aria-label="Close"> <span aria-hidden="true">
                                <i class="fa-solid fa-xmark"></i>
                             </span>
                </button></div>
            <div class="modal-body loading"></div>
            <div class="modal-footer no-footer"></div>
        </div>
    </div>
</div>



{{--<header class="sigma-header">--}}
{{--    <nav class="navbar navbar-expand-xl">--}}
{{--        <div class="navbar-box"><button class="navbar-toggler" type="button" data-toggle="collapse"--}}
{{--                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"--}}
{{--                                        aria-expanded="false" aria-label="Toggle navigation"><span--}}
{{--                    class="navbar-toggler-icon"></span></button><a class="navbar-brand disabled"--}}
{{--                                                                   href="https://sigma.software/">--}}
{{--                <!-- <img--}}
{{--                    src="https://cdn.sigma.software/wp-content/themes/ems3/build/project/images/sigma-software-logo.svg"--}}
{{--                    width="120" height="34" alt="Sigma Software logo"> -->--}}
{{--                AZERELLİ--}}
{{--            </a></div>--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <div class="d-md-none" id="searchMobile">--}}
{{--                <form class="header-search form-inline"><input class="form-control" type="search"--}}
{{--                                                               placeholder="Axtarış" aria-label="Search"><button class="header-search-button-x"--}}
{{--                                                                                                                 type="reset">--}}
{{--                        <i class="fa-solid fa-magnifying-glass"></i>--}}
{{--                    </button><button class="header-search-button btn" type="submit">--}}
{{--                        <i class="fa-solid fa-xmark"></i>--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <ul class="navbar-nav mr-auto">--}}
{{--                <li id="menu-item-174"--}}
{{--                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174 dropdown has-megamenu nav-item">--}}
{{--                    <a href="/services" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false" id="navbarDropdown1"><span--}}
{{--                            class="d-none d-md-inline-block">Services</span>--}}
{{--                        <div class="h2 d-md-none">Services</div>--}}
{{--                    </a><a class="direct-link d-md-none" href="/services" title="">--}}
{{--                        <i class="fa-solid fa-arrow-right"></i>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu megamenu" aria-labelledby="navbarDropdown1">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-auto">--}}
{{--                                <div class="megamenu-col">--}}
{{--                                    <div class="h3 col-title heading-underline">Software Development</div>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="/services/product-development"--}}
{{--                                               class="megamenu-link ">Proqram yazılımı</a></li>--}}
{{--                                        <li><a href="/services/app-development-services"--}}
{{--                                               class="megamenu-link ">Mobil tətbiq</a></li>--}}
{{--                                        <li><a href="/landing/dedicated-software-development-team/"--}}
{{--                                               class="megamenu-link ">Dedicated Team</a></li>--}}
{{--                                        <li><a href="/services/devops-consulting" class="megamenu-link ">DevOps--}}
{{--                                                Konsultasiya</a></li>--}}
{{--                                        <li><a href="/services/embedded-and-iot" class="megamenu-link ">İT--}}
{{--                                                DƏSTƏK</a></li>--}}
{{--                                        <!-- <li><a href="/services/support-maintenance"--}}
{{--                                                class="megamenu-link ">Support &amp; Maintenance</a></li> -->--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-auto">--}}
{{--                                <div class="megamenu-col">--}}
{{--                                    <div class="h3 col-title heading-underline">Design &amp; Testing</div>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="/services/ui-ux-design" class="megamenu-link ">UX/UI--}}
{{--                                                Dizayn</a></li>--}}
{{--                                        <li><a href="/services/website-design-development-services"--}}
{{--                                               class="megamenu-link ">Vebsayt Dizaynı</a></li>--}}
{{--                                        <li><a href="/services/motion-graphics" class="megamenu-link ">Proqram--}}
{{--                                                testinqi</a></li>--}}
{{--                                        <li><a href="/services/software-testing"--}}
{{--                                               class="megamenu-link ">Avtomatlaşdırılmış--}}
{{--                                                test</a></li>--}}
{{--                                        <li><a href="/services/automated-testing"--}}
{{--                                               class="megamenu-link ">Keyfiyyət</a></li>--}}
{{--                                        <!-- <li><a href="/services/quality-process-and-compliance"--}}
{{--                                                class="megamenu-link ">Quality Process and Compliance</a></li> -->--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-auto">--}}
{{--                                <div class="megamenu-col">--}}
{{--                                    <div class="h3 col-title heading-underline">XÜSUSİ XİDMƏTLƏR</div>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="/services/startups-cto-service"--}}
{{--                                               class="megamenu-link ">Startaplar: CTO xidməti</a></li>--}}
{{--                                        <li><a href="/landing/artificial-intelligence/"--}}
{{--                                               class="megamenu-link ">Machine Learning Development</a></li>--}}
{{--                                        <li><a href="/landing/ar-vr/" class="megamenu-link ">AR/VR--}}
{{--                                                Development</a></li>--}}
{{--                                        <!-- <li><a href="/landing/gambling/" class="megamenu-link ">Gambling Game--}}
{{--                                                Development</a></li> -->--}}
{{--                                        <li><a href="/services/cybersecurity-consulting-services"--}}
{{--                                               class="megamenu-link ">Kibertəhlükəsizlik xidməti</a></li>--}}
{{--                                        <li><a href="/services/cloud-migration-services"--}}
{{--                                               class="megamenu-link ">Cloud miqrasiyası</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col d-none d-xl-block">--}}
{{--                                <div class="megamenu-info-col">--}}
{{--                                    <p>Choose from 40+ services designed to address a wide range of your--}}
{{--                                        technology-related business needs from dedicated development center--}}
{{--                                        establishment to R&amp;D and digital transformation consulting. <br>--}}
{{--                                        <br> We combine decades of experience, tried-and-proven delivery--}}
{{--                                        processes, and deep tech expertise to deliver superior services--}}
{{--                                        worldwide.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <!-- <li id="menu-item-170"--}}
{{--                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-170 dropdown has-megamenu nav-item">--}}
{{--                    <a href="/solutions" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"--}}
{{--                        aria-haspopup="true" aria-expanded="false" id="navbarDropdown2"><span--}}
{{--                            class="d-none d-md-inline-block">Solutions</span>--}}
{{--                        <div class="h2 d-md-none">Solutions</div>--}}
{{--                    </a><a class="direct-link d-md-none" href="/solutions" title="">--}}
{{--                        <i class="fa-solid fa-arrow-right"></i>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu megamenu" aria-labelledby="navbarDropdown2">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-auto">--}}
{{--                                <div class="megamenu-col">--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="/solutions/bi-and-big-data" class="megamenu-link ">BI and--}}
{{--                                                Big Data</a></li>--}}
{{--                                        <li><a href="/solutions/advertising-solutions"--}}
{{--                                                class="megamenu-link ">Advertising Solutions</a></li>--}}
{{--                                        <li><a href="/solutions/aftermarket-solutions-development-integration"--}}
{{--                                                class="megamenu-link ">Aftermarket Solutions</a></li>--}}
{{--                                        <li><a href="/solutions/gaming-solutions" class="megamenu-link ">Gaming--}}
{{--                                                Solutions</a></li>--}}
{{--                                        <li><a href="/solutions/custom-e-learning-development"--}}
{{--                                                class="megamenu-link ">E-learning</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-auto">--}}
{{--                                <div class="megamenu-col">--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="/solutions/custom-e-commerce-solutions"--}}
{{--                                                class="megamenu-link ">E-commerce</a></li>--}}
{{--                                        <li><a href="/services/custom-mobile-app-development"--}}
{{--                                                class="megamenu-link ">Mobile Solutions</a></li>--}}
{{--                                        <li><a href="/solutions/software-service-cloud"--}}
{{--                                                class="megamenu-link ">SaaS (Cloud)</a></li>--}}
{{--                                        <li><a href="/solutions/web-and-intranet-portals"--}}
{{--                                                class="megamenu-link ">Web and Intranet Portals</a></li>--}}
{{--                                        <li><a href="/solutions/business-systems"--}}
{{--                                                class="megamenu-link ">Business Systems</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-auto">--}}
{{--                                <div class="megamenu-col">--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="/solutions/bpm-document-management"--}}
{{--                                                class="megamenu-link ">BPM/Document Management</a></li>--}}
{{--                                        <li><a href="/solutions/artificial-intelligence"--}}
{{--                                                class="megamenu-link ">Artificial Intelligence</a></li>--}}
{{--                                        <li><a href="/solutions/vehicle-infotainment"--}}
{{--                                                class="megamenu-link ">In-Vehicle Infotainment</a></li>--}}
{{--                                        <li><a href="/solutions/platforms" class="megamenu-link ">Platforms</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="/solutions/collection-solutions"--}}
{{--                                                class="megamenu-link ">Collection Solutions</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col d-none d-xl-block">--}}
{{--                                <div class="megamenu-info-col">--}}
{{--                                    <p>We deliver turn-key IT solutions that help you efficiently cope with--}}
{{--                                        existing business challenges, transform the way you do business, and--}}
{{--                                        outperform your competitors. <br> <br> You can always be sure you get--}}
{{--                                        the solution that addresses your business needs in the best possible--}}
{{--                                        way: be it custom solutions built from scratch using our 20-years’--}}
{{--                                        experience and modern tech stack, or the ones developed on top of 25+--}}
{{--                                        innovative products and platforms from our partners.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li> -->--}}
{{--                <li id="menu-item-172"--}}
{{--                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-172 dropdown has-megamenu nav-item">--}}
{{--                    <a href="/industries" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false" id="navbarDropdown3"><span--}}
{{--                            class="d-none d-md-inline-block">Industries</span>--}}
{{--                        <div class="h2 d-md-none">Industries</div>--}}
{{--                    </a><a class="direct-link d-md-none" href="/industries" title="">--}}
{{--                        <i class="fa-solid fa-arrow-right"></i>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu megamenu" aria-labelledby="navbarDropdown3">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-auto">--}}
{{--                                <div class="megamenu-col">--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="/industries/automotive-industry"--}}
{{--                                               class="megamenu-link ">İstehsal</a></li>--}}
{{--                                        <li><a href="/industries/aviation-industry"--}}
{{--                                               class="megamenu-link ">Tikinti/Əmlak</a></li>--}}
{{--                                        <li><a href="/industries/construction-real-estate"--}}
{{--                                               class="megamenu-link ">Təhsil</a></li>--}}
{{--                                        <li><a href="/industries/gambling-gaming"--}}
{{--                                               class="megamenu-link ">Telekomunikasiya</a></li>--}}
{{--                                        <!-- <li><a href="/industries/telecom" class="megamenu-link ">Telecom</a>--}}
{{--                                        </li> -->--}}
{{--                                        <li><a href="/industries/blockchain-consulting-services"--}}
{{--                                               class="megamenu-link ">Blockchain</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-auto">--}}
{{--                                <div class="megamenu-col">--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="/industries/media-advertising"--}}
{{--                                               class="megamenu-link ">Media/ Reklam</a></li>--}}
{{--                                        <li><a href="/industries/finance-and-banking"--}}
{{--                                               class="megamenu-link ">Maliyyə və Bank</a></li>--}}
{{--                                        <li><a href="/industries/information-technology"--}}
{{--                                               class="megamenu-link ">İnformasiya Texnologiyaları</a></li>--}}
{{--                                        <li><a href="/industries/healthcare" class="megamenu-link ">Səhiyyə</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="/industries/energy-industry"--}}
{{--                                               class="megamenu-link ">Eenergetika</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col d-none d-xl-block">--}}
{{--                                <div class="megamenu-info-col">--}}
{{--                                    <p>Rely on our subject matter experts who speak your business language and--}}
{{--                                        are well aware of your industry specifics, best practices, standards,--}}
{{--                                        and regulations.<br> <br> We will help you both cope with typical--}}
{{--                                        industry challenges and find non-conventional ways to increase your--}}
{{--                                        business efficiency.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li id="menu-item-171"--}}
{{--                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-171 nav-item">--}}
{{--                    <div class="nav-link"><span class="d-none d-md-inline-block"><a href="/case-studies">Case--}}
{{--                                        Studies</a></span>--}}
{{--                        <div class="h2 d-md-none">Case Studies</div>--}}
{{--                    </div><a class="direct-link d-md-none" href="/case-studies" title="">--}}
{{--                        <i class="fa-solid fa-arrow-right"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li id="menu-item-175"--}}
{{--                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-175 dropdown has-megamenu nav-item">--}}
{{--                    <a href="/about" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"--}}
{{--                       aria-haspopup="true" aria-expanded="false" id="navbarDropdown5"><span--}}
{{--                            class="d-none d-md-inline-block">About</span>--}}
{{--                        <div class="h2 d-md-none">About</div>--}}
{{--                    </a><a class="direct-link d-md-none" href="/about" title="">--}}
{{--                        <i class="fa-solid fa-arrow-right"></i>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu megamenu" aria-labelledby="navbarDropdown5">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-auto">--}}
{{--                                <div class="megamenu-col">--}}
{{--                                    <div class="h3 col-title heading-underline">ŞİRKƏT</div>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="/about/history-and-mission" class="megamenu-link ">Şirkət--}}
{{--                                                haqqında</a></li>--}}
{{--                                        <li><a href="/about/management-team"--}}
{{--                                               class="megamenu-link ">Komandamız</a></li>--}}
{{--                                        <li><a href="/about/our-offices-and-contacts"--}}
{{--                                               class="megamenu-link ">Ofis və Əlaqə</a></li>--}}
{{--                                        <li><a href="https://university.sigma.software/en/"--}}
{{--                                               class="megamenu-link  external" target="_blank">Azerelli--}}
{{--                                                courses</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-auto">--}}
{{--                                <div class="megamenu-col">--}}
{{--                                    <div class="h3 col-title heading-underline">İŞ PRİNSİPİ</div>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="/about/corporate-enterprises"--}}
{{--                                               class="megamenu-link ">Korporativ şirkətlər</a></li>--}}
{{--                                        <li><a href="/about/startups" class="megamenu-link ">Startaplar</a></li>--}}
{{--                                        <li><a href="/about/software-product-houses"--}}
{{--                                               class="megamenu-link ">Proqram yazılımı--}}
{{--                                                evləri</a></li>--}}
{{--                                        <li><a href="/about/consulting-companies"--}}
{{--                                               class="megamenu-link ">Konsaltinq--}}
{{--                                                şirkətləri</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-auto">--}}
{{--                                <div class="megamenu-col">--}}
{{--                                    <div class="h3 col-title heading-underline">Network</div>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="/about/partners-and-products"--}}
{{--                                               class="megamenu-link ">Partnyorlar və--}}
{{--                                                Məhsuıllar</a></li>--}}
{{--                                        <li><a href="/about/clients-testimonials"--}}
{{--                                               class="megamenu-link ">Müştərilər</a></li>--}}
{{--                                        <li><a href="/about/csr" class="megamenu-link ">Korporativ Sosial--}}
{{--                                                Məsuliyyət</a></li>--}}
{{--                                        <li><a href="/about/media" class="megamenu-link ">Media</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li id="menu-item-166"--}}
{{--                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-166 nav-item">--}}
{{--                    <div class="nav-link"><span class="d-none d-md-inline-block"><a target="_blank"--}}
{{--                                                                                    rel="noopener noreferrer"--}}
{{--                                                                                    href="https://career.sigma.software/">Career</a></span>--}}
{{--                        <div class="h2 d-md-none">Career</div>--}}
{{--                    </div><a class="direct-link d-md-none" href="" title="">--}}
{{--                        <i class="fa-solid fa-arrow-right-long"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--    <div class="header-actions">--}}
{{--        <div class="d-none d-md-flex" id="searchDesktop">--}}
{{--            <div id="___gcse_0">--}}
{{--                <div class="gsc-control-cse gsc-control-cse-ru">--}}
{{--                    <div class="gsc-control-wrapper-cse" dir="ltr">--}}
{{--                        <form class="gsc-search-box gsc-search-box-tools" accept-charset="utf-8">--}}
{{--                            <table cellspacing="0" cellpadding="0" role="presentation" class="gsc-search-box">--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td class="gsc-input">--}}
{{--                                        <div class="gsc-input-box" id="gsc-iw-id1">--}}
{{--                                            <table cellspacing="0" cellpadding="0" role="presentation"--}}
{{--                                                   id="gs_id50" class="gstl_50 gsc-input"--}}
{{--                                                   style="width: 100%; padding: 0px;">--}}
{{--                                                <tbody>--}}
{{--                                                <tr>--}}
{{--                                                    <td id="gs_tti50" class="gsib_a"><input--}}
{{--                                                            autocomplete="off" type="text" size="10"--}}
{{--                                                            class="gsc-input" name="search"--}}
{{--                                                            title="поиск" aria-label="поиск"--}}
{{--                                                            id="gsc-i-id1"--}}
{{--                                                            style="width: 100%; padding: 0px; border: none; margin: 0px; height: auto; outline: none;"--}}
{{--                                                            dir="ltr" spellcheck="false"--}}
{{--                                                            placeholder="Axtarış"></td>--}}
{{--                                                    <td class="gsib_b">--}}
{{--                                                        <div class="gsst_b" id="gs_st50" dir="ltr"><a--}}
{{--                                                                class="gsst_a" href="javascript:void(0)"--}}
{{--                                                                style="display: none;"--}}
{{--                                                                title="Очистить окно поиска"--}}
{{--                                                                role="button"><span class="gscb_a"--}}
{{--                                                                                    id="gs_cb50"--}}
{{--                                                                                    aria-hidden="true">×</span></a>--}}
{{--                                                        </div>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                </tbody>--}}
{{--                                            </table>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td class="gsc-search-button">--}}
{{--                                        <button class="gsc-search-button gsc-search-button-v2"--}}
{{--                                                aria-label="Search">--}}
{{--                                            <i class="fa-solid fa-magnifying-glass"></i>--}}
{{--                                        </button>--}}
{{--                                    </td>--}}
{{--                                    <td class="gsc-clear-button">--}}
{{--                                        <div class="gsc-clear-button" title="удалить результаты">&nbsp;--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </form>--}}

{{--                        <div class="gsc-modal-background-image" tabindex="0"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div> <button type="button" class="btn btn-primary header-contact-button" data-toggle="modal"--}}
{{--                       data-target="#contactUsModal"> <span class="d-none d-md-inline-block pr-3" aria-hidden="true">--}}
{{--                        <i class="fa-regular fa-circle-dot"></i>--}}
{{--                    </span> ƏLAQƏ </button>--}}
{{--    </div>--}}
{{--</header>--}}
