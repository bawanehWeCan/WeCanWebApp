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
                إضافة مشروع :
            </div>
            <div class="card-block">
                <form   action="{{url('admin/projects/store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">اسم المشروع:</span>
                            <input type="text"  name="name" required="" class="form-control">

                            </span>
                        </div>
                    </div>
                                      {{-- <div class="form-group row">
                                        <label class="col-md-3 form-control-label" for="select">نوع الخدمة:</label>
                                        <div class="col-md-9">
                                            <select id="select_ser" name="select_ser" class="form-control" size="1">
                                                <option value="0">Please select</option>
                                                @foreach ($data as $service)


                                                <option value="{{$service->id}}"> {{$service->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> --}}

                    <div class="form-group">
                        <div class="input-group">

                            <span class="input-group-addon"> الصورة:</span>

                            <input type="file" name="pic" required="" class="form-control"  accept=".jpg, .png, image/jpeg, image/png"
                            data-height="70" />


                            </span>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"> المحتوى:</span>
                            <input type="text" id="username3" name="content" required="" class="form-control">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"> نوع الخدمة:</span>
                            <div class="col-md-9">
                                <select id="select_ser" name="select_ser" class="form-control" size="1">
                                    <option value="0" selected>Please select</option>
                                    @foreach ($data as $service)


                                    <option value="{{$service->id}}"> {{$service->name}}</option>
                                    @endforeach
                                </select>
                            </div>

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
