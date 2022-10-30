@extends('dashboard.layouts.layout')

@section('body')
@if (session('success'))
    <div class="alert alert-success">
        <button type="button" class="close"  data-dismiss="alert">
            x
        </button>
        {{ session('success') }}
    </div>
@endif
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">

                            <div class="col-sm-1 col-md-2">

                                <a class="btn btn-primary btn-sm" href="{{ url('admin/services/create') }}">إضافة خدمة</a>

                        </div>


                        </div>
                        <div class="card-block">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم الخدمة</th>
                                        <th>الصورة </th>
                                        <th>السعر</th>
                                        <th>العنوان الأول</th>
                                        <th>المحتوى الأول </th>
                                        <th>العنوان الثاني</th>
                                        <th>المحتوى الثاني </th>
                                        <th> الميزات </th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=0;
                                    @endphp
                                    @foreach ($data as $service)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{ $service->name }}</td>
                                        <td>
                                            <img height="50px" width="50px" src="/{{$service->image}}">
                                          </td>
                                        <td>{{ $service->price }}</td>
                                        <td>{{ $service->heading1 }}</td>
                                        <td>{{ $service->content1 }}</td>
                                        <td>{{ $service->heading2 }}</td>
                                        <td>{{ $service->content2 }}</td>
                                        <td>{{ $service->features }}</td>

                                        <td>
                                            <a class="modal-effect btn btn-xs btn-danger" data-effect="effect-scale"
                                            data-id="{{ $service->id }}" data-name="{{ $service->name }}"
                                            data-toggle="modal" href="#modaldemo8" title="حذف"><i
                                                class="fa fa-trash-o"></i></a>

                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{$data->links()}}






                        </div>

                    </div>
                </div>
                <!--/col-->
            </div>
        </div></div></div>
        <div class="modal" id="modaldemo8">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">حذف الخدمة</h6><button aria-label="Close" class="close"
                            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ url('admin/service','test') }}" method="post">
                        {{ method_field('delete') }}
                        @csrf
                        <div class="modal-body">
                            <p>هل انت متاكد من عملية الحذف ؟</p><br>
                            <input type="hidden" name="id" id="id" value="">
                            <input class="form-control" name="name" id="name" type="text" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                            <button type="submit" class="btn btn-danger">تاكيد</button>
                        </div>
                </div>
                </form>
            </div>
        </div>


@endsection
@section('javasc')
<script>
    $('#modaldemo8').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name').val(name);
    })
</script>
@endsection
