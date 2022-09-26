@extends('layouts.home')

@section('content')
    <div class="space-items"></div>

    <div class="bg-white pt-3 pb-5">
        <div class="un-block-cards">
            <!-- Swiper -->
            <div class="swiper nftSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- item-card-nft -->
                        <a href="page-collectibles-details.html" class="item-card-nft --swiper">
                            <picture>
                                <source srcset="{{ asset( $project->image ) }}" type="image/webp">
                                    <img class="img-avatar" src="{{ asset( $project->image ) }}" alt="">
                            </picture>
                            <div class="counterdown">
                                <span>08H</span>
                                <span>38M</span>
                                <span>16S</span>
                            </div>
                            <div class="un-info-card">
                                <div class="block-left">
                                    <h4>Dark Side of Me</h4>
                                    <div class="user">
                                        <picture>
                                            <source srcset="{{ asset( $project->image ) }}" type="image/webp">
                                            <img class="img-avatar" src="{{ asset( $project->image ) }}" alt="">
                                        </picture>
                                        <h5>Julian Co.</span>
                                    </div>
                                </div>
                                <div class="block-right">
                                    <h6>Starting Bid</h6>
                                    <p>
                                        <span>($3,650)</span>
                                        1.50 ETH
                                    </p>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <!-- item-card-nft -->
                        <a href="page-collectibles-details.html" class="item-card-nft --swiper">
                            <picture>
                                <source srcset="{{ asset( $project->image ) }}" type="image/webp">
                                    <img class="img-avatar" src="{{ asset( $project->image ) }}" alt="">
                            </picture>
                            <div class="counterdown">
                                <span>08H</span>
                                <span>38M</span>
                                <span>16S</span>
                            </div>
                            <div class="un-info-card">
                                <div class="block-left">
                                    <h4>Ceres Searching</h4>
                                    <div class="user">
                                        <picture>
                                            <source srcset="{{ asset( $project->image ) }}" type="image/webp">
                                                <img class="img-avatar" src="{{ asset( $project->image ) }}" alt="">
                                        </picture>
                                        <h5>Settimio Loggia</span>
                                    </div>
                                </div>
                                <div class="block-right">
                                    <h6>Starting Bid</h6>
                                    <p>
                                        <span>($3,650)</span>
                                        1.50 ETH
                                    </p>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <!-- item-card-nft -->
                        <a href="page-collectibles-details.html" class="item-card-nft --swiper">
                            <picture>
                                <source srcset="{{ asset( $project->image ) }}" type="image/webp">
                                    <img class="img-avatar" src="{{ asset( $project->image ) }}" alt="">
                            </picture>
                            <div class="counterdown">
                                <span>08H</span>
                                <span>38M</span>
                                <span>16S</span>
                            </div>
                            <div class="un-info-card">
                                <div class="block-left">
                                    <h4>Secret Door</h4>
                                    <div class="user">
                                        <picture>
                                            <source srcset="{{ asset( $project->image ) }}" type="image/webp">
                                                <img class="img-avatar" src="{{ asset( $project->image ) }}" alt="">
                                        </picture>
                                        <h5>Ausonio_Loi</span>
                                    </div>
                                </div>
                                <div class="block-right">
                                    <h6>Starting Bid</h6>
                                    <p>
                                        <span>($3,650)</span>
                                        2.24 ETH
                                    </p>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <!-- item-card-nft -->
                        <a href="page-collectibles-details.html" class="item-card-nft --swiper">
                            <picture>
                                <source srcset="{{ asset( $project->image ) }}" type="image/webp">
                                    <img class="img-avatar" src="{{ asset( $project->image ) }}" alt="">
                            </picture>
                            <div class="counterdown">
                                <span>08H</span>
                                <span>38M</span>
                                <span>16S</span>
                            </div>
                            <div class="un-info-card">
                                <div class="block-left">
                                    <h4>Secret Door</h4>
                                    <div class="user">
                                        <picture>
                                            <source srcset="{{ asset( $project->image ) }}" type="image/webp">
                                                <img class="img-avatar" src="{{ asset( $project->image ) }}" alt="">
                                        </picture>
                                        <h5>Ausonio_Loi</span>
                                    </div>
                                </div>
                                <div class="block-right">
                                    <h6>Starting Bid</h6>
                                    <p>
                                        <span>($3,650)</span>
                                        2.24 ETH
                                    </p>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="space-items"></div>
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
            <h1>{{ $project->name }}</h1>
        </div>

        <div class="un-block-right">

            <div class="un-user-profile">
                <div class="em_darkMode_menu">

                    <a href="{{ url('/') }}">
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


            <div class="title-card-text d-flex align-items-center justify-content-between">
                <div class="text">
                    <h1>{{ $project->name }}</h1>
                </div>
            </div>



        </div>

        <!-- footer -->
        <div class="space-sticky-footer"></div>
        <div class="footer">
            <div class="content">

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
