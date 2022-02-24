@extends('ClientModule.layouts.layout')

@section('content')
    @include('ClientModule._partials.headerMobile')

    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                @include('ClientModule._partials.header')

                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
                        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
                                    <span></span>
                                </button>

                                <div class="d-flex flex-column">
                                    <h2 class="text-white font-weight-bold my-2 mr-5">Môj účet</h2>
                                    <div class="d-flex align-items-center font-weight-bold my-2">
                                        <a href="{{ route('client') }}" class="opacity-75 hover-opacity-100">
                                            <i class="flaticon2-shelter text-white icon-1x"></i>
                                        </a>
                                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                        <a href="{{ route('my.account') }}" class="text-white text-hover-white opacity-75 hover-opacity-100">Môj účet</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column-fluid">
                        <div class="container">
                            <div class="d-flex flex-row">
                                @include('ClientModule.client._partials.aside')

                                <div class="flex-row-fluid ml-lg-8">
                                    <!--begin::Card-->
                                    <div class="card card-custom">
                                        <!--begin::Header-->
                                        <div class="card-header py-3">
                                            <div class="card-title align-items-start flex-column">
                                                <h3 class="card-label font-weight-bolder text-dark">Zmeniť heslo</h3>
                                                <span class="text-muted font-weight-bold font-size-sm mt-1">Zmeňte si heslo k účtu</span>
                                            </div>
                                            <div class="card-toolbar">
                                                <button type="reset" class="btn btn-success mr-2">Save Changes</button>
                                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Form-->
                                        <form class="form">
                                            <div class="card-body">
                                                <!--begin::Alert-->
                                                <div class="alert alert-custom alert-light-danger fade show mb-10" role="alert">
                                                    <div class="alert-icon">
                                                                <span class="svg-icon svg-icon-3x svg-icon-danger">
                                                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Code/Info-circle.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                                                            <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                                                                            <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                    </div>
                                                    <div class="alert-text font-weight-bold">Configure user passwords to expire periodically. Users will need warning that their passwords are going to expire,
                                                        <br />or they might inadvertently get locked out of the system!</div>
                                                    <div class="alert-close">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true">
                                                                        <i class="ki ki-close"></i>
                                                                    </span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--end::Alert-->
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">Aktuálne heslo</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input type="password" class="form-control form-control-lg form-control-solid mb-2" value="" placeholder="Current password" />
                                                        <a href="#" class="text-sm font-weight-bold">Forgot password ?</a>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">New Password</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input type="password" class="form-control form-control-lg form-control-solid" value="" placeholder="New password" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">Verify Password</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input type="password" class="form-control form-control-lg form-control-solid" value="" placeholder="Verify password" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                @include('ClientModule._partials.footer')
            </div>
        </div>
    </div>
    @include('ClientModule.user')
@endsection

