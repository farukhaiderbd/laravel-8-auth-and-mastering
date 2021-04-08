@extends('layouts.admin')
@section('content')
@push('title',  $title. ($data ? ' Edit' : ' Create'))
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
                                            <li class="breadcrumb-item"><a href="">All User</a></li>
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
                                  <form action="{{ url($page_url) }}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="{{getValueData('id', $data)}}">
                                      @csrf
                                      <div class="card-header">
                                        <div class="row">
                                          <div class="col-md-8 card_top_titel">
                                            <i class="fab fa-gg-circle"></i> All User Information
                                          </div>
                                          <div class="col-md-4 text-right">
                                            <a href="{{ url($page_url) }}" class="btn btn-primary btn-sm"><i class="fa fa-th"></i>All User</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-body">
                                        <div class="form-group row form_group{{$errors->has('name') ? ' has-error':''}}">
                                          <label class="col-sm-3 col-form-label">Name:<span class="req_star">*</span></label>
                                          <div class="col-sm-7">
                                            <input type="text" class="form-control" onblur="formValidation('name')" name="name" value="{{getValueData('name',$data)}}">
                                            @if ($errors->has('name'))
                                              <span class="error">{{ $errors->first('name') }}</span>
                                            @endif
                                          </div>
                                        </div>
                                        <div class="form-group row form_group{{$errors->has('email') ? ' has-error':''}}">
                                          <label class="col-sm-3 col-form-label">Email:<span class="req_star">*</span></label>
                                          <div class="col-sm-7">
                                            <input type="text" class="form-control" onblur="formValidation('email')" name="email" value="{{getValueData('email',$data)}}">
                                            @if ($errors->has('email'))
                                              <span class="error">{{ $errors->first('email') }}</span>
                                            @endif
                                          </div>
                                        </div>
                                        <div class="form-group row form_group{{$errors->has('phone') ? ' has-error':''}}">
                                          <label class="col-sm-3 col-form-label">Phone:<span class="req_star">*</span></label>
                                          <div class="col-sm-7">
                                            <input type="text" class="form-control"  name="phone" value="{{getValueData('phone',$data)}}">
                                            @if ($errors->has('phone'))
                                              <span class="error">{{ $errors->first('phone') }}</span>
                                            @endif
                                          </div>
                                        </div>
                                        <div class="form-group row form_group{{$errors->has('password') ? ' has-error':''}}">
                                          <label class="col-sm-3 col-form-label">Password:<span class="req_star">*</span></label>
                                          <div class="col-sm-7">
                                            <input type="password" class="form-control" name="password">
                                            @if ($errors->has('password'))
                                              <span class="error">{{ $errors->first('password') }}</span>
                                            @endif
                                          </div>
                                        </div>
                                        <div class="form-group row form_group">
                                          <label class="col-sm-3 col-form-label">Confirm-Password:<span class="req_star">*</span></label>
                                          <div class="col-sm-7">
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                          </div>
                                        </div>
                                        <div class="form-group row form_group{{$errors->has('role') ? ' has-error':''}}">
                                          <label class="col-sm-3 col-form-label">User-Role:<span class="req_star">*</span></label>
                                          <div class="col-sm-4">
                                            {{-- <select class="custom-select" name="role">
                                              @php
                                                $User_Role=App\Models\UserRole::where('role_status',1)->orderBy('role_id','ASC')->get();
                                              @endphp
                                                   <option value="{{old('role')}}">Select User Role</option>
                                                   @foreach($User_Role as $data)
                                                   <option value="{{$data->role_id}}">{{$data->role_name}}</option>
                                                   @endforeach
                                               </select> --}}
                                            @if ($errors->has('role'))
                                              <span class="error">{{ $errors->first('role') }}</span>
                                            @endif
                                          </div>
                                        </div>
                                        <div class="form-group row form_group{{$errors->has('photo') ? ' has-error':''}}">
                                          <label class="col-sm-3 col-form-label">Profile Image:<span class="req_star">*</span></label>
                                          <div class="col-sm-4">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file btnu_browse">
                                                        Browse… <input type="file" name="image" id="imgInp">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img id='img-upload'/>
                                            @if ($errors->has('photo'))
                                              <span class="error" style="">{{ $errors->first('photo') }}</span>
                                            @endif
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-sm btn-success">REGISTRATION</button>
                                      </div>
                                    </form>
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
