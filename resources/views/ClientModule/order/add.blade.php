@extends('ClientModule.layouts.layout')

@section('content')

    @include('ClientModule._partials.headerMobile')

    <div class="d-flex flex-column flex-root" id="company">
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
                                        <a href="H{{ route('client') }}" class="opacity-75 hover-opacity-100">
                                            <i class="flaticon2-shelter text-white icon-1x"></i>
                                        </a>

                                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                        <a href="{{ route('objednavky.index') }}" class="text-white text-hover-white opacity-75 hover-opacity-100">Objednávky</a>

                                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                        <a href="{{ route('objednavky.create') }}" class="text-white text-hover-white opacity-75 hover-opacity-100">Nová objednávka</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="d-flex flex-column-fluid">
                            <div class="container">
                                <div class="card card-custom gutter-b">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h3 class="card-label">
                                                Vytvoriť novú objednávku
                                            </h3>
                                        </div>
                                    </div>

                                    <form name="orderForm">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>
                                                            Služba
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <select class="form-control selectpicker" data-size="7" data-live-search="true" v-model="service" @change="changeService" name="services">
                                                            @foreach ($services as $service)
                                                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <transition name="fade">
                                                        <div v-if="!isHiddenCompany">
                                                            <div class="form-group">
                                                                <label>
                                                                    Vaša spoločnosť
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control selectpicker" data-size="7" data-live-search="true" name="companies"></select>
                                                            </div>

                                                            <div class="form-group" v-if="!isHiddenPeriod">
                                                                <label>
                                                                    Obdobie
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <div class="input-group">
                                                                    <input name="period" class="form-control" placeholder="Zadajte počet mesiac" />
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text line-height-0 py-0">
                                                                            m
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </transition>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>
                                                    Vaša správa
                                                </label>
                                                <textarea name="note" class="form-control" placeholder="Sem napíšte vaše poznámky"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <div class="checkbox-inline">
                                                    <label class="checkbox">
                                                        <input name="accept" />
                                                        <span></span>Súhlasim s obchodnými podmienkami spoločnosti
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button name="submit" class="btn btn-primary mr-2">Vytvoriť objednávku s povinnosťou platby</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                </div>

                @include('ClientModule._partials.footer')
            </div>
        </div>
    </div>
    @include('ClientModule.user')

    <script>
        new Vue({
            el: '#company',
            data: {
                service: '',
                isHiddenCompany: true,
                isHiddenPeriod: true,
                spinningClass: 'spinner spinner-white spinner-right'
            },
            methods: {
                changeService() {
                    this.isHiddenCompany = (this.service == 1) ? true : false
                    this.isHiddenPeriod = (this.service == 2) ? false : true
                    initSelectpicker()
                }
            }
        })
    </script>
@endsection
