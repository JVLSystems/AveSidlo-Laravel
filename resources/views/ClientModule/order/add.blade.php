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

                                    <form action="{{ route('objednavky.store') }}" method="POST">
                                        @csrf

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>
                                                            Služba
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <select class="form-control selectpicker" data-size="7" v-model="service" @change="changeService" name="service">
                                                            @foreach ($services as $service)
                                                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('service')
                                                            <div class="invalid-feedback d-inline-block">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
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
                                                                <select class="form-control selectpicker" data-size="7" name="company">
                                                                    @foreach ($companies as $company)
                                                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('company')
                                                                    <div class="invalid-feedback d-inline-block">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
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
                                                                    @error('period')
                                                                        <div class="invalid-feedback d-inline-block">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </transition>

                                                    <transition name="fade">
                                                        <div v-if="isHiddenCompany">
                                                            <div class="form-gtoup">
                                                                <label>
                                                                    Zvoľte si obchodné meno vašej novej firmy (SRO)
                                                                    <span class="text-danger">*</span>
                                                                </label>
                                                                <div class="input-group">
                                                                    <input name="companyNam" class="form-control" placeholder="Napíšte obchodné meno novej spoločnosti" />
                                                                    <div class="input-group-append">
                                                                        <select class="form-control selectpicker">
                                                                            <option value="1">s.r.o.</option>
                                                                            <option value="2">, s.r.o.</option>
                                                                            <option value="3">, spol. s r.o.</option>
                                                                        </select>
                                                                        <button class="btn btn-primary">Overiť</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </transition>
                                                </div>

                                                <div class="col-md 12">
                                                    <transition name="fade">
                                                        <div v-if="isHiddenCompany">
                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            Ulica
                                                                        </label>
                                                                        <input name="street" class="form-control" placeholder="Ulica" value="{{ old('street') }}" />
                                                                        @error('street')
                                                                            <div class="invalid-feedback d-inline-block">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            Súpisné číslo
                                                                        </label>
                                                                        <input name="number" class="form-control" placeholder="Súpisné číslo" value="{{ old('number') }}" />
                                                                        @error('number')
                                                                            <div class="invalid-feedback d-inline-block">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            Orientačné číslo
                                                                        </label>
                                                                        <input name="streetNumm" class="form-control" placeholder="Orientačné číslo" value="{{ old('streetNumm') }}" />
                                                                        @error('streetNumm')
                                                                            <div class="invalid-feedback d-inline-block">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            Obec
                                                                        </label>
                                                                        <input name="city" class="form-control" placeholder="Obec" value="{{ old('city') }}" />
                                                                        @error('city')
                                                                            <div class="invalid-feedback d-inline-block">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            PSČ
                                                                        </label>
                                                                        <input name="zip" class="form-control" placeholder="PSČ" value="{{ old('zip') }}" />
                                                                        @error('zip')
                                                                            <div class="invalid-feedback d-inline-block">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            Druh priestoru
                                                                        </label>
                                                                        <select name="type_of_space" class="form-control selectpicker" placeholder="Druh priestoru">
                                                                            <option value="">Nebytový priestor</option>
                                                                            <option value="">Byt v bytovom dome</option>
                                                                            <option value="">Iná budova</option>
                                                                            <option value="">Rodinný dom</option>
                                                                            <option value="">Samostatne stojaca garáž</option>
                                                                        </select>
                                                                        @error('type_of_space')
                                                                            <div class="invalid-feedback d-inline-block">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            Vlastník priestoru
                                                                        </label>
                                                                        <input name="space_owner" class="form-control" placeholder="Vlastník priestoru" value="{{ old('space_owner') }}" />
                                                                        @error('space_owner')
                                                                            <div class="invalid-feedback d-inline-block">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
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
                                                @error('note')
                                                    <div class="invalid-feedback d-inline-block">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <div class="checkbox-inline">
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="accept" />
                                                        <span></span>Súhlasim s obchodnými podmienkami spoločnosti
                                                    </label>
                                                    @error('accept')
                                                        <div class="invalid-feedback d-inline-block">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button class="btn btn-primary mr-2" :class="isSpinning ? 'spinner spinner-white spinner-right' : ''" :disabled="isSpinning">Vytvoriť objednávku s povinnosťou platby</button>
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
        Vue.createApp({
            data: function () {
                return {
                    service: '',
                    isHiddenCompany: true,
                    isHiddenPeriod: true,
                    isSpinning: false,
                    spinningClass: 'spinner spinner-white spinner-right'
                }
            },
            methods: {
                changeService() {
                    this.isSpinning = true
                    this.isHiddenCompany = (this.service == 1) ? true : false
                    this.isHiddenPeriod = (this.service == 2) ? false : true
                    initSelectpicker()

                    this.isSpinning = false
                }
            }
        }).mount('#company')
    </script>
@endsection
