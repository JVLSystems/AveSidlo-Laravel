<div class="row">
    <div class="col-md-6">
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

        <div class="form-group">
            <label>
                Obdobie
                <span class="text-danger">*</span>
            </label>
            <div class="input-group">
                <input name="period" class="form-control" placeholder="Zadajte počet mesiac"/>
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

        <div class="form-group">
            <label>
                Zvoľte si obchodné meno vašej novej firmy (SRO)
                <span class="text-danger">*</span>
            </label>
            <div class="input-group">
                <input name="companyNam" class="form-control" placeholder="Napíšte obchodné meno novej spoločnosti"/>
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

    <div class="col-md 12">
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Ulica
                    </label>
                    <input name="street" class="form-control" placeholder="Ulica" value="{{ old('street') }}"/>
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
                    <input name="number" class="form-control" placeholder="Súpisné číslo" value="{{ old('number') }}"/>
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
                    <input name="streetNumm" class="form-control" placeholder="Orientačné číslo"
                           value="{{ old('streetNumm') }}"/>
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
                    <input name="city" class="form-control" placeholder="Obec" value="{{ old('city') }}"/>
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
                    <input name="zip" class="form-control" placeholder="PSČ" value="{{ old('zip') }}"/>
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
                    <input name="space_owner" class="form-control" placeholder="Vlastník priestoru"
                           value="{{ old('space_owner') }}"/>
                    @error('space_owner')
                    <div class="invalid-feedback d-inline-block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

        </div>
    </div>

</div>
