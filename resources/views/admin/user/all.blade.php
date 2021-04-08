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
                                                <li class="breadcrumb-item"><a href="index.html"><i
                                                            class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">All User</a></li>
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
                                                    <i class="fab fa-gg-circle"></i> All User Information
                                                </div>
                                                <div class="col-md-4 text-right">
                                                    <a href="#" class="btn btn-primary btn-sm"><i
                                                            class="fa fa-plus-circle"></i>Add User</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="dt-responsive table-responsive">
                                                <table id="order-table" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>User Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>User Role</th>
                                                            <th>Photo</th>
                                                            <th>Manage</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Name</td>
                                                            <td>Email</td>
                                                            <td>Phone</td>
                                                            <td>User Role</td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="text-success pb-01"><i
                                                                        class="fas fa-plus-square fa-lg"></i></a>
                                                                <a href="#" class="text-info pb-01"><i
                                                                        class="fas fa-pen fa-lg"></i></a>
                                                                <a href="#" class="text-danger pb-01"><i
                                                                        class="fas fa-trash-alt fa-lg"></i></a>
                                                            </td>
                                                        </tr>
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

@endsection
