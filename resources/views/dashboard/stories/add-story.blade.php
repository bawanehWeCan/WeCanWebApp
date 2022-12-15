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
                إضافة قصة :
            </div>
            <div class="card-block">
                <form   action="{{url('admin/stories/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">العنوان :</span>
                            <input type="text"  name="name" required="" class="form-control">

                            </span>
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

                            <span class="input-group-addon"> الصورة الشخصية:</span>
                            <input type="file" name="avater" class="form-control"
                            data-height="70" />

                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">المحتوى:</span>
                            <textarea id="username3" name="content" class="form-control"></textarea>

                            </span>
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
