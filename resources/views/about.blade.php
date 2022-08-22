@extends('layouts.home')

@section('content')

    <!-- ===================================
              START THE HEADER
            ==================================== -->
            <header class="default heade-sticky">
                <div class="un-title-page go-back">
                    <a href="javascript:history.back()" class="icon">
                        <i class="ri-arrow-drop-right-line"></i>
                    </a>
                    <h1>من نحن</h1>
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
              START THE BRAND
            ==================================== -->
            <section class="un-brand-about margin-t-10">
                <img class="brand_img light-mode" src="images/logo_b.svg" alt="">
                <img class="brand_img dark-mode" src="images/logo-white.svg" alt="">
                <p>شركة نستطيع لتكنلوجيا المعلومات</p>
            </section>
            <!-- ===================================
              START THE DESCRIPTION
            ==================================== -->
            <section class="about-section">
                <div class="descriptio">
                    <h2>من نحن</h2>
                    <p>
                        نستطيع شركة متخصصة في تقديم خدمات التصميم والتسويق الإلكتروني ، 
                        وإنشاء وإدارة مواقع عالية الجودة وتقديم خدمات مناسبة للجميع وتمثل البيئة الخصبة لنمو وتطوير الأفكار والمشاريع. تأسست شركة نستطيع We Can في عام 2017 ونفخر
                          بتقديم أكثر من 560 مشروعًا في جميع أنحاء العالم العربي.
                    </p>
                    <br>
                    <h2>رؤيتنا</h2>
                    <p>
                        في “نستطيع - We Can” ، نعتقد أننا قادرون على قيادة العالم العربي وإحداث تأثير حقيقي
                         على خدمات الويب والتسويق الإلكتروني والتصميم من خلال التزامنا بتقديم خدمات ذات جودة قصوى تستند إلى قيم ذات فائدة ملموسة
                          للعملاء يمكن أن تساعدهم أنها تعزز أعمالهم وتحقيق أهدافهم على الإنترنت.                    </p>
                        <br><br>

                        <h2>المزيد عنا</h2>
                </div>

                

                <div class="un-navMenu-default without-icon py-0">
                    
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <div class="item-content-link">
                                    <h3 class="link-title">عنوان الشركة</h3>
                                </div>
                                <div class="other-cc">
                                    <span class="badge-text">عمان،الأردن</span>
                                    <div class="icon-arrow">
                                        <i class="ri-arrow-drop-right-line"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <div class="item-content-link">
                                    <h3 class="link-title">فريق العمل</h3>
                                </div>
                                <div class="other-cc">
                                    <span class="badge-text"></span>
                                    <div class="icon-arrow">
                                        <i class="ri-arrow-drop-right-line"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <div class="item-content-link">
                                    <h3 class="link-title">علاماتنا التجارية</h3>
                                </div>
                                <div class="other-cc">
                                    <span class="badge-text"></span>
                                    <div class="icon-arrow">
                                        <i class="ri-arrow-right-up-line size-18"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <div class="item-content-link">
                                    <h3 class="link-title">وسائل الإتصال</h3>
                                </div>
                                <div class="other-cc">
                                    <span class="badge-text"></span>
                                    <div class="icon-arrow">
                                        <i class="ri-arrow-right-up-line size-18"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- ===================================
              START THE COPYRIGHT MARK
            ==================================== -->
            <section class="copyright-mark margin-t-40">
                <div class="content">
                    <img class="logo-gray" src="images/logo_b.svg" alt="image">
                    <p class="margin-b-20">Copyright © We Can 2018 - 2022</p>
                </div>
                <ul class="nav social-networks-footer">
                    <a class="nav-link facebook" href="https://facebook.com/wecanarabia">
                        <i class="ri-facebook-circle-fill"></i>
                    </a>
                    <a class="nav-link instagram" href="https://www.instagram.com/wecanarabia/">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a class="nav-link youtube" href="javascript: void(0)">
                        <i class="ri-youtube-fill"></i>
                    </a>
                    <a class="nav-link twitter" href="https://twitter.com/wecanarabia">
                        <i class="ri-twitter-fill"></i>
                    </a>
                </ul>
            </section>

@endsection