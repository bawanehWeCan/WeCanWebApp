@extends('layouts.app')

@section('content')
    <!-- START WRAPPER -->
    <div id="wrapper">
        <!-- START CONTENT -->
        <div id="content">
            <!-- ===================================
                          START THE HEADER
                        ==================================== -->
            <header class="default heade-sticky">
                <div class="un-title-page go-back">
                    <a href="app-pages.html" class="icon">
                        <i class="ri-arrow-drop-left-line"></i>
                    </a>
                    <h1>{{ $service->name }}</h1>
                </div>
            </header>
            <!-- ===================================
                          START THE SPACE STICKY
                        ==================================== -->
            <div class="space-sticky"></div>
            <!-- ===================================
                          START THE ACTIIVITY PAGE
                        ==================================== -->
            <section class="un-details-collectibles">
                <!-- head -->
                <div class="head">
                    <div class="cover-main-img">
                        <picture>
                            <source srcset="{{ asset($service->image) }}" type="image/webp">
                            <img class="img-full" src="{{ asset($service->image) }}" alt="">
                        </picture>
                        <div class="action-sticky">
                            <button type="button" class="btn btn-fullScreen">
                                <i class="ri-fullscreen-fill"></i>
                            </button>
                            <button type="button" class="btn btn-share" data-bs-toggle="modal"
                                data-bs-target="#mdllShareCollectibles">
                                <i class="ri-share-forward-line"></i>
                            </button>
                        </div>
                    </div>

                    <div class="title-card-text d-flex align-items-center justify-content-between">
                        <div class="text">
                            <h1>{{ $service->name }}</h1>
                            <p>Yes We Can Creat & Design Website </p>
                        </div>
                        <span class="btn-xs-size bg-pink text-white rounded-pill">الأكثر طلباً</span>
                    </div>

                    <div class="txt-price-coundown d-flex justify-content-between">
                        <div class="price">
                            <h1>{{ $service->heading1 }}</h1>
                            <h2>
                                {{ $service->content1 }}
                            </h2>
                        </div>
                    </div>
                    <div class="txt-price-coundown d-flex justify-content-between">
                        <div class="price">
                            <h1>{{ $service->heading1 }}</h1>
                            <h2>
                                {{ $service->content2 }}
                            </h2>
                        </div>
                    </div>

                </div>
                <!-- body -->
                <div class="body">
                    <div class="description">
                        <p>
                            يمكنك الحصول على استشارة مجانية لكافة خدماتنا واحصل على الإجابة من خبراء يقدمون افضل ما لديهم
                            لك.
                        </p>
                    </div>
                    <ul class="nav nav-pills nav-pilled-tab" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-Info-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Info" type="button" role="tab" aria-controls="pills-Info"
                                aria-selected="true">المميزات</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Owner-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Owner" type="button" role="tab" aria-controls="pills-Owner"
                                aria-selected="false">الأعمال</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-History-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-History" type="button" role="tab" aria-controls="pills-History"
                                aria-selected="false">الأسعار</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Bids-tab" data-bs-toggle="pill" data-bs-target="#pills-Bids"
                                type="button" role="tab" aria-controls="pills-Bids"
                                aria-selected="false">المزيد</button>
                        </li>
                    </ul>

                    <div class="tab-content content-custome-data" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-Info" role="tabpanel"
                            aria-labelledby="pills-Info-tab">
                            <div class="price">
                                {{ $service->name }}
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-Owner" role="tabpanel" aria-labelledby="pills-Owner-tab">
                            <!-- ===================================
                                START THE CONTENT
                                ==================================== -->
                            <section class="un-page-components">
                                <div class="un-title-default">
                                    <div class="text">
                                        <h2>اعمالنا</h2>
                                        <p>بعض من اعمالنا التي نفخر بإنجازها</p>
                                    </div>
                                </div>
                                <div class="content-comp p-0">

                                    <div class="space-items"></div>

                                    <div class="unSwiper-cards bg-white py-3">
                                        <div class="content-cards-NFTs">
                                            <div class="swiper cardGradual">
                                                <div class="swiper-wrapper">
                                                    @foreach ($service->projects as $project)
                                                        <div class="swiper-slide">
                                                            <!-- item-card-gradual -->
                                                            <div class="item-card-gradual">
                                                                <!-- <div class="head-card"></div> -->
                                                                <a href="page-collectibles-details.html"
                                                                    class="body-card">
                                                                    <div class="cover-nft">
                                                                        <picture>
                                                                            <source srcset="{{ asset($project->image) }}"
                                                                                type="image/webp">
                                                                            <img class="img-cover"
                                                                                src="{{ asset($project->image) }}"
                                                                                alt="image NFT">
                                                                        </picture>

                                                                        <div class="icon-type">
                                                                            <i class="ri-vidicon-line"></i>
                                                                        </div>

                                                                    </div>
                                                                </a>
                                                                <div class="footer-card">
                                                                    <div class="starting-bad">
                                                                        <h4>{{ $project->name }}</h4>
                                                                        <span>{{ $project->content }}</span>
                                                                    </div>
                                                                    <div class="btn-like-click">
                                                                        <div class="btnLike">
                                                                            <input type="checkbox">
                                                                            <!--Views-->
                                                                            <span class="count-likes">195</span>
                                                                            <i class="ri-heart-3-line"></i>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <!-- End.content-comp -->
                            </section>

                            <!--End Portfolio-->


                        </div>
                        <div class="tab-pane fade" id="pills-History" role="tabpanel"
                            aria-labelledby="pills-History-tab">

                            <div class="panel pricing-table">

                                @foreach (\App\Models\Price::all() as $price )
                                    
                                
                                    <div class="pricing-plan">
                                        <img src="{{ asset( $price->image ) }}" alt=""
                                            class="pricing-img">
                                        <h2 class="pricing-header">{{ $price->name }}</h2>
                                        <ul class="pricing-features">
                                            <li class="pricing-features-item">{{ $price->feature1 }}</li>
                                            <li class="pricing-features-item">{{ $price->feature1 }}</li>
                                        </ul>
                                        <span class="pricing-price">{{ $price->price }}</span>
                                    </div>

                                @endforeach

                            </div>


                        </div>
                        <div class="tab-pane fade" id="pills-Bids" role="tabpanel" aria-labelledby="pills-Bids-tab">
                            <br>
                            <p>
                                هل لا يزال لديك المزيد من الإستفسارات
                                تواصل معنا الآن وسنقوم بالإجابة على جميع استفساراتك وخدمتك بأفضل شكل.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- footer -->
                <div class="space-sticky-footer"></div>
                <div class="footer">
                    <div class="content">
                        <div class="links-item-pages">
                            <a href="page-collectibles-details.html" class="icon-box prev">
                                <i class="ri-arrow-left-line"></i>
                            </a>
                            <a href="page-collectibles-details.html" class="icon-box next">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                        <a href="javascript: void(0)" class="btn btn-bid-items">
                            <p>اطلب الآن</p>
                            <div class="ico">
                                <i class="ri-arrow-drop-left-line"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
