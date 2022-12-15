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
                إضافة مساعدة :
            </div>
            <div class="card-block">
                <form   action="{{url('admin/faqs/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">السؤال:</span>
                            <textarea name="question" required="" class="form-control"></textarea>

                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">الإجابة:</span>
                            <textarea name="answer" required="" class="form-control"></textarea>

                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">الترتيب:</span>
                            <input type="number" min="0" id="username3" name="order" required="" class="form-control">

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
