<div class="modal fade" id="founder" tabindex="-1" aria-labelledby="founderLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
            <h5 class="modal-title" id="founderLabel">Vložiť zakladateľa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="d-block">&times;</span>
                </button>
            </div>

            <div class="modal-body">
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
                                    <input type="text" name="founderTitleBeforeName" class="form-control" value="{{ old('founderTitleBeforeName') }}" />
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
                                    <input type="text" name="founderName" class="form-control" value="{{ old('founderName') }}" />
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
                                    <input type="text" name="founderSurname" class="form-control" value="{{ old('founderSurname') }}" />
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
                                    <input type="text" name="founderTitleAfterName" class="form-control" value="{{ old('founderTitleAfterName') }}" />
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
                                    <input type="text" name="founderStreet" class="form-control" placeholder="Názov ulice / námestia" value="{{ old('founderStreet') }}" />
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
                                        <input type="text" name="founderStreetRegisterNumber" class="form-control" placeholder="Súpisné číslo" value="{{ old('founderStreetRegisterNumber') }}" />
                                        @error('founderStreetRegisterNumber')
                                            <div class="invalid-feedback d-inline-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <span class="d-flex align-items-center mx-1">/</span>
                                        <input type="text" name="founderStreetNumber" class="form-control" placeholder="Orientačné číslo" value="{{ old('founderStreetNumber') }}" />
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
                                    <input type="text" name="founderCity" class="form-control" placeholder="Napr. Bratislava" value="{{ old('founderCity') }}" />
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
                                    <input type="text" name="founderZip" class="form-control" value="{{ old('founderZip') }}" />
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
                                        <input type="text" name="founderBirthId" class="form-control" value="{{ old('founderBirthId') }}" />
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
                                    <label>
                                        Štátna príslúšnosť
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="founderNationality" class="form-control" placeholder="Napr. Slovenská" value="{{ old('founderNationality') }}" />
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
                                    <input type="text" name="founderIdentityDocNumber" class="form-control" value="{{ old('founderIdentityDocNumber') }}" />
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
                                    <input type="number" name="founderCapital" class="form-control" value="{{ old('founderCapital') }}" />
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
                                    <input type="text" name="founderShare" class="form-control" value="{{ old('founderShare') }}" />
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
                                    <input type="number" name="founderPaid" class="form-control" value="{{ old('founderPaid') }}" />
                                    @error('founderPaid')
                                        <div class="invalid-feedback d-inline-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavrieť</button>
                <button type="button" class="btn btn-primary">Vložiť zakladateľa</button>
            </div>

        </div>
    </div>
</div>


