@extends('back_end.layouts.app')

@section('title','')

@section('content')
    <div class="container">
        <div class="row">

            <!-- validation form -->
            <div class="col-lg-8">
                <div class="card">
                    <h5 class="card-header">New Project Addition Form</h5>
                    <div class="card-body">
                        <form action="" class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row mb-2">
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                    <label for="validationCustom01">Project name</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                           placeholder="First name" value="" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                    <label for="validationCustom01">Project ID</label>
                                    <input type="text" class="form-control" id="validationCustom01"
                                           placeholder="First name" value="" required readonly>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom03">Project Location</label>
                                    <input type="text" class="form-control" id="validationCustom03"
                                           placeholder="320/1, Freedom Fighter road"
                                           required>
                                    <div class="invalid-feedback">
                                        Please provide a valid address.
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom03">Project Estimated Budget</label>
                                    <input type="number" class="form-control" id="validationCustom03"
                                           placeholder="30,000,00.00"
                                           required>
                                    <div class="invalid-feedback">
                                        Please provide a valid address.
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom03">Project Status</label>
                                    <select name="" id="validationCustom03">
                                        <option value="">xxx</option>
                                        <option value="">zzz</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please choose a status.
                                    </div>
                                </div>

                                <div class="tab-regular">
                                    <ul class="nav nav-tabs " id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                               role="tab" aria-controls="home" aria-selected="true">Tab Title #1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                               role="tab" aria-controls="profile" aria-selected="false">Tab Title #2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                               role="tab" aria-controls="contact" aria-selected="false">Tab Title #3</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                             aria-labelledby="home-tab">
                                            <p class="lead"> All the Lorem Ipsum generators on the Internet tend to
                                                repeat predefined chunks as necessary, making this the first true
                                                generator on the Internet. </p>
                                            <p>Phasellus non ante gravida, ultricies neque a, fermentum leo. Etiam
                                                ornare enim arcu, at venenatis odio mollis quis. Mauris fermentum
                                                elementum ligula in efficitur. Aliquam id congue lorem. Proin
                                                consectetur feugiasse platea dictumst. Pellentesque sed justo aliquet,
                                                posuere sem nec, elementum ante.</p>
                                            <a href="#" class="btn btn-secondary">Go somewhere</a>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                             aria-labelledby="profile-tab">
                                            <h3>Tab Content Heading</h3>
                                            <p>Nullam et tellus ac ligula condimentum sodales. Aenean tincidunt viverra
                                                suscipit. Maecenas id molestie est, a commodo nisi. Quisque fringilla
                                                turpis nec elit eleifend vestibulum. Aliquam sed purus in odio
                                                ullamcorper congue consectetur in neque. Aenean sem ex, tempor et auctor
                                                sed, congue id neque. </p>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <h3>Tab Heading Content </h3>
                                            <p>Vivamus pellentesque vestibulum lectus vitae auctor. Maecenas eu sodales
                                                arcu. Fusce lobortis, libero ac cursus feugiat, nibh ex ultricies
                                                tortor, id dictum massa nisl ac nisi. Fusce a eros pellentesque,
                                                ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a
                                                commodo mi tempus eu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom03">Project Description</label>
                                    <textarea class="form-control" id="validationCustom03"
                                              placeholder="Write a description about your project" required></textarea>
                                    <div class="invalid-feedback">
                                        Give some hint about your project.
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                                   required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end validation form -->
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
