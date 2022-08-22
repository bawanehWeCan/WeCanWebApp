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
                    <h1>الخدمات</h1>
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

    @include('parts.services')

@endsection