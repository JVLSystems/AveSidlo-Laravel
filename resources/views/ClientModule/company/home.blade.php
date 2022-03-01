@extends('ClientModule.layouts.layout')

@section('content')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                @include('ClientModule._partials.header')

                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
                        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <div class="d-flex flex-column">
                                    <h2 class="text-white font-weight-bold my-2 mr-5">Spoločnosti</h2>
                                    <div class="d-flex align-items-center font-weight-bold my-2">
                                        <a href="{{ route('client') }}" class="opacity-75 hover-opacity-100">
                                            <i class="flaticon2-shelter text-white icon-1x"></i>
                                        </a>
                                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                        <a href="{{ route('spolocnosti.index') }}" class="text-white text-hover-white opacity-75 hover-opacity-100">Spoločnosti</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="{{ route('spolocnosti.create') }}" class="btn btn-white font-weight-bold py-3 px-6 mr-2" data-toggle="tooltip" title="Pridajte si ďalšiu spoločnosť do nášho sídla" data-placement="top">Nová spoločnosť</a>
                            </div>
                        </div>
                    </div>

                        <div class="d-flex flex-column-fluid">
                            <div class="container">
                                <div class="card card-custom gutter-b">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-label">
                                                Spoločnosti
                                                <small>vaše spoločnosti, ktoré sídlia v našej nehnuteľnosti</small>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @livewire('company-table')
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
