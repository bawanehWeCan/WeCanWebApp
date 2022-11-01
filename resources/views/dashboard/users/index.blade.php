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

                                <a class="btn btn-primary btn-sm" href="{{ url('admin/users/create')}}">إضافة مستخدم</a>

                        </div>


                        </div>
                        <div class="card-block">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم المستخدم</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>نوع المستخدم</th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=0;
                                    @endphp
                                    @foreach ($data as $user)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                      @if($user->user_type==1)
                                      <b class="text-success">
                                        آدمن
                                      </b>
                                      @else
                                      <b class="text-danger">
                                        مستخدم عادي
                                      </b>
                                      @endif
                                        </td>
                                        <td>
                                            <a class="modal-effect btn btn-xs btn-danger" data-effect="effect-scale"
                                            data-user_id="{{ $user->id }}" data-name="{{ $user->name }}"
                                            data-toggle="modal" href="#modaldemo8" title="حذف"><i
                                                class="fa fa-trash-o"></i></a>

                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            {{$data->links()}}
                            {{-- <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav> --}}
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
                        <h6 class="modal-title">حذف المستخدم</h6><button aria-label="Close" class="close"
                            data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="{{ route('admin.user.destroy', 'test') }}" method="post">
                        {{ method_field('delete') }}
                        @csrf
                        <div class="modal-body">
                            <p>هل انت متاكد من عملية الحذف ؟</p><br>
                            <input type="hidden" name="user_id" id="user_id" value="">
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
        var user_id = button.data('user_id')
        var name = button.data('name')
        var modal = $(this)
        modal.find('.modal-body #user_id').val(user_id);
        modal.find('.modal-body #name').val(name);
    })
</script>
@endsection
