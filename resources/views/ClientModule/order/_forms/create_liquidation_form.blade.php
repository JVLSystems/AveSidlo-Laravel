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
        </div>

    </div>
</div>

