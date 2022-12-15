@extends('layouts.home')

@section('content')

    <!-- ===================================
              START THE FORM
            ==================================== -->
            <section class="account-section padding-20">
                <div class="text">
                    <h1 class="">تسجيل دخول المسؤل!</h1>
                </div>

                <div class="content__form margin-t-24">
                    <form method="POST" action="{{route('admin.login')}}">
                        @csrf
                        @if (session()->has('error'))
                        <p class="size-16 color-text form-text">{{session()->get('error')}}</p>
                        @endif
                        <div class="form-group icon-left">
                            <label>البريد الإلكتروني</label>
                            <div class="input_group">
                                <input type="email" name="email" class="form-control"
                                    required>
                                <div class="icon">
                                    <i class="ri-mail-open-line"></i>
                                </div>
                            </div>
                            @error('email')
                            <p class="size-14 color-text form-text">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group icon-left">
                            <label>كلمة المرور</label>
                            <div class="input_group">
                                <input type="password" class="form-control" name="password" required>
                                <div class="icon">
                                    <i class="ri-lock-password-line"></i>
                                </div>
                            </div>
                            @error('password')
                            <p class="size-14 color-text form-text">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="display-actions">
                            <button type="submit" class="btn btn-sm-arrow bg-primary">
                                <p> تسجيل الدخول</p>
                                <div class="ico">
                                    <i class="ri-arrow-drop-left-line"></i>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </section>


@endsection

