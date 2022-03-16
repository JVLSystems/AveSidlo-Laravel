<div class="col-md-6">
    <div class="form-group">
        <label>
            IČO
        </label>
        <input name="invoiceIco" class="form-control" value="{{ old('invoiceIco') }}" />
        @error('invoiceIco')
            <div class="invalid-feedback d-inline-block">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>
            Obchodné meno / meno a priezvisko
        </label>
        <input name="invoiceName" class="form-control" value="{{ old('invoiceName') }}" />
        @error('invoiceName')
            <div class="invalid-feedback d-inline-block">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>
            DIČ
        </label>
        <input name="invoiceDic" class="form-control" value="{{ old('invoiceDic') }}" />
        @error('invoiceDic')
            <div class="invalid-feedback d-inline-block">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label>
            IČ DPH
        </label>
        <input name="invoiceIcdph" class="form-control" value="{{ old('invoiceIcdph') }}" />
        @error('invoiceIcdph')
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
        <input name="invoiceStreet" class="form-control" placeholder="Názov ulice / námestia" value="{{ old('invoiceStreet') }}" />
        @error('invoiceStreet')
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
            <input name="invoiceStreetRegisterNumber" class="form-control" placeholder="Súpisné číslo" value="{{ old('invoiceStreetRegisterNumber') }}" />
            @error('invoiceStreetRegisterNumber')
                <div class="invalid-feedback d-inline-block">
                    {{ $message }}
                </div>
            @enderror
            <span class="d-flex align-items-center mx-1">/</span>
            <input name="invoiceStreetNumber" class="form-control" placeholder="Orientačné číslo" value="{{ old('invoiceStreetNumber') }}" />
            @error('invoiceStreetNumber')
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
        <input name="invoiceCity" class="form-control" placeholder="Napr. Bratislava" value="{{ old('invoiceCity') }}" />
        @error('invoiceCity')
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
        <input name="invoiceZip" class="form-control" value="{{ old('invoiceZip') }}" />
        @error('invoiceZip')
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
        <select class="form-control" name="invoiceState">
            @foreach ($states as $state)
                <option value="{{ $state->id }}" @selected(old('invoiceState') == $state->id)>{{ $state->name }}</option>
            @endforeach
        </select>
        @error('invoiceState')
            <div class="invalid-feedback d-inline-block">
                {{ $message }}
            </div>
        @enderror
    </div>
</div>

<div class="col-md-12">
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
