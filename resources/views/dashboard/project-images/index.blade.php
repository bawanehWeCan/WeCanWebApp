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

                                <a class="btn btn-primary btn-sm" href="{{ url('admin/images/create') }}">إضافة صور المشاريع</a>

                        </div>


                        </div>
                        <div class="card-block">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم المشروع</th>
                                        <th>الصورة </th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=0;
                                    @endphp
                                    @foreach ($data as $image)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{ $image->project->name }}</td>
                                        <td>
                                            <img height="50px" width="50px" src="/{{$image->image}}">
                                          </td>



                                        <td>
                                            <a class="modal-effect btn btn-xs btn-danger" data-effect="effect-scale"
                                            data-id="{{ $image->id }}" data-name="{{ $image->image }}"
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
                        <h6 class="modal-title">حذف صورة المشروع</h6><button aria-label="Close" class="close"
                            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ url('admin/image','test') }}" method="post">
                        {{ method_field('delete') }}
                        @csrf
                        <div class="modal-body">
                            <p>هل انت متاكد من عملية الحذف ؟</p><br>
                            <input type="hidden" name="id" id="id" value="">
                            <img height="50px" width="50px" id="image" src="">

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
        modal.find('.modal-body #image').attr('src',`/${name}`);
    })
</script>
@endsection
