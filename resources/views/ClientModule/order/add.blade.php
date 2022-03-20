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
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>
                                                            Služba
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <select class="form-control" @change="changeService" name="service">
                                                            <option value="">Vyberte službu...</option>
                                                            @foreach ($services as $service)
                                                                <option value="{{ $service->id }}" @selected(old('service') == $service->id)>{{ $service->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('service')
                                                            <div class="invalid-feedback d-inline-block">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>



                                            <div v-if="form == 'create_company_form'">
                                               @include('ClientModule.order._forms.create_company_form')
                                            </div>

                                            <div v-if="form == 'create_virtual_form'">
                                               @include('ClientModule.order._forms.create_virtual_form')
                                            </div>

                                            <div v-if="form == 'create_liquidation_form'">
                                               @include('ClientModule.order._forms.create_liquidation_form')
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
                    form: '{{ $oldService }}',
                    otherPersons: false,
                    otherMethod: false,
                    isSpinning: false,
                    seat: '{{ $oldSeatType }}',
                    spinningClass: 'spinner spinner-white spinner-right',
                }
            },
            methods: {
                changeService(event) {
                    var link = "/klient/objednavky/get-service-data/" + event.target.value

                    axios.get(link)
                        .then(response => {
                            this.form = response.data.form_resource
                        })

                },
                changeSeat(event) {
                    event.target.value == 2
                        ? this.seat = true
                        : this.seat = false
                },
                changeOtherPersons(event) {
                    event.target.value == 2
                        ? this.otherPersons = true
                        : this.otherPersons = false
                },
                changeOtherMethod(event) {
                    event.target.value == 2
                        ? this.otherMethod = true
                        : this.otherMethod = false
                },

            }
        }).mount('#company')
    </script>
@endsection
