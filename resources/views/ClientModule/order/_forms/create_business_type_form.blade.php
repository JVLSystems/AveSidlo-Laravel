<div class="row">

    <div class="col-md-12">
        <div class="row">

            <div class="col-md-12 text-center">
                <div class="card-title">
                    <h3>
                        Vyberte si predmet podnikania
                    </h3>
                </div>
                <div class="card-text">
                    <p>
                        Na tomto mieste vám pomôžeme s výberom najvhodnejších predmetov podnikania.<br>
                        Ako prvú zadajte hlavnú činnosť podnikania
                    </p>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="businessType" class="form-control" placeholder="Sem vpíšte predmet, činnosť, kľúčové slovo (napr. Obchodná čínnosť)" value="{{ old('businessType') }}" />
                            @error('businessType')
                                <div class="invalid-feedback d-inline-block">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="text-center mt-4">
                                Alebo<br>
                                <button class="btn btn-lg btn-primary text-uppercase my-4">
                                    <span class="far fa-list-alt"></span>
                                    Vyberte zo zoznamu
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
