@extends('back_end.layouts.app')

@section('title','Add New Project')

@section('content')
    <div class="container reset-default-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <h5 class="card-header">New Project Addition Form</h5>
                    <div class="card-body">
                        <form action="" class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
                            @csrf
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    @if($errors->count() == 1)
                                        {{ $errors->first() }}
                                    @else
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                            @endif

                            @if(session()->has('message'))
                                <div class="alert alert-{{ session('type') }}">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <div class="form-row mb-2">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <label for="validationCustom0001">Project name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="project_name" class="form-control" id="validationCustom0001"
                                           placeholder="Duplex Chottogram" value="" required>
                                    <div class="invalid-feedback">
                                        Please choose a status.
                                    </div>
                                </div>
{{--                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">--}}
{{--                                    <label for="validationCustom001">Project ID</label>--}}
{{--                                    <input type="text" name="project_id" class="form-control" id="validationCustom001"--}}
{{--                                           placeholder="D15ZA7-CC412HK-GHY55R" value="gfddfgdfg457764" required readonly>--}}
{{--                                </div>--}}
                            </div>
                            <div class="form-row">
                                {{-- Project Name & ID Section --}}
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom03">Project Location <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="project_location" class="form-control" id="validationCustom03"
                                           placeholder="320/1, Freedom Fighter road"
                                           required>
                                    <div class="invalid-feedback">
                                        Please provide a valid address.
                                    </div>
                                </div>

                                {{-- Project Location Section --}}
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom03">Project Estimated Budget <span
                                            class="text-danger">*</span></label>
                                    <input type="number" name="project_budget" class="form-control" id="validationCustom03"
                                           placeholder="30,000,00.00"
                                           required>
                                    <div class="invalid-feedback">
                                        Please provide a valid address.
                                    </div>
                                </div>

                                {{-- Project Status & Budget Section --}}
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom03">Project Status <span
                                            class="text-danger">*</span></label>
                                    <select name="project_status" class="form-control" id="validationCustom03">
                                        <option value="active" class="text-primary">Active</option>
                                        <option value="hold" class="text-warning">Hold</option>
                                        <option value="completed" class="text-success">Completed</option>
                                        <option value="canceled" class="text-danger text-bold"
                                                onclick="alert('Greeting,Are you sure?')">Canceled
                                        </option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please choose a status.
                                    </div>
                                </div>

                                {{-- Project Client Section --}}
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                    <div class="custom-control custom-radio custom-control-inline pl-0">
                                        <label>Project Client <span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <input type="hidden" name="aHiddenRes" value="">

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="client_type" value="old"
                                               class="custom-control-input"
                                               required
                                               checked
                                        >
                                        <label class="custom-control-label" for="customRadioInline1">Old</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="client_type" value="new"
                                               class="custom-control-input"
                                               required>
                                        <label class="custom-control-label" for="customRadioInline2">New</label>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please choose a status.
                                    </div>
                                </div>

                                {{-- Project Client Section --}}
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                    <div class="tab-content" style="border: 1px solid #d6d6d6; padding: 12px;">
                                        <div class="tab-pane fade" id="oldTab" role="tabpanel"
                                             aria-labelledby="old-tab">
                                            <div id="ifOld" class="form-group">
                                                <label for="clientId" class="col-form-label">Client Name: <span
                                                        class="text-danger">*</span></label>
                                                <select name="client_id" id="clientId" class="form-control"
                                                        aria-describedby="clientHelp">
                                                    <option selected>----- Select Client -----</option>
                                                    @foreach($clients as $index=> $client)
                                                        <option value="{{ $client->id }}">{{ $client->first_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="newTab" role="tabpanel"
                                             aria-labelledby="new-tab">
                                            <div class="form-group">
                                                <label for="clientName" class="col-form-label">Client First Name: <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                       class="form-control @error('first_name') is-invalid @enderror"
                                                       id="clientName" name="first_name"
                                                       value="">
                                                @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong></strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="clientName" class="col-form-label">Client Last Name: <span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                       class="form-control @error('last_name') is-invalid @enderror"
                                                       id="clientName" name="last_name"
                                                       value="">
                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong></strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="clientMobile" class="col-form-label">Client Mobile: <span
                                                        class="text-danger">*</span></label>
                                                <input type="number"
                                                       class="form-control @error('client_number') is-invalid @enderror"
                                                       id="clientMobile" name="mobile"
                                                       value="{{ old('client_number') }}">
                                                @error('client_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="clientEmail" class="col-form-label">Client Email:</label>
                                                <input type="text"
                                                       class="form-control @error('client_email') is-invalid @enderror"
                                                       id="clientEmail" name="email"
                                                       value="{{ old('client_email') }}">
                                                @error('client_email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="address-text" class="col-form-label">Client Address:</label>
                                                <textarea class="form-control" id="address-text"
                                                          name="address">{!! old('client_address') !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Project Description Section --}}
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                                    <label for="validationCustom03">Project Description <span
                                            class="text-muted">(Optional)</span></label>
                                    <textarea class="form-control" id="validationCustom03"
                                              placeholder="Write a description about your project"
                                              name="project_des" required></textarea>
                                    <div class="invalid-feedback">
                                        Give some hint about your project.
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button class="btn btn-success mr-2" type="submit">Submit Form</button>
                                    <button class="btn btn-info" type="submit">Preview Form</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">Upcoming</div>
                    <div class="card-body"></div>
                </div>
            </div>
        </div>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict';
                window.addEventListener('load', function () {
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            let cTypeH = $('input[type=hidden][name=aHiddenRes]');
            if (cTypeH.val() === 'old' || (typeof cTypeH.val() === 'string' && cTypeH.val().length < 3)) {
                $('#newTab').removeClass('show active');
                $('#oldTab').addClass('show active');
            } else if (cTypeH.val() === 'new') {
                $('#newTab').addClass('show active');
                $('#oldTab').removeClass('show active');
            }

            let cType = $('input[type=radio][name=client_type]');
            cType.change(function () {
                if (this.value === 'old') {
                    cTypeH.val('old');
                    $('#newTab').removeClass('show active');
                    $('#oldTab').addClass('show active');
                } else if (this.value === 'new') {
                    cTypeH.val('new');
                    $('#newTab').addClass('show active');
                    $('#oldTab').removeClass('show active');
                }
            });
        });
    </script>
@endsection
