@if(isset($services))
<section class="section section-services dots-holder visible">
    <div class="dots-bg fadeIn delay02">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: -20px;left: 0px;transform: scale(2) rotate(0deg);">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: 0px;right: -200px;transform: scale(2) rotate(180deg);">
    </div>
    <div class="container-lg">
        <div class="section-title ">
            <div class="section-title-box heading-underline center">
                <h2 class="h1 title-text">GÖSTƏRDİYİMİZ XİDMƏTLƏR</h2> <span
                    class="section-sub-title outlined-big" aria-hidden="true">XİDMƏTLƏR</span>
            </div>
        </div>
        <div class="fadeInUp delay05">
            <div class="tile-flip-holder row six-pack">
                @foreach($services as $service)
                    <div class="col-6 col-md-4 px-0"> <a href="{{route('app','services')}}"
                                                         class="tile-flip-box">
                            <div class="visible-box-link">
                                <h3>{{$service->title}}</h3>
                            </div>
                            <div class="hide-box">
                                <div class="hide-box-link">
                                    <ul>
                                        {!! $service->description !!}
                                    </ul>
                                </div>
                            </div>
                        </a></div>
                @endforeach
{{--                <div class="col-6 col-md-4 px-0"> <a href="/services/app-development-services"--}}
{{--                                                     class="tile-flip-box">--}}
{{--                        <div class="visible-box-link">--}}
{{--                            <h3>FƏRDİ PROQRAM--}}
{{--                                TƏMİNATI</h3>--}}
{{--                        </div>--}}
{{--                        <div class="hide-box">--}}
{{--                            <div class="hide-box-link">--}}
{{--                                <ul>--}}
{{--                                    <!-- <li>Web &amp; Application</li>--}}
{{--                                    <li>Mobile (Android, iOS, Cross-Platform)</li>--}}
{{--                                    <li>Embedded</li> -->--}}
{{--                                    <li>Fikriniz bazar ehtiyaclarına uyğunlaşdırılır--}}
{{--                                        və gəlir gətirən canlı məhsula çevrilir.--}}

{{--                                        Biz məhsulunuzun bazara çıxma müddətini--}}
{{--                                        qısaldan məhsul inkişaf yanaşmasından--}}
{{--                                        istifadə edirik.</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a></div>--}}
{{--                <div class="col-6 col-md-4 px-0"> <a--}}
{{--                        href="/landing/dedicated-software-development-team/#reliable-tech-partner"--}}
{{--                        class="tile-flip-box">--}}
{{--                        <div class="visible-box-link">--}}
{{--                            <h3>ÖZƏL KOMANDA</h3>--}}
{{--                        </div>--}}
{{--                        <div class="hide-box">--}}
{{--                            <div class="hide-box-link">--}}
{{--                                <ul>--}}
{{--                                    <!-- <li>Full-time Developers</li>--}}
{{--                                    <li>Development Teams</li>--}}
{{--                                    <li>Remote R&amp;D Centers</li> -->--}}
{{--                                    <li>Bazar payınızı artırmaq və texniki xidmət--}}
{{--                                        xərclərini azaltmaq üçün məhsulunuzu--}}
{{--                                        gücləndirin.--}}

{{--                                        Sabit çatdırılma və əla məhsul keyfiyyətini--}}
{{--                                        təmin etmək üçün ən yaxşı təcrübələrə--}}
{{--                                        diqqət yetiririk.</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a></div>--}}
{{--                <div class="col-6 col-md-4 px-0"> <a href="/services/software-testing"--}}
{{--                                                     class="tile-flip-box">--}}
{{--                        <div class="visible-box-link">--}}
{{--                            <h3>PROQRAM TESTİ</h3>--}}
{{--                        </div>--}}
{{--                        <div class="hide-box">--}}
{{--                            <div class="hide-box-link">--}}
{{--                                <ul>--}}
{{--                                    <!-- <li>Software Testing Center</li>--}}
{{--                                    <li>Automated Software Testing</li>--}}
{{--                                    <li>Test Process Automation</li> -->--}}
{{--                                    <li>Potensialını açmaq üçün məhsulunuzu--}}
{{--                                        qabaqcıl texnologiyalarla gücləndirin.--}}

{{--                                        Ar-Ge mütəxəssislərimiz müntəzəm olaraq--}}
{{--                                        müştərilərin biznesi üçün innovativ--}}
{{--                                        konsepsiyalar yaradırlar.</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a></div>--}}
{{--                <div class="col-6 col-md-4 px-0"> <a href="/services/ui-ux-design" class="tile-flip-box">--}}
{{--                        <div class="visible-box-link">--}}
{{--                            <h3>QRAFİK DİZAYN</h3>--}}
{{--                        </div>--}}
{{--                        <div class="hide-box">--}}
{{--                            <div class="hide-box-link">--}}
{{--                                <ul>--}}
{{--                                    <!-- <li>UI / UX</li>--}}
{{--                                    <li>Prototyping</li>--}}
{{--                                    <li>Graphical Assets</li>--}}
{{--                                    <li>Motion Graphics</li> -->--}}
{{--                                    <li>Müəyyən edilmiş əməkdaşlıq quruluşuna ehtiyac--}}
{{--                                        olduqda niş peşəkarları cəlb edin.--}}

{{--                                        Biz xidmətlərimizi Product Strategy, UX, CTO və--}}
{{--                                        InfoSec konsaltinq ilə tamamlayırıq.</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a></div>--}}
{{--                <div class="col-6 col-md-4 px-0"> <a href="/services/support-maintenance"--}}
{{--                                                     class="tile-flip-box">--}}
{{--                        <div class="visible-box-link">--}}
{{--                            <h3>İDARƏ OLUNAN--}}
{{--                                XİDMƏTLƏR</h3>--}}
{{--                        </div>--}}
{{--                        <div class="hide-box">--}}
{{--                            <div class="hide-box-link">--}}
{{--                                <ul>--}}
{{--                                    <li>App Management</li>--}}
{{--                                    <li>Support &amp; Maintenance</li>--}}
{{--                                    <li>DevOps</li>--}}
{{--                                    <li>Software Modernization</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a></div>--}}
{{--                <div class="col-6 col-md-4 px-0"> <a class="tile-flip-box">--}}
{{--                        <div class="visible-box-link">--}}
{{--                            <h3>İT KONSULTASİYA</h3>--}}
{{--                        </div>--}}
{{--                        <div class="hide-box">--}}
{{--                            <div class="hide-box-link">--}}
{{--                                <ul>--}}
{{--                                    <li>Industry Standards Compliance</li>--}}
{{--                                    <li>GDPR Compliance</li>--}}
{{--                                    <li>QMS Reviews</li>--}}
{{--                                    <li>Business Processes Optimization</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a></div>--}}
            </div>
        </div>
    </div>
</section>
@endif
