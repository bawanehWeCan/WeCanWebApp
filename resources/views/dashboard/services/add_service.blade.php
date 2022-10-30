@extends('dashboard.layouts.layout')
@section('body')
<div class="container-fluid">
    <div class="animated fadeIn">
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>خطا</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
                إضافة خدمة :
            </div>
            <div class="card-block">
                <form   action="{{url('admin/services/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">اسم الخدمة:</span>
                            <input type="text"  name="name" required="" class="form-control">

                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">

                            <span class="input-group-addon"> الصورة:</span>
                            <input type="file" required="" name="pic" class="form-control" accept=".jpg, .png, image/jpeg, image/png"
                            data-height="70" />

                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">السعر:</span>
                            <input type="number" id="username3" name="price" required="" class="form-control">

                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"> العنوان الأول:</span>
                            <input type="text" id="username3" name="heading1" required="" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"> المحتوى الأول:</span>
                            <input type="text" id="username3" name="content1" required="" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"> العنوان الثاني:</span>
                            <input type="text" id="username3" name="heading2" required="" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"> المحتوى الثاني:</span>
                            <input type="text" id="username3" name="content2" required="" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"> الميزات:</span>
                            <input type="text" id="username3" name="features" required="" class="form-control">

                        </div>
                    </div>






                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div></div>
@endsection
