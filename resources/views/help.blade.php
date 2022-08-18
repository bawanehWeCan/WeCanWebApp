@extends('layouts.app')

@section('content')
    <header class="default heade-sticky">
        <div class="un-title-page go-back">
            <a href="app-pages.html" class="icon">
                <i class="ri-arrow-drop-left-line"></i>
            </a>
            <h1>من نحن</h1>
        </div>
        <div class="un-block-right">
            <a href="page-help.html" class="btn btn-box-icon bg-snow text-dark">
                <i class="ri-chat-1-line"></i>
            </a>
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
                وإنشاء وإدارة مواقع عالية الجودة وتقديم خدمات مناسبة للجميع وتمثل البيئة الخصبة لنمو وتطوير الأفكار
                والمشاريع. تأسست شركة نستطيع We Can في عام 2017 ونفخر
                بتقديم أكثر من 560 مشروعًا في جميع أنحاء العالم العربي.
            </p>
            <br>
            <h2>رؤيتنا</h2>
            <p>
                في “نستطيع - We Can” ، نعتقد أننا قادرون على قيادة العالم العربي وإحداث تأثير حقيقي
                على خدمات الويب والتسويق الإلكتروني والتصميم من خلال التزامنا بتقديم خدمات ذات جودة قصوى تستند إلى قيم ذات
                فائدة ملموسة
                للعملاء يمكن أن تساعدهم أنها تعزز أعمالهم وتحقيق أهدافهم على الإنترنت. </p>
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
