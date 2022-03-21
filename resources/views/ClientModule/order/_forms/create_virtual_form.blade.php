<div class="row">
    <div class="col-md-12">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Vaša spoločnosť
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control" name="company">
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
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Obdobie
                        <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <input type="number" name="period" class="form-control" placeholder="Zadajte počet mesiac" />
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
            </div>
        </div>

    </div>
</div>

