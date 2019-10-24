
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $customer->name }}" autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')?? $customer->email}}" autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row pb-3">
                        <label for="active" class="col-md-4 col-form-label text-md-right">Customer status</label>

                        <div class="col-md-6">
                            <select name="active" id="active" class=" form-control">
                                    <option value="" disabled="disabled">select customer status</option>
                                    @foreach ($customer->activeOption() as $activeOptionkey=>$activeOptionValue)

                                    <option value="{{ $activeOptionkey }}" {{ $customer->active == $activeOptionValue ? 'selected':'' }}>{{$activeOptionValue   }}</option>
                                    @endforeach
                            </select>
                            @error('active')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row pb-3">
                        <label for="company_id" class="col-md-4 col-form-label text-md-right">Customer status</label>

                        <div class="col-md-6">
                            <select name="company_id" id="company_id" class=" form-control">
                                    <option value="" disabled="disabled">select your company</option>
                                   @foreach ( $companies as $company)
                                   <option value="{{ $company->id }}"{{ $company->id==$customer->company_id ? 'selected':'' }}>{{ $company->name }}</option>

                                   @endforeach
                            </select>
                            @error('company_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

