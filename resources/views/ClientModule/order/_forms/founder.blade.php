<div class="row">

    <div class="col-md 12">
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Typ zakladateľa
                        <span class="text-danger">*</span>
                    </label>
                    <select name="founderOwnerType" class="form-control">
                        <option value="1" @selected(old('founderOwnerType') == 1)>Fyzická osoba</option>
                        <option value="2" @selected(old('founderOwnerType') == 2)>Právnicka osoba</option>
                    </select>
                    @error('founderOwnerType')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Pohlavie
                        <span class="text-danger">*</span>
                    </label>
                    <select name="founderGender" class="form-control">
                        <option value="man" @selected(old('founderGender') == 'man')>Muž</option>
                        <option value="woman" @selected(old('founderGender') == 'woman')>Žena</option>
                    </select>
                    @error('founderGender')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label>
                        Titul pred menom
                    </label>
                    <input name="founderTitleBeforeName" class="form-control" value="{{ old('founderTitleBeforeName') }}" />
                    @error('founderTitleBeforeName')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>
                        Meno
                        <span class="text-danger">*</span>
                    </label>
                    <input name="founderName" class="form-control" value="{{ old('founderName') }}" />
                    @error('founderName')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>
                        Priezvisko
                        <span class="text-danger">*</span>
                    </label>
                    <input name="founderSurname" class="form-control" value="{{ old('founderSurname') }}" />
                    @error('founderSurname')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    <label>
                        Titul za menom
                    </label>
                    <input name="founderTitleAfterName" class="form-control" value="{{ old('founderTitleAfterName') }}" />
                    @error('founderTitleAfterName')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Ulica / námestie
                        <span class="text-danger">*</span>
                    </label>
                    <input name="founderStreet" class="form-control" placeholder="Názov ulice / námestia" value="{{ old('founderStreet') }}" />
                    @error('founderStreet')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Súpisné číslo / Orientačné číslo
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input name="founderStreetRegisterNumber" class="form-control" placeholder="Súpisné číslo" value="{{ old('founderStreetRegisterNumber') }}" />
                        @error('founderStreetRegisterNumber')
                            <div class="invalid-feedback d-inline-block">
                                {{ $message }}
                            </div>
                        @enderror
                        <span class="d-flex align-items-center mx-1">/</span>
                        <input name="founderStreetNumber" class="form-control" placeholder="Orientačné číslo" value="{{ old('founderStreetNumber') }}" />
                        @error('founderStreetNumber')
                            <div class="invalid-feedback d-inline-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Obec
                        <span class="text-danger">*</span>
                    </label>
                    <input name="founderCity" class="form-control" placeholder="Napr. Bratislava" value="{{ old('founderCity') }}" />
                    @error('founderCity')
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
                        <span class="text-danger">*</span>
                    </label>
                    <input name="founderZip" class="form-control" value="{{ old('founderZip') }}" />
                    @error('founderZip')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>
                        Štát
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control" name="founderState">
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}" @selected(old('founderState') == $state->id)>{{ $state->name }}</option>
                        @endforeach
                    </select>
                    @error('founderState')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>
                        Dátum narodenia
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group mb-2">
                        <select class="form-control" name="founderBirthDay">
                            @for ($i = 1; $i <= 31; $i++)
                                <option value="{{ $i }}" @selected(old('founderBirthDay') == $i)>{{ $i }}</option>
                            @endfor
                        </select>
                        @error('founderBirthDay')
                            <div class="invalid-feedback d-inline-block">
                                {{ $message }}
                            </div>
                        @enderror
                        <select class="form-control" name="founderBirthMonth">
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}" @selected(old('founderBirthMonth') == $i)>{{ $i }}</option>
                            @endfor
                        </select>
                        @error('founderBirthMonth')
                            <div class="invalid-feedback d-inline-block">
                                {{ $message }}
                            </div>
                        @enderror
                        <select class="form-control" name="founderBirthYear">
                            @for ($i = $year; $i >= 1900; $i--)
                                <option value="{{ $i }}" @selected(old('founderBirthYear') == $i)>{{ $i }}</option>
                            @endfor
                        </select>
                        @error('founderBirthYear')
                            <div class="invalid-feedback d-inline-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>
                        Rodné číslo
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input name="founderBirthId" class="form-control" value="{{ old('founderBirthId') }}" />
                        @error('founderBirthId')
                            <div class="invalid-feedback d-inline-block">
                                {{ $message }}
                            </div>
                        @enderror
                        <span class="d-flex align-items-center mx-1">/</span>
                        <input name="founderBirthIdSuffix" class="form-control" value="{{ old('founderBirthIdSuffix') }}" />
                        @error('founderBirthIdSuffix')
                            <div class="invalid-feedback d-inline-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>
                        Štátna príslúšnosť
                        <span class="text-danger">*</span>
                    </label>
                    <input name="founderNationality" class="form-control" placeholder="Napr. Slovenská" value="{{ old('founderNationality') }}" />
                    @error('founderNationality')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>
                        Typ dokladu totožnosti
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control" name="founderIdentityDocType">
                        <option value="1" @selected(old('founderIdentityDocType') == 1)>Občiansky preukaz</option>
                        <option value="2" @selected(old('founderIdentityDocType') == 2)>Pas</option>
                        <option value="3" @selected(old('founderIdentityDocType') == 3)>Iný doklad</option>
                    </select>
                    @error('founderIdentityDocType')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>
                        Číslo dokladu totožnosti
                        <span class="text-danger">*</span>
                    </label>
                    <input name="founderIdentityDocNumber" class="form-control" value="{{ old('founderIdentityDocNumber') }}" />
                    @error('founderIdentityDocNumber')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>
                        Výška vkladu
                        <span class="text-danger">*</span>
                    </label>
                    <input name="founderCapital" class="form-control" value="{{ old('founderCapital') }}" />
                    @error('founderCapital')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>
                        Podiel v spoločnosti
                        <span class="text-danger">*</span>
                    </label>
                    <input name="founderShare" class="form-control" value="{{ old('founderShare') }}" />
                    @error('founderShare')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>
                        Rozsah splatenia vkladu
                        <span class="text-danger">*</span>
                    </label>
                    <input name="founderPaid" class="form-control" value="{{ old('founderPaid') }}" />
                    @error('founderPaid')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Konečným užívateľom výhod sú
                    </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="usersBenefits" value="1" checked  @checked(old('usersBenefits') == 1)>
                            Spoločníci / zakladatelia
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="usersBenefits" value="2" @checked(old('usersBenefits') == 2)>
                            Iné osoby
                        </label>
                    </div>
                    {{-- toto sa ma zobrazit ak si uzivatel vyberie "ine osoby" --}}
                    <div class="row mt-7">
                        <div class="col-md-12">
                            <textarea name="otherPersons" class="form-control" placeholder="Uveďte mená a priezviská, adresu bydliska, dátum narodenia, rodné číslo, číslo pasu alebo občianskeho preukazu.">{{ old('otherPersons') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Spôsob konania konateľov
                    </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="managersMethod" value="1" checked  @checked(old('managersMethod') == 1)>
                            V mene spoločnosti koná a podpisuje každý konateľ samostatne
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="managersMethod" value="2" @checked(old('managersMethod') == 2)>
                            Iné
                        </label>
                    </div>
                    {{-- toto sa ma zobrazit ak si uzivatel vyberie "ine" --}}
                    <div class="row mt-7">
                        <div class="col-md-12">
                            <textarea name="otherMethod" class="form-control">{{ old('otherMethod') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
