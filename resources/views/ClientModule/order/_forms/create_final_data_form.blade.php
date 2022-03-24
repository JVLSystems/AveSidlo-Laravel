<div class="row">

    <div class="col-md-12">
        <div class="row">

            <div class="col-md-12 text-center">
                <div class="card-title">
                    <h3>
                        Záverečné údaje pred dokončením
                    </h3>
                </div>
                <div class="card-text">
                    <p>
                        Súčasne s registráciou podnikateľa automaticky prebehne aj registrácia pre daň z príjmu a zaslanie DIČ (daňového identifikačného čísla). Poznámka: Súčasťou registrácie nie je registrácia pre DPH (daň z pridanej hodnoty).
                    </p>
                </div>
            </div>

            <div class="col-md-12 my-5">
                <div class="card-title">
                    <h3>
                        Fakturačné údaje
                    </h3>
                </div>

                <div class="form-group">
                    <label>
                        Faktúra za služby portálu bude vystavená na
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control" name="invoice" @change="changeInvoice">
                        {{-- tu bude "vytvorena firma", spoloncici --}}
                        <option value>Vyberte...</option>
                        <option value="2">Iná osoba</option>
                    </select>
                    @error('invoice')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror

                    <div v-if="invoice == true" class="form-check my-2">
                        <label>
                            <input type="checkbox" class="form-check-input" name="sendInvoice" value="1" checked @checked(old('sendInvoice') == 1)>
                            Faktúru žiadam zaslať emailom.
                            @error('sendInvoice')
                                <div class="invalid-feedback d-inline-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </label>
                    </div>
                </div>
            </div>

           <div v-if="invoice == false" class="col-md-12">
               @include('ClientModule.order._forms.create_other_person_form')
           </div>

            <div class="col-md-12 my-5">
                <div class="card-title">
                    <h3>
                        Dátum registrácie
                    </h3>
                </div>

                <div class="form-group">
                    <div class="form-check my-2">
                        <label>
                            <input type="radio" class="form-check-input" name="registerDate" value="1" checked  @change="changeDatePicker" @checked(old('registerDate') == 1)>
                            Čo najskôr
                        </label>
                    </div>
                    <div class="form-check my-2">
                        <label>
                            <input type="radio" class="form-check-input" name="registerDate" value="2"  @change="changeDatePicker" @checked(old('registerDate') == 2)>
                            Ku konkrétnemu dátumu
                        </label>
                    </div>
                    <input v-if="datePicker == true" type="date" class="form-control" name="date" value="{{ old('date') }}">
                    @error('registerDate')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

        </div>
    </div>

</div>
