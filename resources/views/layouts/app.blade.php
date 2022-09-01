<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description"
        content="شركة نستطيع ، شركة ويكان ، شركة we can ، شركة برمجة، شركة تصميم ، شركة تسويق الكتروني، شركة تصميم تطبيقات ، شركة تصميم مواقع ، شركة برمجة مواقع ، we can for information technology , wecan for design , wecan for webservice , we can ، we can do it, we can company , wecan company , web serivce , digital marketing , business solution , wecan for busniess solution , شركة نستطيع للبرمجة، شركة نستطيع للتصميم ، شركة نستطيع للبرمجة > شركة ويكان للتسويق ، شركة ويكان لتصميم المواقع ، شركة نستطيع لتصميم المواقع">
    <meta name="keywords"
        content="شركة نستطيع ، شركة ويكان ، شركة we can ، شركة برمجة، شركة تصميم ، شركة تسويق الكتروني، شركة تصميم تطبيقات ، شركة تصميم مواقع ، شركة برمجة مواقع ، we can for information technology , wecan for design , wecan for webservice , we can ، we can do it, we can company , wecan company , web serivce , digital marketing , business solution , wecan for busniess solution , شركة نستطيع للبرمجة، شركة نستطيع للتصميم ، شركة نستطيع للبرمجة > شركة ويكان للتسويق ، شركة ويكان لتصميم المواقع ، شركة نستطيع لتصميم المواقع" />

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/icon-32x32.png') }}" sizes="32x32">
    <!-- IOS SUPPORT -->
    <link rel="apple-touch-icon" href="{{ asset('images/favicon/icon-96x96.png') }}">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css?v=10') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/zuck_stories/zuck.min.css') }}">
    <link rel="manifest" href="{{ asset('_manifest.json') }}" />



    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500;700&display=swap" rel="stylesheet">
    @laravelPWA
    <style>
        html,
        body,
        * {
            font-family: 'Tajawal', sans-serif;
        }
    </style>
    <!--end google fonts-->

</head>

