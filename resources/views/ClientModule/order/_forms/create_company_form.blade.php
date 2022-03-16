<div class="row">

    <div class="col-md 12">
        <div class="row">

            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>
                                Zvoľte si obchodné meno vašej novej firmy (SRO)
                                <span class="text-danger">*</span>
                            </label>
                            <div class="form-row">
                                <div class="col-md-4 mb-2">
                                    <input name="companyName" class="form-control" placeholder="Napíšte obchodné meno novej spoločnosti" value="{{ old('companyName') }}" />
                                    @error('companyName')
                                        <div class="invalid-feedback d-inline-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-2">
                                    <select class="form-control" name="companyType">
                                        <option value="1" @selected(old('companyType') == 1)>s.r.o.</option>
                                        <option value="2" @selected(old('companyType') == 2) selected>, s.r.o.</option>
                                        <option value="3" @selected(old('companyType') == 3)>, spol. s r.o.</option>
                                    </select>
                                    @error('companyType')
                                        <div class="invalid-feedback d-inline-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4 mb-2">
                                    <button class="btn btn-primary btn-block">Overiť</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>
                        Váš email
                    </label>
                    <input name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}" />
                    @error('email')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>
                        Sídlo spoločnosti
                    </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="seatType" value="1" checked  @checked(old('seatType') == 1)>
                            Vlastné alebo prenajaté
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="seatType" value="2" @checked(old('seatType') == 2)>
                            Virtuálne sídlo
                            <a href data-toggle="tooltip" data-placement="right" title="Virtuálne sídlo podľa vášho výberu poskytuje partner portálu avesidlo.sk.">
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Ulica
                    </label>
                    <input name="street" class="form-control" placeholder="Ulica" value="{{ old('street') }}" />
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
                    <input name="streetRegisterNumber" class="form-control" placeholder="Súpisné číslo" value="{{ old('streetRegisterNumber') }}" />
                    @error('streetRegisterNumber')
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
                    <input name="streetNumber" class="form-control" placeholder="Orientačné číslo" value="{{ old('streetNumber') }}" />
                    @error('streetNumber')
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
                    <input name="city" class="form-control" placeholder="Obec" value="{{ old('city') }}" />
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
                    <input name="zip" class="form-control" placeholder="PSČ" value="{{ old('zip') }}" />
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
                    <select name="typeOfSpace" class="form-control" placeholder="Druh priestoru">
                        <option value="1" @selected(old('typeOfSpace') == 1)>Nebytový priestor</option>
                        <option value="2" @selected(old('typeOfSpace') == 2)>Byt v bytovom dome</option>
                        <option value="3" @selected(old('typeOfSpace') == 3)>Iná budova</option>
                        <option value="4" @selected(old('typeOfSpace') == 4)>Rodinný dom</option>
                        <option value="5" @selected(old('typeOfSpace') == 5)>Samostatne stojaca garáž</option>
                    </select>
                    @error('typeOfSpace')
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
                    <input name="spaceOwner" class="form-control" placeholder="Vlastník priestoru" value="{{ old('spaceOwner') }}" />
                    @error('spaceOwner')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            {{-- toto sa ma zobrazit len ak si pouzivatelov vyberie "virutalne sidlo" --}}
            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Sídlo
                    </label>
                    <select name="seat" class="form-control">
                        <option selected>Vyberte sídlo...</option>
                       @foreach ($suppliers as $supplier)
                           <option value="{{ $supplier->id }}" @selected(old('seat') == $supplier->id)>{{ $supplier->name }}</option>
                       @endforeach
                    </select>
                    @error('seat')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="card-title">
                    <h3>
                        Základné imanie
                    </h3>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Výška
                    </label>
                    <input class="form-control" name="capital" value="{{ old('capital') }}" />
                    @error('capital')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Rozsah splatenia
                    </label>
                    <input class="form-control" name="paid" value="{{ old('paid') }}" />
                    @error('paid')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-title">
                    <h3>
                        Zakladatelia (Spoločníci)
                    </h3>
                </div>
            </div>

            <div class="col-md-6">
                <button class="btn btn-primary text-uppercase">
                    <span class="fas fa-plus"></span>
                    Vložiť nového zakladateľa
                </button>
            </div>

        </div>
    </div>

</div>
