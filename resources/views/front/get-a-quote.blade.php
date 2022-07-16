@extends('layouts.wizard.app')
@push('extended-css')
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/ext-toastr.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <div class="container-fluid full-height">
        <div class="row row-height">
            <div class="col-lg-6 content-left">
                <div class="content-left-wrapper">
                    <a href="{{ route('front.home') }}" id="logo"><img
                            src="{{ asset('assets/img/favicon-light.png') }}" alt="" width="49"
                            height="35"></a>
                    <div id="social">
                        <ul>
                            <li><a href="#0"><i class="icon-facebook"></i></a></li>
                            <li><a href="#0"><i class="icon-twitter"></i></a></li>
                            <li><a href="#0"><i class="icon-google"></i></a></li>
                            <li><a href="#0"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
                    <div>
                        <figure><img src="{{ asset('wizard-assets/img/10.png') }}" alt=""
                                style="height:300px !important;width:300px !important" class="img-fluid"></figure>
                        <h2>Get you quote now</h2>
                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu,
                            facete detracto patrioque an per, lucilius pertinacia eu vel. Adhuc invidunt duo ex. Eu
                            tantas dolorum ullamcorper qui.</p>
                        <a href="{{ route('front.home') }}" class="btn_1 rounded">Go Home</a>
                        <a href="#start" class="btn_1 rounded mobile_btn">Start Now!</a>
                    </div>
                    <div class="copy">© {{ date('Y') }} {{ config('app.name') }}</div>
                </div>
                <!-- /content-left-wrapper -->
            </div>
            <!-- /content-left -->

            <div class="col-lg-6 content-right" id="start">
                <div id="wizard_container">
                    <div id="top-wizard">
                        <div id="progressbar"></div>
                    </div>
                    <!-- Session Status -->
                    <x-auth-session-status class="mt-4 mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <!-- /top-wizard -->
                    <form id="wrapped" method="POST">
                        @csrf
                        <input id="website" name="website" type="text" value="">
                        <!-- Leave for security protection, read docs for details -->
                        <div id="middle-wizard">
                            <div class="step">
                                <h3 class="main_question"><strong>1/5</strong>Please fill with your details</h3>
                                <div class="form-group">
                                    <input type="text" name="postal_code" class="form-control required"
                                        placeholder="PX-1000">
                                </div>
                                <!-- /row -->
                                <div class="form-group terms">
                                    <label class="container_check">Please accept our <a href="#" data-toggle="modal"
                                            data-target="#terms-txt">Terms and conditions</a>
                                        <input type="checkbox" name="terms" value="Yes" class="required">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- /step-->
                            <div class="step">
                                <h3 class="main_question"><strong>2/5</strong></h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Do you receive benefits ?</p>
                                        <div class="form-group">
                                            <label class="container_radio version_2">Yes
                                                <input type="radio" name="benefits" value="Yes" class="required"
                                                    onchange="getVals(this, 'benefits');">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">No
                                                <input type="radio" name="benefits" value="No" class="required"
                                                    onchange="getVals(this, 'benefits');">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Do you own your home?</p>
                                        <div class="form-group">
                                            <label class="container_radio version_2">Yes
                                                <input type="radio" name="own_home" value="Yes" class="required"
                                                    onchange="getVals(this, 'own_home');">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">No
                                                <input type="radio" name="own_home" value="No" class="required"
                                                    onchange="getVals(this, 'own_home');">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Was your boiler fitted before 2005?</p>
                                        <div class="form-group">
                                            <label class="container_radio version_2">Yes
                                                <input type="radio" name="before_2005" value="Yes" class="required"
                                                    onchange="getVals(this, 'before_2005');">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">No
                                                <input type="radio" name="before_2005" value="No" class="required"
                                                    onchange="getVals(this, 'before_2005');">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Do you have radiators?</p>
                                        <div class="form-group">
                                            <label class="container_radio version_2">Yes
                                                <input type="radio" name="radiators" value="Yes" class="required"
                                                    onchange="getVals(this, 'radiators');">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">No
                                                <input type="radio" name="radiators" value="No" class="required"
                                                    onchange="getVals(this, 'radiators');">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /step-->
                            <div class="step">
                                <h3 class="main_question"><strong>3/5</strong></h3>
                                <div class="col-md-12">
                                    <p>How is your home heated ?</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="container_radio version_2">Electric
                                                    <input type="radio" name="heated_type" value="Electric"
                                                        class="required" onchange="getVals(this, 'heated_type');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_radio version_2">Gas
                                                    <input type="radio" name="heated_type" value="Gas"
                                                        class="required" onchange="getVals(this, 'heated_type');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="container_radio version_2">Other
                                                    <input type="radio" name="heated_type" value="Other"
                                                        class="required" onchange="getVals(this, 'heated_type');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_radio version_2">I don't Know
                                                    <input type="radio" name="heated_type" value="I don't Know"
                                                        class="required" onchange="getVals(this, 'heated_type');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p>No of Bedrooms ?</p>
                                        <input type="number" name="number_of_bedrooms" class="form-control"
                                            placeholder="e.g 4">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p>Property Type</p>
                                        <div class="styled-select clearfix">
                                            <select class="wide required" name="property_type">
                                                <option value="">Select Property Type</option>
                                                <option value="Flat">Flat</option>
                                                <option value="Bungalow">Bungalow</option>
                                                <option value="Terraced">Terraced</option>
                                                <option value="End Terrace">End Terrace</option>
                                                <option value="Semi-Detached">Semi-Detached</option>
                                                <option value="Detached">Detached</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <h3 class="main_question"><strong>4/5</strong>Would you also like insulation ?</h3>
                                <div class="form-group">
                                    <label class="container_check version_2">Loft Insulation
                                        <input type="checkbox" name="insulation[]" value="Loft Insulation"
                                            class="required" onchange="getVals(this, 'insulation');">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="container_check version_2">Room in Roof Insulation
                                        <input type="checkbox" name="insulation[]" value="Room in Roof Insulation"
                                            class="required" onchange="getVals(this, 'insulation');">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="container_check version_2">Internal Wall Insulation
                                        <input type="checkbox" name="insulation[]" value="Internal Wall Insulation"
                                            class="required" onchange="getVals(this, 'insulation');">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="container_check version_2">Cavity Wall Insulation
                                        <input type="checkbox" name="insulation[]" value="Cavity Wall Insulation"
                                            class="required" onchange="getVals(this, 'insulation');">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="container_check version_2">Underfloor Insulation
                                        <input type="checkbox" name="insulation[]" value="Underfloor Insulation"
                                            class="required" onchange="getVals(this, 'insulation');">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- /step-->
                            <div class="submit step">
                                <h3 class="main_question"><strong>5/5</strong>Personal Details</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control required"
                                                placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control required"
                                                placeholder="Your Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="phone_number" class="form-control required"
                                                placeholder="+44123456789">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /step-->
                        </div>
                        <!-- /middle-wizard -->
                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward">Prev</button>
                            <button type="button" name="forward" class="forward">Next</button>
                            <button type="submit" name="process" class="submit">Submit</button>
                        </div>
                        <!-- /bottom-wizard -->
                    </form>
                </div>
                <!-- /Wizard container -->
            </div>
            <!-- /content-right-->
        </div>
        <!-- /row-->
    </div>
@endsection
@push('extended-js')
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    @if (Session::has('status'))
        <script>
            $(function() {
                toastr['success'](
                    "{{ Session::get('status') }}",
                    "Success Notification", {
                        closeButton: true,
                        tapToDismiss: false,
                        progressBar: true,
                    }
                );
            });
        </script>
    @elseif(Session::has('error'))
        <script>
            $(function() {
                toastr['error'](
                    "{{ Session::get('error') }}",
                    "Error Notification", {
                        closeButton: true,
                        tapToDismiss: false,
                        progressBar: true,
                    }
                );
            });
        </script>
    @endif
@endpush
