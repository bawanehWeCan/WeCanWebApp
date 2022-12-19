@extends('layouts.home')

@section('content')

            <!--
            ===================================
                     START THE HEADER
            ===================================
            -->
            <header class="default heade-sticky">
                <div class="un-title-page go-back">
                    <a href="javascript:history.back()" class="icon">
                        <i class="ri-arrow-drop-right-line"></i>
                    </a>
                    <h1>{{ $service->name }}</h1>
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
                       
                    </div>

                    <div class="title-card-text d-flex align-items-center justify-content-between">
                        <div class="descriptio">
                            <h4>{{ $service->name }}</h4>
                        </div>
                        <span class="btn-xs-size bg-pink text-white rounded-pill">الأكثر طلباً</span>
                    </div>

                    <div class="txt-price-coundown d-flex justify-content-between">
                        <div class="price">
                            <h5>{{ $service->heading1 }}</h5>
                            <h2>
                                {{ $service->content1 }}
                            </h2>
                        </div>
                    </div>
                    <div class="txt-price-coundown d-flex justify-content-between">
                        <div class="price">
                            <h5>{{ $service->heading1 }}</h5>
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
                            <div class="descriptio">
                                <p style="padding: 20px">{{ $service->features }}</p>
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
                                                    @foreach ($service->prices as $price )
                                                    <div class="swiper-slide">

                                                    <div class="whole">
                                                        <div @class([
                                                            "type",
                                                            'standard'=>$price->type=='فضي',
                                                            'ultimate'=>$price->type=='ذهبي'
                                                           ])>
                                                        <p>{{ $price->type }}</p>
                                                        </div>
                                                        <section class="un-page-components">

                                                            <div class="un-title-default">
                                                                <div class="text price-text">

                                                                <h4>{{ $price->name }}</h4>
                                                                <img class="img-cover" src="/{{$price->image}}" />
                                                                <p>{{ $price->content }}</p>
                                                            </div>
                                                            </div>
                                                            </section>
                                                            <div class="price-seprate"></div>
                                                    <div class="plan">

                                                        <div class="service-price-header">
                                                            <span>JOD</span>{{ $price->price }}
                                                            <p class="month">{{ $price->subscription }}</p>
                                                        </div>

                                                        <div class="service-price-content">

                                                            <ul>

                                                                <li>{{ $price->feature1 }}</li>
                                                                <li>{{ $price->feature2 }}</li>
                                                            </ul>
                                                        </div>
                                                        <div class="price-pricing">
                                                            <a href="{{route('contact')}}" class="bottom service-price-link"><p class="cart">أطلب الأن</p></a>
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
                            <a href="@if( isset($previous) ){{ route('service', $previous) }} @endif" class="icon-box prev">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                            <a href="@if( isset($next) ){{ route('service', $next) }} @endif" class="icon-box next">
                                <i class="ri-arrow-left-line"></i>
                            </a>
                        </div>
                        <a href="{{ route('contact') }}" class="btn btn-bid-items">
                            <p>اطلب الآن</p>
                            <div class="ico">
                                <i class="ri-arrow-drop-left-line"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

@endsection
@push('scripts')
<script>
$(".service-price-header").click(function () {
    var $this = $(this);
    $this.closest(".whole").find(".content").slideToggle();
  });

  $(".whole").on("click", "a", function () {
    event.preventDefault();
    $(".plan").removeClass("selected");
    $(this).closest(".whole").find(".plan").addClass("selected");
  });
</script>
@endpush
