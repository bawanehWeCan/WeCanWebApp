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
                إضافة خطة :
            </div>
            <div class="card-block">
                <form   action="{{url('admin/prices/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">العنوان:</span>
                            <input type="text"  name="name" required="" class="form-control">

                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"> النوع:</span>
                            <select id="username3" name="type" class="form-control">
                                <option selected disabled>...إختار</option>
                                    <option value="ذهبي">ذهبي</option>
                                    <option value="فضي">فضي</option>
                                    <option value="برونزي">برونزي</option>
                              </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">السعر:</span>
                            <input type="number" id="username3" min="0" name="price" required="" class="form-control">

                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"> المحتوي :</span>
                            <textarea id="username3" name="content" required="" class="form-control"></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"> الميزة الأولى :</span>
                            <textarea id="username3" name="feature1" required="" class="form-control"></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"> الميزة الثانية :</span>
                            <textarea id="username3" name="feature2" required="" class="form-control"></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">

                            <span class="input-group-addon"> الصورة:</span>
                            <input type="file" name="image" class="form-control"
                            data-height="70" />

                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"> الإشتراك:</span>
                            <input type="text" id="username3" name="subscription" required="" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"> الخدمة:</span>
                            <select id="username3" name="service_id" class="form-control">
                                <option selected disabled>...إختار</option>
                                @foreach ($services as $service)
                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                @endforeach
                              </select>
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
