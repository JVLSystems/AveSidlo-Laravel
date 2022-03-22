<div class="modal fade" id="executiveManager" tabindex="-1" aria-labelledby="executiveManagerLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
            <h5 class="modal-title" id="executiveManagerLabel">Pridať konateľa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="d-block">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="row">

                    <div class="col-md 12">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>
                                        Pohlavie
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select name="executiveManagerGender" class="form-control">
                                        <option value="man" @selected(old('executiveManagerGender') == 'man')>Muž</option>
                                        <option value="woman" @selected(old('executiveManagerGender') == 'woman')>Žena</option>
                                    </select>
                                    @error('executiveManagerGender')
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
                                    <input type="text" name="executiveManagerTitleBeforeName" class="form-control" value="{{ old('executiveManagerTitleBeforeName') }}" />
                                    @error('executiveManagerTitleBeforeName')
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
                                    <input type="text" name="executiveManagerName" class="form-control" value="{{ old('executiveManagerName') }}" />
                                    @error('executiveManagerName')
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
                                    <input type="text" name="executiveManagerSurname" class="form-control" value="{{ old('executiveManagerSurname') }}" />
                                    @error('executiveManagerSurname')
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
                                    <input type="text" name="executiveManagerTitleAfterName" class="form-control" value="{{ old('executiveManagerTitleAfterName') }}" />
                                    @error('executiveManagerTitleAfterName')
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
                                    <input type="text" name="executiveManagerStreet" class="form-control" placeholder="Názov ulice / námestia" value="{{ old('executiveManagerStreet') }}" />
                                    @error('executiveManagerStreet')
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
                                        <input type="text" name="executiveManagerStreetRegisterNumber" class="form-control" placeholder="Súpisné číslo" value="{{ old('executiveManagerStreetRegisterNumber') }}" />
                                        @error('executiveManagerStreetRegisterNumber')
                                            <div class="invalid-feedback d-inline-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <span class="d-flex align-items-center mx-1">/</span>
                                        <input type="text" name="executiveManagerStreetNumber" class="form-control" placeholder="Orientačné číslo" value="{{ old('executiveManagerStreetNumber') }}" />
                                        @error('executiveManagerStreetNumber')
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
                                    <input type="text" name="executiveManagerCity" class="form-control" placeholder="Napr. Bratislava" value="{{ old('executiveManagerCity') }}" />
                                    @error('executiveManagerCity')
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
                                    <input type="text" name="executiveManagerZip" class="form-control" value="{{ old('executiveManagerZip') }}" />
                                    @error('executiveManagerZip')
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
                                    <select class="form-control" name="executiveManagerState">
                                        @foreach ($states as $state)
                                            <option value="{{ $state->id }}" @selected(old('executiveManagerState') == $state->id)>{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('executiveManagerState')
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
                                        <select class="form-control" name="executiveManagerBirthDay">
                                            @for ($i = 1; $i <= 31; $i++)
                                                <option value="{{ $i }}" @selected(old('executiveManagerBirthDay') == $i)>{{ $i }}</option>
                                            @endfor
                                        </select>
                                        @error('executiveManagerBirthDay')
                                            <div class="invalid-feedback d-inline-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <select class="form-control" name="executiveManagerBirthMonth">
                                            @for ($i = 1; $i <= 12; $i++)
                                                <option value="{{ $i }}" @selected(old('executiveManagerBirthMonth') == $i)>{{ $i }}</option>
                                            @endfor
                                        </select>
                                        @error('executiveManagerBirthMonth')
                                            <div class="invalid-feedback d-inline-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <select class="form-control" name="executiveManagerBirthYear">
                                            @for ($i = $year; $i >= 1900; $i--)
                                                <option value="{{ $i }}" @selected(old('executiveManagerBirthYear') == $i)>{{ $i }}</option>
                                            @endfor
                                        </select>
                                        @error('executiveManagerBirthYear')
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
                                        <input type="text" name="executiveManagerBirthId" class="form-control" value="{{ old('executiveManagerBirthId') }}" />
                                        @error('executiveManagerBirthId')
                                            <div class="invalid-feedback d-inline-block">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <span class="d-flex align-items-center mx-1">/</span>
                                        <input type="text" name="executiveManagerBirthIdSuffix" class="form-control" value="{{ old('executiveManagerBirthIdSuffix') }}" />
                                        @error('executiveManagerBirthIdSuffix')
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
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavrieť</button>
                <button type="button" class="btn btn-primary">Pridať konateľa</button>
            </div>

        </div>
    </div>
</div>


