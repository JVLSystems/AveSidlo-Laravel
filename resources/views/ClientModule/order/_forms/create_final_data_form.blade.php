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
                    <select class="form-control" name="founderIdentityDocType">
                        {{-- tu bude "vytvorena firma", spoloncici --}}
                        <option value="">Iná osoba</option>
                    </select>
                    @error('founderIdentityDocType')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror

                    {{-- toto sa zobrazi len ak uzivatel vyberie firmu alebo spolocnika --}}
                    <div class="form-check my-2">
                        <label>
                            <input class="form-check-input" name="sendInvoice" type="checkbox" value="1" checked @checked(old('sendInvoice') == 1)>
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

           {{-- ak si uzivatel vyberie "ina osoba" includne sa tu other person form --}}
           {{-- @include('ClientModule.order._forms.create_other_person_form') --}}

            <div class="col-md-12 my-5">
                <div class="card-title">
                    <h3>
                        Dátum registrácie
                    </h3>
                </div>

                <div class="form-group">
                    <div class="form-check my-2">
                        <label>
                            <input class="form-check-input" name="registerDate" type="radio" value="1" checked @checked(old('registerDate') == 1)>
                            Čo najskôr
                        </label>
                    </div>
                    <div class="form-check my-2">
                        <label>
                            <input class="form-check-input" name="registerDate" type="radio" value="2" @checked(old('registerDate') == 2)>
                            Ku konkrétnemu dátumu
                        </label>
                    </div>
                    {{-- datepicker sa ma zobrait ak si uzivatel vyberie "ku konkretnemu datumu" --}}
                    <input type="date" class="form-control" name="date" value="{{ old('date') }}">
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
