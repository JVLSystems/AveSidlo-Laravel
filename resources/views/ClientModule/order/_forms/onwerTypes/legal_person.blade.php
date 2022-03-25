<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="founderIco">
                IČO
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="founderIco" class="form-control" id="founderIco" v-model="founderIco" @change="searchICO" placeholder="IČO" value="{{ old('founderStreet') }}" />
            @error('founderStreet')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="founderCompanyName">
                Obchodné meno
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="founderCompanyName" class="form-control" id="founderCompanyName" v-model="founderCompanyName" placeholder="Obchodné meno" value="{{ old('founderStreet') }}" />
            @error('founderStreet')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="founderStreet">
                Adresa
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="founderAddress" class="form-control" id="founderAddress" v-model="founderAddress" placeholder="Názov ulice / námestia" value="{{ old('founderAddress') }}" />
            @error('founderAddress')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="founderCity">
                Obec
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="founderCity" class="form-control" id="founderCity" v-model="founderCity" placeholder="Napr. Bratislava" value="{{ old('founderCity') }}" />
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
                PSČ
                <span class="text-danger">*</span>
            </label>
            <input type="text" name="founderZip" class="form-control" id="founderZip" v-model="founderZip" value="{{ old('founderZip') }}" />
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
                Štát
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

    <div class="col-md-12 text-center">
        <div class="card-title">
            <h3>
                Zastúpenie osobou (konateľ)
            </h3>
        </div>
    </div>

    <div class="col-md-6">
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

    <div class="col-md-6">
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

    <div class="col-md-6">
        <div class="form-group">
            <label for="founderBirthDay">
                Dátum narodenia
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

    <div class="col-md-6">
        <div class="form-group">
            <label for="founderBirthId">
                Rodné číslo
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
            <label for="founderCapital">
                Výška vkladu
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
                Podiel v spoločnosti
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

</div>
