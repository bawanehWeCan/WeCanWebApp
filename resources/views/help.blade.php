@extends('layouts.home')

@section('content')
    <header class="default heade-sticky">
                <div class="un-title-page go-back">
                    <a href="javascript:history.back()" class="icon">
                        <i class="ri-arrow-drop-right-line"></i>
                    </a>
                    <h1>مركز المساعدة</h1>
                </div>
                 
                <div class="un-block-right">
                   
                    <div class="un-user-profile">
                        <div class="em_darkMode_menu">
            
                            <a  href="{{ url('/') }}">
                                <div class="btn btnCircle_default">
                                    <i class="ri-home-5-line"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- menu-sidebar -->
                    <div class="menu-sidebar">
                        <button type="button" name="sidebarMenu" aria-label="sidebarMenu" class="btn" data-bs-toggle="modal"
                            data-bs-target="#mdllSidebar-connected">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="9.3" viewBox="0 0 19 9.3">
                                <g id="Group_8081" data-name="Group 8081" transform="translate(-329 -37)">
                                    <rect id="Rectangle_3986" data-name="Rectangle 3986" width="19" height="2.3"
                                        rx="1.15" transform="translate(329 37)" fill="#222032" />
                                    <rect id="Rectangle_3987" data-name="Rectangle 3987" width="19" height="2.3"
                                        rx="1.15" transform="translate(329 44)" fill="#222032" />
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </header>
 <!-- ===================================
              START THE SPACE STICKY
            ==================================== -->
            <div class="space-sticky"></div>
            <!-- ===================================
              START THE SEARCH
            ==================================== -->
            <section class="help-search-support">
                <div class="content">
                    <div class="head">
                        <h2>كيف نستطيع مساعدتك ؟</h2>
                        <p>ابحث عن استفسارك</p>
                    </div>
                    <div class="form-group with_icon m-0">
                        <div class="input_group">
                            <input type="search" class="form-control border-0" placeholder="اكتب استفسارك هنا">
                            <div class="icon">
                                <i class="ri-search-2-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ===================================
              START THE DESCRIPTION
            ==================================== -->
            <section class="about-section">
                <div class="un-navMenu-default without-icon py-0">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link bg-snow border-0" href="javascript:void(0)">
                                <div class="item-content-link">
                                    <div class="icon color-primary w-auto">
                                        <i class="ri-chat-1-line"></i>
                                    </div>
                                    <h3 class="link-title">الدعم من خلال الدردشة</h3>
                                </div>
                                <div class="other-cc">
                                    <span class="badge-text"></span>
                                    <div class="icon-arrow">
                                        <i class="ri-arrow-drop-left-line"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item mb-0">
                            <a class="nav-link" href="javascript:void(0)">
                                <div class="item-content-link">
                                    <div class="icon color-green w-auto">
                                        <i class="ri-mail-open-line"></i>
                                    </div>
                                    <h3 class="link-title">الدعم من خلال البريد الإلكتروني</h3>
                                </div>
                                <div class="other-cc">
                                    <span class="badge-text"></span>
                                    <div class="icon-arrow">
                                        <i class="ri-arrow-drop-left-line"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="descriptio">
                    <h2>الأسئلة الشائعة</h2>
                    <p>
                        لقد تم طرح هذه الأسئلة كثيرًا ، لذلك أنشأنا هذا القسم الصغير لمساعدتك
                        بشكل أسرع وافضل.
                    </p>
                </div>
                <div class="accordion padding-x-20" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                هل شركة نستطيع مرخصة رسمياً ؟
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong> نعم.</strong> شركة نستطيع مرخصة رسمياً في وزارة الصناعة والتجارة - المملكة الأردنية الهاشمية تحت الرقم 246447
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                هل تقدمون خدماتكم خارج الأردن ؟
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong> نعم.</strong> نفخر بتقديمنا للعديد من المشاريع خارج المملكة الأردنية الهاشمية ابرزها كان في السعودية والإمارات والكويت.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                هل تقدمون استشارات مجانية ؟
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong> نعم.</strong> نقدم استشارات مجانية في جميع مجالات عملنا .
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Is this a WordPres Theme?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>No.</strong> Our item is an <code>HTML, CSS3, and JS Site</code> Template. You
                                can however convert it to a WordPress Theme.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What can I do with this template?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                You can make mobile websites or progressive web apps for mobile devices.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ===================================
              START THE COPYRIGHT MARK
            ==================================== -->
            <section class="copyright-mark margin-t-40 margin-b-30">
                <div class="content">
                    <img class="logo-gray" src="images/logo_b.svg" alt="image">
                    <p class="margin-b-20">Copyright © We Can 2018 - 2022</p>
                </div>
                <ul class="nav social-networks-footer">
                    <a class="nav-link facebook" href="javascript: void(0)">
                        <i class="ri-facebook-circle-fill"></i>
                    </a>
                    <a class="nav-link instagram" href="javascript: void(0)">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a class="nav-link youtube" href="javascript: void(0)">
                        <i class="ri-youtube-fill"></i>
                    </a>
                    <a class="nav-link twitter" href="javascript: void(0)">
                        <i class="ri-twitter-fill"></i>
                    </a>
                </ul>
            </section>
            @endsection
