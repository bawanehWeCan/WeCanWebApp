<!-- ===================================
              START THE BORDER SECTIONS
            ==================================== -->
<div class="border-sections-home"></div>
<!-- ===================================
              START THE RANDOM NFTS
            ==================================== -->
<section class="unSwiper-cards margin-t-20">
    <!-- un-title-default -->
    <div class="un-title-default">
        <div class="text">
            <h2>اكتشف</h2>
            <p>الخدمات التي يقدمها جيشنا لك</p>
        </div>
        <div class="un-block-right">
            <a href="{{ route('services') }}" class="icon-back" aria-label="iconBtn">
                <i class="ri-arrow-drop-right-line"></i>
            </a>
        </div>
    </div>
    <div class="discover-nft-random margin-t-20">
        <div class="content-NFTs-body">

            @php
                //dd( \App\Models\Service::all() );
                $i = 0;
            @endphp

            @foreach (\App\Models\Service::all() as $service)
                @if ($i == 0)
                    <!-- item-card-nft -->
                    <div class="item-card-nft">
                        <picture>
                            <source srcset="{{ asset($service->image) }}" type="image/webp">
                            <img class="big-image" src="{{ asset($service->image) }}" alt="">
                        </picture>
                        <div class="counterdown">
                            <span>الأكثر طلباً</span>
                        </div>
                        <a href="{{ route('service', $service->id) }}" class="un-info-card">
                            <div class="block-left">
                                <h4>{{ $service->name }}</h4>
                            </div>
                            <div class="block-right">
                                <h6>يبدأ من</h6>
                                <p>
                                    <span>{{ $service->price }}</span>
                                    دينار اردني
                                </p>
                            </div>
                        </a>
                    </div>
                    @php
                        $i = 1;
                    @endphp
                @else
                    <!-- item-sm-card-NFTs -->
                    <a href="page-collectibles-details.html" class="item-sm-card-NFTs">
                        <div class="cover-image">
                            <picture>
                                <source srcset="{{ asset($service->image) }}" type="image/webp">
                                <img class="big-image" src="{{ asset($service->image) }}" alt="">
                            </picture>
                            <div class="user-text">
                                <div class="user-avatar">
                                    <span>{{ $service->name }}</span>
                                </div>
                                <!--
                                    <div class="number-eth">
                                        <span class="main-price">تبدأ من</span>
                                        <span>1000 دينار اردني</span>
                                    </div>
                                    -->
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach




        </div>
    </div>
</section>
<br><br>