<body>
    <!-- ===================================
      START LODAER PAGE
    ==================================== -->
    <section class="loader-page" id="loaderPage">
        <div class="spinner_flash"></div>
    </section>
    <!-- START WRAPPER -->
    <div id="wrapper">
        <div class="c-form show-d">
           
            
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
                                <input type="text" class="form-control"
                                    placeholder="رقم الهاتف مصحوب برمز الدولة">
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
        </div>
        <!-- START CONTENT -->
        <div id="content">

            @include('layouts.parts.header')

            @yield('content')

        </div>

        @include('layouts.parts.footer')
    </div>

    <!-- ===================================
      START THE MODAL UPLOAD
    ==================================== -->
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="mdllUploadItem"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="title-modal">Upload Item</h1>
                    <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content-upload-item text-center">
                        <p>
                            Choose <span>"Single"</span> if you want your collectible to be one of a kind or
                            <span>"Multiple"</span>
                            if you want
                            to sell one collectible multiple times
                        </p>
                        <div class="grid_buttonUpload">
                            <a href="page-create-single.html"
                                class="btn btn-create bg-primary text-white margin-b-20">
                                Create Single
                            </a>
                            <a href="page-create-multi.html"
                                class="btn btn-create bg-white border border-solid border-snow text-dark">
                                Create Multiple
                            </a>
                        </div>
                    </div>

                </div>
                <div class="modal-footer border-0">
                    <div class="env-pb"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===================================
      START THE MODAL ADD ETH
    ==================================== -->
    <div class="modal transition-bottom screenFull defaultModal mdlladd__rate fade" id="mdllAddETH" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="title-modal">Add ETH to your wallet</h1>
                    <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content-upload-item">
                        <p class="text-center">
                            Select one of the options to deposit <br> ETH to your wallet
                        </p>
                        <div class="un-navMenu-default margin-t-30 p-0">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-3">
                                    <a class="nav-link effect-click" href="javascript: void(0)">
                                        <div class="item-content-link">
                                            <div class="icon color-text w-auto">
                                                <i class="ri-exchange-box-line"></i>
                                            </div>
                                            <h3 class="link-title">Deposit from an exchange</h3>
                                        </div>
                                        <div class="other-cc">
                                            <span class="badge-text"></span>
                                            <div class="icon-arrow">
                                                <i class="ri-arrow-drop-right-line"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item mb-0">
                                    <a class="nav-link effect-click" href="javascript: void(0)">
                                        <div class="item-content-link">
                                            <div class="icon color-text w-auto">
                                                <i class="ri-bank-card-line"></i>
                                            </div>
                                            <h3 class="link-title">Buy with card</h3>
                                        </div>
                                        <div class="other-cc">
                                            <span class="badge-text"></span>
                                            <div class="icon-arrow">
                                                <i class="ri-arrow-drop-right-line"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
                <div class="modal-footer border-0">
                    <div class="env-pb"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===================================
      START THE MODAL SIDEBAR MENU - guest
    ==================================== -->
    <div class="modal sidebarMenu -left -guest fade" id="mdllSidebar-connected" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <a href="{{ url('/') }}">
                    <div class="un-item-logo show-d" style="padding:30px">
                        <img class="logo-img light-mode" src="{{ asset('images/logo_b.svg') }}" alt="">
                        <img class="logo-img dark-mode" src="{{ asset('images/logo-white.svg') }}" alt="">
                    </div>
                </a>
                <div class="modal-header hide-d">
                    <div class="welcome_em">
                        <h2>اهلاً بك في نستطيع<span>.</span></h2>
                        <p>
                            جيش من الخبراء يعمل لك ومن اجلك
                        </p>
                        <a href="{{ route('contact') }}" class="btn btn-md-size bg-primary text-white rounded-pill">
                            اتصل بنا
                        </a>
                    </div>
                    <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav flex-column -active-links">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">
                                <div class="icon_current">
                                    <i class="ri-compass-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-compass-fill"></i>
                                </div>
                                <span class="title_link">اكتشف</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services') }}">
                                <div class="icon_current">
                                    <i class="ri-home-5-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-home-5-fill"></i>
                                </div>
                                <span class="title_link">الخدمات</span>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">
                                <div class="icon_current">
                                    <i class="ri-pages-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-pages-fill"></i>
                                </div>
                                <span class="title_link">من نحن</span>


                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">
                                <div class="icon_current">
                                    <i class="ri-layout-2-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-layout-2-fill"></i>
                                </div>
                                <span class="title_link">اتصل بنا</span>

                            </a>
                        </li>

                        <label class="title__label">اخرى</label>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('help') }}">
                                <div class="icon_current">
                                    <i class="ri-questionnaire-line"></i>
                                </div>
                                <div class="icon_active">
                                    <i class="ri-questionnaire-fill"></i>
                                </div>
                                <span class="title_link">مركز المساعدة</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <div class="modal-footer">
                    <div class="em_darkMode_menu">
                        <label class="text" for="switchDark2">
                            <h3>الوضع المظلم</h3>
                            <p>تصفح في الوضع المظلم</p>
                        </label>
                        <label class="switch_toggle toggle_lg theme-switch" for="switchDark2">
                            <input type="checkbox" class="switchDarkMode theme-switch" id="switchDark2"
                                aria-describedby="switchDark2" aria-describedby="switchDark2">
                            <span class="handle"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===================================
      START THE CREATE STORY MODAL
    ==================================== -->
    <div class="modal sidebarMenu -left --fullScreen modal-filter fade" id="mdllAddStory" tabindex="-1"
        aria-labelledby="sidebarMenuLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="title-modal">Create Story</h1>
                    <button type="button" class="btn btnClose" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="un-create-collectibles bg-white p-0">
                        <div class="form-group upload-form">
                            <h2>Upload file</h2>
                            <p>Choose your file to upload</p>
                            <div class="upload-input-form">
                                <input type="file">
                                <div class="content-input">
                                    <div class="icon"><i class="ri-upload-cloud-line"></i></div>
                                    <span>PNG, GIF, JPG, MP4 . Max 5 mb.</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group icon-right">
                            <label>Add Link</label>
                            <div class="input_group">
                                <input type="url" class="form-control" placeholder='e. g. "www.example.com"'>
                                <div class="icon">
                                    <i class="ri-link"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Link Text</label>
                            <div class="inpust_group">
                                <input type="text" class="form-control" placeholder='e. g. "INSTALL APP"'>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center border-0 pt-2">
                    <div class="footer-pages-forms">
                        <div class="content">
                            <div class="links-clear-data">
                                <button type="button" class="btn link-clear" data-bs-toggle="modal"
                                    data-bs-dismiss="modal">
                                    <i class="ri-close-circle-line"></i>
                                    <span>Cancel</span>
                                </button>
                            </div>
                            <a href="page-home-stories.html" class="btn btn-bid-items">
                                <p>Create Story</p>
                                <div class="ico">
                                    <i class="ri-arrow-drop-right-line"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===================================
      START STATUS CONNECTION
    ==================================== -->
    <div class="d-flex justify-content-center">
        <div class="toast status-connection" role="alert" aria-live="assertive" aria-atomic="true"></div>
    </div>





    <!-- JS FILES -->
    <script src="{{ asset('assets/vendors/zuck_stories/zuck.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/smoothscroll/smoothscroll.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- PWA APP SERVICE REGISTRATION AND WORKS JS -->
    <script src="{{ asset('assets/js/pwa-services.js') }}"></script>

    <script>
        // BUILD ITEM
        function buildItem(id, type, length, src, preview, link, linkText, time, seen) {
            return {
                id,
                type,
                length,
                src,
                preview,
                link,
                linkText,
                time,
                seen
            };
        }

        /*==================================
        START THE STORIES [CIRCLES]
        ==================================*/
        var stories = new Zuck('stories', {
            autoFullScreen: true, // enables fullscreen on mobile browsers
            skin: 'Snapgram',
            avatars: true,
            list: false,
            openEffect: true,
            cubeEffect: true,
            backButton: false,
            backNative: false,
            localStorage: false,
            paginationArrows: false,
            paginationArrows: true,

            stories: [

                @foreach (\App\Models\Story::all() as $story)

                    {
                        id: '{{ $story->id }}',
                        photo: "{{ asset($story->avater) }}",
                        name: '{{ $story->name }}',
                        link: '',
                        lastUpdated: 1646673856,
                        items: [
                            buildItem('{{ $story->id }}', 'photo', 10,
                                "{{ asset($story->image) }}", '', '', '',
                                1646665745{{ $story->id }}, false),
                        ],
                    },
                @endforeach

            ],
        });
    </script>

</body>


</html>
