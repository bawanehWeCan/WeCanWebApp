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
                    <h1>اتصل بنا</h1>
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
                        <h2>جوجل ماب - Google Map</h2>
                        <p>اضافة الخريطة هنا بدلاً من الصورة</p>
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
                                        <i class="ri-whatsapp-line"></i>
                                    </div>
                                    <h3 class="link-title">تواصل معنا من خلال واتساب</h3>
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
                                        <i class="ri-phone-line"></i>
                                    </div>
                                    <h3 class="link-title"> +962780190006</h3>
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
                    <h2>ارسل لنا</h2>
                    <p>
                    قم بتعبئة النموذج التالي وسيقوم فريقنا بالإتصال بك في اقرب وقت ممكن
                    </p>
                </div>
                <div class="padding-20 form-edit-profile bg-white">
                    <div class="form-group">
                        <label>الإسم الكامل</label>
                        <input type="text" class="form-control" value="" placeholder="الإسم الكامل">
                        <div class="size-11 color-text form-text">سنكون سعداء بالتعرف عليك</div>
                    </div>
                    <div class="form-group">
                        <label>عنوان الرسالة</label>
                        <input type="text" class="form-control" placeholder="عنوان رسالتك">
                    </div>
                    <div class="form-group">
                        <label>محتوى الرسالة</label>
                        <textarea class="form-control" rows="3" placeholder="اخبرنا بطلبك بشكل بسيط"></textarea>
                    </div>
                    <div class="form-group">
                        <label>بريدك الإلكتروني</label>
                        <input type="email" class="form-control" value=""
                            placeholder="ادخل بريدك الإلتكروني">
                    </div>

                    <div class="bk-social-networks">
                        <div class="form-group with_icon">
                            <label>رقم الهاتف</label>
                            <div class="input_group">
                                <input type="text" class="form-control" placeholder="رقم الهاتف مصحوب برمز الدولة">
                                <div class="icon">
                                    <i class="ri-phone-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group with_icon">
                            <label>موقعك الإلكتروني</label>
                            <div class="input_group">
                                <input type="text" class="form-control" placeholder="موقعك الإلكتروني ان وجد">
                                <div class="icon">
                                    <i class="ri-global-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button"
                    class="btn effect-click w-100 btn-md-size border border-solid border-snow color-text rounded-pill">
                    ارسال
                </button>

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