@extends('layouts.admin')
@section('content')
@push('title',$title.' All')
    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ breadcrumb ] start -->
                            <div class="page-header">
                                <div class="page-block">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="page-header-title">
                                                <h5 class="m-b-10">Dashboard</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html"><i
                                                            class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="{{ url($page_url.'/create') }}">Add {{ $title ?? "" }}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ breadcrumb ] end <button type="button" class="btn btn-primary">all user</button> -->
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-8 card_top_titel">
                                                    <i class="fab fa-gg-circle"></i> All Admins Information
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <a href="{{ route('admins.create') }}" class="btn btn-primary btn-sm"><i
                                                            class="fa fa-plus-circle"></i>Add {{ $page_url }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="dt-responsive table-responsive">
                                                <table id="order-table" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>User Role</th>
                                                            <th>Photo</th>
                                                            <th>Manage</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($getAllData as $item)
                                                        <tr>
                                                            <td>{{ $item->name ?? "" }}</td>
                                                            <td>{{ $item->email ?? "" }}</td>
                                                            <td>{{ $item->phone ?? "" }}</td>
                                                            <td>User Role</td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('admins.show',$item->id) }}" class="text-success pb-01"><i
                                                                        class="fas fa-plus-square fa-lg"></i></a>
                                                                <a href="{{ route('admins.edit',$item->id) }}" class="text-info pb-01"><i
                                                                        class="fas fa-pen fa-lg"></i></a>
                                                                {{-- <a href="" id="softDelete" data-toggle="modal" data-target="#softDelModal" data-id="{{$item->id}}" class="text-danger pb-01"><i
                                                                        class="fas fa-trash-alt fa-lg"></i></a> --}}
                                                                        <span>
                                                                            <form action="{{ route('admins.destroy' , $item->id)}}" method="POST">
                                                                                @csrf
                                                                                <input type="hidden" name="_method" value="DELETE" />
                                                                                <button type="submit" class="text-danger pb-01 btn-sm" style="border: none;" ><i class="fas fa-trash-alt fa-lg"></i></button>
                                                                            </form>
                                                                        </span>
                                                            </td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#" class="footer_btn btn-primary">Print</a>
                                            <a href="#" class="footer_btn btn-success">Excel</a>
                                            <a href="#" class="footer_btn btn-danger">PDF</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- <!--Delete Modal Information-->
<div id="softDelModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content p-0 b-0">
            <form action="{{ route('admins.destroy') }}" method="DELETE">
                {{ method_field('DELETE') }}
              @csrf
              <div class="card mb-0">
                <div class="card-header">
                    <h3 class="card-title float-left"><i class="fa fa-gg-circle"></i> Confirm Message</h3>
                </div>
                <div class="card-body modal_card">
                  Are you sure you want to delete?
                  <input type="hidden" id="modal_id" name="DELETE">
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-sm btn-dark waves-effect">Confirm</button>
                    <button type="button" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">Close</button>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>
<!--Publish Modal Information-->
<div id="publishModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content p-0 b-0">
            <form method="post" action="" enctype="multipart/form-data">
              @csrf
              <div class="card mb-0">
                <div class="card-header">
                    <h3 class="card-title float-left"><i class="fa fa-gg-circle"></i> Confirm Message</h3>
                </div>
                <div class="card-body modal_card">
                  Are you sure you want to publish banner?
                  <input type="hidden" id="modal_id" name="modal_id">
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-sm btn-dark waves-effect">Confirm</button>
                    <button type="button" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">Close</button>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>
<!--Unpublish Modal Information-->
<div id="unPubModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content p-0 b-0">
            <form method="POST" action="" enctype="multipart/form-data">
              @csrf
              <div class="card mb-0">
                <div class="card-header">
                    <h3 class="card-title float-left"><i class="fa fa-gg-circle"></i> Confirm Message</h3>
                </div>
                <div class="card-body modal_card">
                  Are you sure you want to unpublish banner?
                  <input type="hidden" id="modal_id" name="modal_id">
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-sm btn-dark waves-effect">Confirm</button>
                    <button type="button" class="btn btn-sm btn-danger waves-effect" data-dismiss="modal">Close</button>
                </div>
              </div>
            </form>
        </div>
    </div>
</div> --}}
@endsection
