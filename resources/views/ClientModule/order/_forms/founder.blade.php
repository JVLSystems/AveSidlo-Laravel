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
                                    <label for="founderOwnerType">
                                        Typ zakladateľa
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select name="founderOwnerType" class="form-control" id="founderOwnerType" @change="changeOwnerType">
                                        @foreach ($ownerTypes as $type)
                                            <option value="{{ $type->id }}" @selected(old('founderOwnerType') == $type->id)>{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('founderOwnerType')
                                        <div class="invalid-feedback d-inline-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12" v-if="individual == true">
                                @include('ClientModule.order._forms.onwerTypes.individual')
                            </div>

                            <div class="col-md-12" v-if="individual == false">
                                @include('ClientModule.order._forms.onwerTypes.legal_person')
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavrieť</button>
                <button type="button" class="btn btn-primary" :class="founderIsSpinning ? 'spinner spinner-white spinner-right' : ''" :disabled="founderIsSpinning" @click.prevent="addFounder">Vložiť zakladateľa</button>
            </div>

        </div>
    </div>
</div>


