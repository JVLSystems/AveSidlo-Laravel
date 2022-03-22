<div class="row" id="seat">

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
                                    <input type="text" name="companyName" v-model="company" class="form-control" placeholder="Napíšte obchodné meno novej spoločnosti" />
                                    @error('companyName')
                                        <div class="invalid-feedback d-inline-block">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div v-if="exists !== null" class="invalid-feedback d-inline-block">
                                        @{{ exists }}
                                    </div>
                                    <div v-if="notExists !== null" class="valid-feedback d-inline-block">
                                        @{{ notExists }}
                                    </div>
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
                                    <button class="btn btn-primary btn-block" @click.prevent="checkCompany">Overiť</button>
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
                    <input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}" />
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
                            <input type="radio" class="form-check-input" name="seatType" value="1" checked @change="changeSeat" @checked(old('seatType') == 1)>
                            Vlastné alebo prenajaté
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="seatType" value="2" @change="changeSeat" @checked(old('seatType') == 2)>
                            Virtuálne sídlo
                            <a href data-toggle="tooltip" data-placement="right" title="Virtuálne sídlo podľa vášho výberu poskytuje partner portálu avesidlo.sk.">
                                <i class="fas fa-info-circle"></i>
                            </a>
                            @error('seatType')
                                <div class="invalid-feedback d-inline-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </label>
                    </div>
                </div>
            </div>

            <div v-if="seat == false" class="col-md-12">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                Ulica
                            </label>
                            <input type="text" name="street" class="form-control" placeholder="Ulica" value="{{ old('street') }}" />
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
                            <input type="text" name="streetRegisterNumber" class="form-control" placeholder="Súpisné číslo" value="{{ old('streetRegisterNumber') }}" />
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
                            <input type="text" name="streetNumber" class="form-control" placeholder="Orientačné číslo" value="{{ old('streetNumber') }}" />
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
                            <input type="text" name="city" class="form-control" placeholder="Obec" value="{{ old('city') }}" />
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
                            <input type="text" name="zip" class="form-control" placeholder="PSČ" value="{{ old('zip') }}" />
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
                            <input type="text" name="spaceOwner" class="form-control" placeholder="Vlastník priestoru" value="{{ old('spaceOwner') }}" />
                            @error('spaceOwner')
                                <div class="invalid-feedback d-inline-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div v-if="seat == true" class="col-md-6">
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
                    <input type="number" class="form-control" name="capital" value="{{ old('capital') }}" />
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
                    <input type="text" class="form-control" name="paid" value="{{ old('paid') }}" />
                    @error('paid')
                        <div class="invalid-feedback d-inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-12 text-center">
                <div class="card-title">
                    <h3>
                        Zakladatelia (Spoločníci)
                    </h3>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                          <tr>
                                            <th scope="col">MENO A PRIEZVISKO</th>
                                            <th scope="col">VKLAD</th>
                                            <th scope="col">PODIEL</th>
                                            <th scope="col">SPLATENÉ</th>
                                            <th scope="col">UPRAVIŤ</th>
                                            <th scope="col">ODOBRAŤ</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Test tester</th>
                                                <td>5000&euro;</td>
                                                <td>100%</td>
                                                <td>5000&euro;</td>
                                                <td>
                                                    <button class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 my-7 text-center">
                <button class="btn btn-primary text-uppercase" data-toggle="modal" data-target="#founder" @click.prevent>
                    <span class="fas fa-plus"></span>
                    Vložiť nového zakladateľa
                </button>
            </div>

            <div class="col-md-12 text-center">
                <div class="card-title">
                    <h3>
                        Konatelia
                    </h3>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                          <tr>
                                            <th scope="col">MENO A PRIEZVISKO</th>
                                            <th scope="col">VKLAD</th>
                                            <th scope="col">PODIEL</th>
                                            <th scope="col">SPLATENÉ</th>
                                            <th scope="col">UPRAVIŤ</th>
                                            <th scope="col">ODOBRAŤ</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Test tester</th>
                                                <td>5000&euro;</td>
                                                <td>100%</td>
                                                <td>5000&euro;</td>
                                                <td>
                                                    <button class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 my-7 text-center">
                <button class="btn btn-primary text-uppercase" data-toggle="modal" data-target="#executiveManager" @click.prevent>
                    <span class="fas fa-plus"></span>
                    Pridať konateľa
                </button>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Konečným užívateľom výhod sú
                    </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="usersBenefits" value="1" @change="changeOtherPersons" checked  @checked(old('usersBenefits') == 1)>
                            Spoločníci / zakladatelia
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="usersBenefits" value="2" @change="changeOtherPersons" @checked(old('usersBenefits') == 2)>
                            Iné osoby
                        </label>
                    </div>
                    <div v-if="otherPersons == true" class="row mt-7">
                        <div class="col-md-12">
                            <textarea name="otherPersons" class="form-control" placeholder="Uveďte mená a priezviská, adresu bydliska, dátum narodenia, rodné číslo, číslo pasu alebo občianskeho preukazu.">{{ old('otherPersons') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>
                        Spôsob konania konateľov
                    </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="managersMethod" value="1" @change="changeOtherMethod" checked  @checked(old('managersMethod') == 1)>
                            V mene spoločnosti koná a podpisuje každý konateľ samostatne
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="managersMethod" value="2" @change="changeOtherMethod" @checked(old('managersMethod') == 2)>
                            Iné
                        </label>
                    </div>
                    <div v-if="otherMethod == true" class="row mt-7">
                        <div class="col-md-12">
                            <textarea name="otherMethod" class="form-control">{{ old('otherMethod') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            @include('ClientModule.order._forms.founder')
            @include('ClientModule.order._forms.executive_manager')

        </div>
    </div>

</div>

