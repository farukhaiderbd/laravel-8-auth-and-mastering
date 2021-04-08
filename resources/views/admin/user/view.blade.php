@extends('layouts.admin')
@section('content')

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
                                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">All User</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
    												<div class="card user-card user-card-1 support-bar">
    													<div class="card-header border-0 p-2 pb-0">
    														<div class="cover-img-block">
    															<img src="{{asset('contents/admin')}}/assets/images/widget/slider7.jpg" alt="" class="img-fluid">
    														</div>
    													</div>
    													<div class="card-body pt-0">
    														<div class="user-about-block text-center">
    															<div class="row align-items-end">
    																<div class="col"></div>
    																<div class="col border-0">
    																	<div class="position-relative d-inline-block">
                                        @if($data->user_image!='')
    																		<img class="img-radius img-fluid wid-80" src="{{asset('uploads/'.$data->user_image)}}" alt="User image">
                                        @else
    																		<img class="img-radius img-fluid wid-80" src="{{asset('uploads')}}/avater.png" alt="User image">
                                        @endif
    																		<div class="certificated-badge">
    																			<i class="fas fa-certificate text-c-blue bg-icon"></i>
    																			<i class="fas fa-check front-icon text-white"></i>
    																		</div>
    																	</div>
    																</div>
    																<div class="col text-right pb-3">
    																	<div class="dropdown">
    																		<a href="#" class="drp-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-more-horizontal"></i></a>
    																		<div class="dropdown-menu dropdown-menu-right">
    																			<a class="dropdown-item" href="#">Action</a>
    																			<a class="dropdown-item" href="#">Another action</a>
    																			<a class="dropdown-item" href="#">Something else here</a>
    																		</div>
    																	</div>
    																</div>
    															</div>
    														</div>
    														<div class="text-center">
    															<h6 class="mb-1 mt-3">{{$data->name}}</h6>
    															<p class="mb-3 text-muted">UI/UX Designer</p>
    															<p class="mb-1">Lorem Ipsum is simply dummy text</p>
    															<p class="mb-0">been the industry's standard</p>
    														</div>
    													</div>
    													<div class="card-footer bg-secondary text-white">
    														<div class="row text-center">
    															<div class="col">
    																<h6 class="mb-1 text-white">37</h6>
    																<p class="mb-0">Mails</p>
    															</div>
    															<div class="col">
    																<h6 class="mb-1 text-white">2749</h6>
    																<p class="mb-0">Followers</p>
    															</div>
    															<div class="col">
    																<h6 class="mb-1 text-white">678</h6>
    																<p class="mb-0">Following</p>
    															</div>
    														</div>
    													</div>
    												</div>
    											</div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-8 card_top_titel">
                                                <i class="fab fa-gg-circle"></i> All User Information
                                            </div>
                                            <div class="col-md-4 text-right">
                                                <a href="{{url('admin/user')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i>All User</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="dt-responsive table-responsive">
                                            <table class="table table-striped table-bordered nowrap custom_table">
                                              <tr>
                                                <td>Name</td>
                                                <td class="bold_coln">:</td>
                                                <td>{{$data->name}}</td>
                                              </tr>
                                              <tr>
                                                <td>Email</td>
                                                <td class="bold_coln">:</td>
                                                <td>{{$data->email}}</td>
                                              </tr>
                                              <tr>
                                                <td>Phone</td>
                                                <td class="bold_coln">:</td>
                                                <td>{{$data->phone}}</td>
                                              </tr>
                                              <tr>
                                                <td>User Role</td>
                                                <td class="bold_coln">:</td>
                                                <td>{{$data->Role->role_name ?? '' }}</td>
                                              </tr>
                                              <tr>
                                                <td>Photo</td>
                                                <td class="bold_coln">:</td>
                                                <td>
                                                  @if($data->user_image!='')
                                                    <img class="table_image_35" src="{{asset('uploads/'.$data->user_image)}}" alt="user-photo"/>
                                                  @else
                                                    <img class="table_image_35" src="{{asset('uploads')}}/avater.png" alt="user-photo"/>
                                                  @endif
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Registration</td>
                                                <td class="bold_coln">:</td>
                                                <td>{{$data->created_at->format('Y M d | h:i A')}}</td>
                                              </tr>
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

@endsection
