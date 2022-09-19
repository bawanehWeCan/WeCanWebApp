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
                        @foreach ( \App\Models\Project::all() as $project )

                        <div class="swiper-slide">
                            <!-- item-card-gradual -->
                            <div class="item-card-gradual">
                                <!-- <div class="head-card"></div> -->
                                <a href="#" class="body-card">
                                    <div class="cover-nft">
                                        <picture>
                                            <source srcset="{{ asset( $project->image ) }}" type="image/webp">
                                            <img class="img-cover" src="{{ asset( $project->image ) }}" alt="image NFT">
                                        </picture>


                                        <div class="countdown-time">
                                            <span>{{ $project->service?->name }}</span>
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
