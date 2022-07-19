<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="Unic – NFT Marketplace PWA Mobile Template">
    <meta name="keywords"
        content="bootstrap 5, mobile template, wallet, crypto, currency, about, blog, cordova, phonegap, mobile, html, nft, store, marketplace, pwa" />

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/icon-32x32.png') }}" sizes="32x32">
    <!-- IOS SUPPORT -->
    <link rel="apple-touch-icon" href="{{ asset('images/favicon/icon-96x96.png') }}">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/zuck_stories/zuck.min.css') }}">
    <link rel="manifest" href="{{ asset('_manifest.json') }}" />



    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500;700&display=swap" rel="stylesheet">

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
        <!-- START CONTENT -->
        <div id="content">

            @include('layouts.parts.header')

            @yield('content')

        </div>
        @include('layouts.parts.footer')
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
            stories: [{
                    id: 'userOne',
                    photo: 'images/avatar/22.jpg',
                    name: 'MelonPixel⚡',
                    link: '',
                    lastUpdated: 1646579345,
                    items: [
                        buildItem('1', 'photo', 4, 'images/other/29.jpg', '', 'page-my-profile.html',
                            'Visit My Profile', 1646665745, false),
                        buildItem('2', 'photo', 4, 'images/other/31.jpg', '',
                            'https://themeforest.net/item/unic-nft-mobile-template/36083774',
                            'Get it Now 🚀', 1646665745, false),
                        buildItem('3', 'photo', 4, 'images/other/2.jpg', '', '', '', 1646838545, false),
                    ],
                },
                {
                    id: 'userTwo',
                    photo: 'images/avatar/14.jpg',
                    name: 'Camillo Ferrari',
                    link: '',
                    lastUpdated: 1646673856,
                    items: [
                        buildItem('4', 'photo', 4, 'images/other/25.jpg', '', '', '', 1646665745, false),
                    ],
                },
                {
                    id: 'userThree',
                    photo: 'images/avatar/8.png',
                    name: 'Pingu',
                    link: '',
                    lastUpdated: 1646753056,
                    items: [
                        buildItem('5', 'photo', 4, 'images/other/4.jpg', '', '', '', 1646753056, false),
                        buildItem('6', 'photo', 4, 'images/other/11.jpg', '', '', '', 1646709856, false),
                    ],
                },
                {
                    id: 'userFour',
                    photo: 'images/avatar/3.jpg',
                    name: 'Julian Co.',
                    link: '',
                    lastUpdated: 1646789056,
                    items: [
                        buildItem('7', 'photo', 4, 'images/other/10.jpg', '', '', '', 1646789056, false),
                    ],
                },
                {
                    id: 'userFive',
                    photo: 'images/avatar/5.png',
                    name: 'Tito_Calab',
                    link: '',
                    lastUpdated: 1646803456,
                    items: [
                        buildItem('8', 'photo', 4, 'images/other/17.jpg', '', '', '', 1646803456, false),
                    ],
                },
                {
                    id: 'userSix',
                    photo: 'images/avatar/7.jpg',
                    name: 'DoggieBoy',
                    link: '',
                    lastUpdated: 1646889856,
                    items: [
                        buildItem('9', 'photo', 4, 'images/other/28.jpg', '', '', '', 1646889856, false),
                    ],
                },
                {
                    id: 'userSeven',
                    photo: 'images/avatar/9.jpg',
                    name: 'Leda Beneventi',
                    link: '',
                    lastUpdated: 1647321856,
                    items: [
                        buildItem('10', 'photo', 4, 'images/other/29.jpg', '', '', '', 1647321856, false),
                    ],
                }
            ],
        });
    </script>

</body>


</html>
