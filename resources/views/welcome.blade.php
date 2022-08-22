@extends('layouts.app')

@section('content')

    @include('parts.services')

    @include('parts.about')

    @include('parts.work')

    <!-- ===================================
              START THE BEST SELLER
            ==================================== -->
            <section class="un-section-seller margin-y-20">
                <!-- un-title-default -->
                <div class="un-title-default">
                    <div class="text">
                        <h2>علاماتنا التجارية</h2>
                        <p>بعض من علاماتنا التجارية</p>
                    </div>
                    <div class="un-block-right">
                        <a href="page-best-seller.html" class="icon-back" aria-label="iconBtn">
                            <i class="ri-arrow-drop-left-line"></i>
                        </a>
                    </div>
                </div>
                <!-- un-block-auther -->
                <div class="un-block-creators margin-t-20">
                    <!-- Swiper -->
                    <div class="swiper swiperCreators">
                        <div class="swiper-wrapper">
                            @foreach (\App\Models\Brand::all() as $brand )
                                <div class="swiper-slide">
                                <!-- un-item-seller -->
                                <a href="page-creator-profile.html" class="un-item-seller">
                                    <div class="number">
                                        {{ $brand->id }}
                                    </div>
                                    <div class="media-profile">
                                        <figure class="image-avatar">
                                            <picture>
                                                <source srcset="{{ asset( $brand->image ) }}" type="image/webp">
                                                <img src="{{ asset( $brand->image ) }}" alt="">
                                            </picture>
                                            <div class="icon-verify">
                                                <i class="ri-checkbox-circle-fill"></i>
                                            </div>
                                        </figure>
                                        <div class="text">
                                            <h3>{{ $brand->name }}</h3>
                                            <p>{{ $brand->link }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            
                            
                        </div>
                    </div>
                </div>
            </section>
    

@endsection