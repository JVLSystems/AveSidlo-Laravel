<div class="row">

    <div class="col-md-12">
        <div class="form-group">
            <label for="founderGender">
                Pohlavie
                <span class="text-danger">*</span>
            </label>
            <select name="founderGender" class="form-control" id="founderGender">
                @foreach ($genders as $gender)
                    <option value="{{ $gender->id }}" @selected(old('founderGender') == $gender->id)>{{ $gender->name }}</option>
                @endforeach
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
            <label for="founderTitleBeforeName">
                Titul pred menom
            </label>
            <input type="text" name="founderTitleBeforeName" class="form-control" id="founderTitleBeforeName" value="{{ old('founderTitleBeforeName') }}" />
            @error('founderTitleBeforeName')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="founderName">
                Meno
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="founderName" class="form-control" id="founderName" v-model="name" value="{{ old('founderName') }}" />
            @error('founderName')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="founderSurname">
                Priezvisko
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="founderSurname" class="form-control" id="founderSurname" value="{{ old('founderSurname') }}" />
            @error('founderSurname')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
            <label for="founderTitleAfterName">
                Titul za menom
            </label>
            <input type="text" name="founderTitleAfterName" class="form-control" id="founderTitleAfterName" value="{{ old('founderTitleAfterName') }}" />
            @error('founderTitleAfterName')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="founderStreet">
                Ulica / n??mestie
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="founderStreet" class="form-control" id="founderStreet" placeholder="N??zov ulice / n??mestia" value="{{ old('founderStreet') }}" />
            @error('founderStreet')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="founderStreetRegisterNumber">
                S??pisn?? ????slo /
            </label>
            <label for="founderStreetNumber">
                &nbsp;Orienta??n?? ????slo
                <span class="text-danger">*</span>
            </label>
            <div class="input-group">
                <input type="text" name="founderStreetRegisterNumber" class="form-control" id="founderStreetRegisterNumber" placeholder="S??pisn?? ????slo" value="{{ old('founderStreetRegisterNumber') }}" />
                @error('founderStreetRegisterNumber')
                    <div class="invalid-feedback d-inline-block">
                        {{ $message }}
                    </div>
                @enderror
                <span class="d-flex align-items-center mx-1">/</span>
                <input type="text" name="founderStreetNumber" class="form-control" id="founderStreetNumber" placeholder="Orienta??n?? ????slo" value="{{ old('founderStreetNumber') }}" />
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
            <label for="founderCity">
                Obec
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="founderCity" class="form-control" id="founderCity" placeholder="Napr. Bratislava" value="{{ old('founderCity') }}" />
            @error('founderCity')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="founderZip">
                PS??
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="founderZip" class="form-control" id="founderZip" value="{{ old('founderZip') }}" />
            @error('founderZip')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="founderState">
                ??t??t
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="founderState" id="founderState">
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
            <label for="founderBirthDay">
                D??tum narodenia
                <span class="text-danger">*</span>
            </label>
            <div class="input-group mb-2">
                <select class="form-control" id="founderBirthDay" name="founderBirthDay">
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
            <label for="founderBirthId">
                Rodn?? ????slo
                <span class="text-danger">*</span>
            </label>
            <div class="input-group">
                <input type="text" name="founderBirthId" class="form-control" id="founderBirthId" value="{{ old('founderBirthId') }}" />
                @error('founderBirthId')
                    <div class="invalid-feedback d-inline-block">
                        {{ $message }}
                    </div>
                @enderror
                <span class="d-flex align-items-center mx-1">/</span>
                <input type="text" name="founderBirthIdSuffix" class="form-control" value="{{ old('founderBirthIdSuffix') }}" />
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
            <label for="founderNationality">
                ??t??tna pr??sl????nos??
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="founderNationality" class="form-control" id="founderNationality" placeholder="Napr. Slovensk??" value="{{ old('founderNationality') }}" />
            @error('founderNationality')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="founderIdentityDocType">
                Typ dokladu toto??nosti
                <span class="text-danger">*</span>
            </label>
            <select class="form-control" id="founderIdentityDocType" name="founderIdentityDocType">
                @foreach ($identityDocTypes as $type)
                    <option value="{{ $type->id }}" @selected(old('founderIdentityDocType') == $type->id)>{{ $type->name }}</option>
                @endforeach
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
            <label for="founderIdentityDocNumber">
                ????slo dokladu toto??nosti
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="founderIdentityDocNumber" class="form-control" id="founderIdentityDocNumber" value="{{ old('founderIdentityDocNumber') }}" />
            @error('founderIdentityDocNumber')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="founderCapital">
                V????ka vkladu
                <span class="text-danger">*</span>
            </label>
            <input type="number" name="founderCapital" class="form-control" id="founderCapital" v-model="capital" value="{{ old('founderCapital') }}" />
            @error('founderCapital')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="founderShare">
                Podiel v spolo??nosti
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="founderShare" class="form-control" id="founderShare" v-model="share" value="{{ old('founderShare') }}" />
            @error('founderShare')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="founderPaid">
                Rozsah splatenia vkladu
                <span class="text-danger">*</span>
            </label>
            <input type="number" name="founderPaid" class="form-control" id="founderPaid" v-model="paid" value="{{ old('founderPaid') }}" />
            @error('founderPaid')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="founderIsExecutiveManager" value="1" @checked(old('founderIsExecutiveManager'))>
                    Tento zakladate?? (spolo??n??k) bude aj konate??om
                </label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="founderIsDepositAdministrator" value="1" @checked(old('founderIsDepositAdministrator'))>
                    Tento zakladate?? (spolo??n??k) bude aj spr??vcom vkladu
                </label>
            </div>
        </div>
    </div>

</div>
