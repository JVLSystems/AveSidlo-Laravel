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
                                    <form class="form" action="{{ route('klient.update', auth()->id() ) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="card card-custom card-stretch">
                                            <div class="card-header py-3">
                                                <div class="card-title align-items-start flex-column">
                                                    <h3 class="card-label font-weight-bolder text-dark">Osobné informácie</h3>
                                                    <span class="text-muted font-weight-bold font-size-sm mt-1">Aktualizujte svoje osobné informácie</span>
                                                </div>
                                                <div class="card-toolbar">
                                                    <button class="btn btn-success mr-2">Uložiť zmeny</button>
                                                    <button type="reset" class="btn btn-secondary">Zrušiť</button>
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Meno a priezvisko</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <input class="form-control form-control-lg form-control-solid" name="name" value="{{ auth()->user()->name }}" />
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <label class="col-xl-3"></label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <h5 class="font-weight-bold mt-10 mb-6">Kontaktné informácie</h5>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Telefón</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="la la-phone"></i>
                                                                </span>
                                                            </div>

                                                            <input name="phone" class="form-control form-control-lg form-control-solid" placeholder="Telefón" value="{{ auth()->user()->phone }}"  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">E-mail</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="la la-at"></i>
                                                                </span>
                                                            </div>

                                                            <input name="email" class="form-control form-control-lg form-control-solid" value="{{ auth()->user()->email }}" disabled readonly />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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

