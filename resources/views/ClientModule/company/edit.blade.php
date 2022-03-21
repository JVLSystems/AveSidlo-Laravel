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
                                    <h2 class="text-white font-weight-bold my-2 mr-5">Spoločnosti</h2>
                                    <div class="d-flex align-items-center font-weight-bold my-2">
                                        <a href="{{ route('client') }}" class="opacity-75 hover-opacity-100">
                                            <i class="flaticon2-shelter text-white icon-1x"></i>
                                        </a>

                                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                        <a href="{{ route('spolocnosti.index') }}" class="text-white text-hover-white opacity-75 hover-opacity-100">Spoločnosti</a>

                                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                                        <a href="{{ route('spolocnosti.edit', $company->id) }}" class="text-white text-hover-white opacity-75 hover-opacity-100">Upraviť spoločnosť {{ $company->name }}</a>
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
                                                Upraviť spoločnosť {{ $company->name }}
                                            </h3>
                                        </div>
                                    </div>

                                    <form action="{{ route('spolocnosti.update', $company->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>
                                                    IČO
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="input-group">
                                                    <input type="text" name="ico" class="form-control" v-model="ico" @change="searchICO" placeholder="Zadajte IČO vašej spoločnosti..." value="{{ $company->ico }}" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text line-height-0 py-0">
                                                            <span class="svg-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    @error('ico')
                                                        <div class="invalid-feedback d-inline-block">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>
                                                            DIČ
                                                        </label>
                                                        <input type="text" name="dic" class="form-control" v-model="dic" placeholder="DIČ" value="{{ $company->dic }}" />
                                                        @error('dic')
                                                            <div class="invalid-feedback d-inline-block">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>
                                                            IČDPH
                                                        </label>
                                                        <input type="text" name="icdph" class="form-control" v-model="icdph" placeholder="IČDPH" value="{{ $company->icdph }}" />
                                                        @error('icdph')
                                                            <div class="invalid-feedback d-inline-block">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>
                                                    Názov
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" name="name" class="form-control" v-model="name" placeholder="Názov vašej spoločnosti" value="{{ $company->name }}" />
                                                @error('name')
                                                    <div class="invalid-feedback d-inline-block">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>
                                                            Adresa
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" name="address" class="form-control" v-model="address" placeholder="Adresa vašej spoločnosti" value="{{ $company->street }}" />
                                                        @error('address')
                                                            <div class="invalid-feedback d-inline-block">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>
                                                            Mesto
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" name="city" class="form-control" v-model="city" value="{{ $company->city->name }}" />
                                                        @error('city')
                                                            <div class="invalid-feedback d-inline-block">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>
                                                            Štát
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <select class="form-control selectpicker" data-size="7" data-live-search="true" name="state">
                                                            @foreach ($states as $state)
                                                                <option value="{{ $state->id }}" @selected(old('state', $company->state_id) == $state->id)>{{ $state->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('state')
                                                            <div class="invalid-feedback d-inline-block">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>
                                                            PSČ
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" name="zip" class="form-control" v-model="zip" value="{{ $company->zip->name }}" />
                                                        @error('zip')
                                                            <div class="invalid-feedback d-inline-block">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary mr-2" :class="isSpinning ? 'spinner spinner-white spinner-right' : ''" :disabled="isSpinning">Uložiť</button>
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


    {{-- <script>
        Vue.createApp({
            data: function () {
                return {
                    ico: '',
                    dic: '',
                    icdph: '',
                    name: '',
                    address: '',
                    city: '',
                    zip: '',
                    isSpinning: false,
                    spinningClass: 'spinner spinner-white spinner-right'
                }
            },
            methods: {
                searchICO() {
                    if (this.ico.length > 3) {
                        this.isSpinning = true
                        var link = "/klient/spolocnosti/search-orsr-ico/" + this.ico
                        var _this = this

                        axios.get(link)
                            .then(function (response) {
                                _this.name = response.data.name
                                _this.dic = response.data.tax_id
                                _this.icdph = response.data.vat_id
                                _this.address = response.data.street
                                _this.city = response.data.city
                                _this.zip = response.data.zip

                                _this.isSpinning = false
                            })
                    }
                }
            }
        }).mount('#company')
    </script> --}}
@endsection
