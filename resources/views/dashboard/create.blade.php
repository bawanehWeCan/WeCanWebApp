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
                إضافة مستخدم :
            </div>
            <div class="card-block">
                <form   action="{{url('admin/users/store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">اسم المستخدم</span>
                            <input type="text" id="username3" name="name" required="" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-user"></i>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">البريد الإلكتروني</span>
                            <input type="email" id="email3" name="email" required=""  class="form-control">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">كلمة السر</span>
                            <input type="password" id="password3" name="password" required="" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-asterisk"></i>
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
