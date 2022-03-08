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
                                <div class="d-flex flex-column">
                                    <h2 class="text-white font-weight-bold my-2 mr-5">Objednávky</h2>
                                    <div class="d-flex align-items-center font-weight-bold my-2">
                                        <a href="{{ route('client') }}" class="opacity-75 hover-opacity-100">
                                            <i class="flaticon2-shelter text-white icon-1x"></i>
                                        </a>
                                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                        <a href="{{ route('objednavky.index') }}" class="text-white text-hover-white opacity-75 hover-opacity-100">Objednávky</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('objednavky.create') }}" class="btn btn-white font-weight-bold py-3 px-6 mr-2" data-toggle="tooltip" title="Vytvorte si novú objednávku" data-placement="top">Nová objednávka</a>
                            </div>
                        </div>
                    </div>

                        <div class="d-flex flex-column-fluid">
                            <div class="container">
                                <div class="card card-custom gutter-b">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-label">
                                                Objednávky
                                                <small>vaše objednávky, zoznam všetkych objednávok, ktoré ste si u nás vytvorili</small>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @livewire('orders-table')
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>

                <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

                @include('ClientModule._partials.footer')
            </div>
        </div>
    </div>
    @include('ClientModule.user')
@endsection
