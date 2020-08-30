@extends('back_end.layouts.app')

@section('title','- Details')

@section('content')
    <div class="container reset-default-container">
        <div class="row justify-content-around">
            <div class="col-lg-4">
                <div class="card left-card-reset">
                    <div class="card-body">
                        <div class="img-container">
                            <img class="project-avatar-md"
                                 src="{{ asset('images/projects.jpg') }}" alt=""/>
                        </div>
                        <div class="des-container">
                            <span class="des-container-item">Project: Dr. Alpha Khan</span>
                            <span class="des-container-item">Address: Dr. Alpha Khan Road, Bangladesh-1000.</span>
                        </div>
                        <div class="project-actions">
                            <a href="#" class="bg-primary"><i class="mdi mdi-account-edit"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-reset prod-p-card bg-warning">
                    <div class="card-body reset-card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <span class="parent-cls">
                                    <i class="mdi mdi-briefcase fatIcon"></i> <span class="child-cls">Estimated Budget</span>
                                </span>
                                <span class="amount"> ৳ 4512856541.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-reset prod-p-card bg-primary">
                    <div class="card-body reset-card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <span class="parent-cls">
                                    <i class="mdi mdi-briefcase-check fatIcon"></i> <span class="child-cls">Received Payments</span>
                                </span>
                                <span class="amount"> ৳ 4512856541.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-reset prod-p-card bg-danger">
                    <div class="card-body reset-card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <span class="parent-cls">
                                    <i class="mdi mdi-briefcase-upload fatIcon"></i> <span class="child-cls">Total Expanses</span>
                                </span>
                                <span class="amount"> ৳ 4512856541.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
