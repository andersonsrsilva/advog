@csrf

<div class="row">
    <div class="form-group col-md-6">
        <label for="name">Nome<span class="required">*</span></label>
        <input type="text" id="name" name="name" class="form-control"
            value="{{$customer->name ?? old('name')}}" {{ $disabled ?? '' }}/>
    </div>
    <div class="form-group col-md-6">
        <label for="email">E-mail<span class="required">*</span></label>
        <input type="text" id="email" name="email" class="form-control"
            value="{{$customer->email ?? old('email')}}" {{ $disabled ?? '' }}/>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        <label for="cpf">CPF<span class="required">*</span></label>
        <input type="text" id="cpf" name="cpf" class="form-control"
            value="{{$customer->cpf ?? old('cpf')}}" {{ $disabled ?? '' }}/>
    </div>
    <div class="form-group col-md-4">
        <label for="cnh">Habilitação</label>
        <input type="text" id="cnh" name="cnh" class="form-control"
            value="{{$customer->cnh ?? old('cnh')}}" {{ $disabled ?? '' }}/>
    </div>
    <div class="form-group col-md-4">
        <label for="passport">Passaporte</label>
        <input type="text" id="passport" name="passport" class="form-control"
            value="{{$customer->passport ?? old('passport')}}" {{ $disabled ?? '' }}/>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        <label for="mobile_phone">Telefone celular<span class="required">*</span></label>
        <input type="text" id="mobile_phone" name="mobile_phone" class="form-control"
            value="{{$customer->mobile_phone ?? old('mobile_phone')}}" {{ $disabled ?? '' }}/>
    </div>
    <div class="form-group col-md-4">
        <label for="home_phone">Telefone Residencial</label>
        <input type="text" id="home_phone" name="home_phone" class="form-control"
            value="{{$customer->home_phone ?? old('home_phone')}}" {{ $disabled ?? '' }}/>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-2">
        <label for="zip_code">CEP<span class="required">*</span></label>
        <input type="text" id="zip_code" name="zip_code" class="form-control"
            value="{{$customer->zip_code ?? old('zip_code')}}" {{ $disabled ?? '' }}/>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label for="address">Endereço<span class="required">*</span></label>
        <input type="text" id="address" name="address" class="form-control"
            value="{{$customer->address ?? old('address')}}" {{ $disabled ?? '' }}/>
    </div>
    <div class="form-group col-md-2">
        <label for="number_address">Número</label>
        <input type="text" id="number_address" name="number_address" class="form-control"
            value="{{$customer->number_address ?? old('number_address')}}" {{ $disabled ?? '' }}/>
    </div>
    <div class="form-group col-md-4">
        <label for="other_address">Complemento</label>
        <input type="text" id="other_address" name="other_address" class="form-control"
            value="{{$customer->other_address ?? old('other_address')}}" {{ $disabled ?? '' }}/>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        <label for="district_address">Bairro<span class="required">*</span></label>
        <input type="text" id="district_address" name="district_address" class="form-control"
            value="{{$customer->district_address ?? old('district_address')}}" {{ $disabled ?? '' }}/>
    </div>
    <div class="form-group col-md-4">
        <label for="city">Cidade<span class="required">*</span></label>
        <input type="hidden" id="ibge_code" name="ibge_code"
            value="{{$customer->city->ibge_code ?? old('ibge_code')}}"/>

        <input type="text" id="city_input" name="city_input" class="form-control"
            value="{{$customer->city->name ?? old('city_input')}}" {{ $disabled ?? '' }}/>

        <select id="city_select" name="city_select" class="form-control"></select>
    </div>
    <div class="form-group col-md-4">
        <label for="uf">Estado<span class="required">*</span></label>

        <select class="form-control" id="uf" {{ $disabled ?? '' }}>
            <option value="">-- Selecione --</option>

            @foreach ($uf as $value)
                <option value="{{ $value->code }}"
                @if ($value->id == old('uf', $customer->uf_id))
                    selected="selected"
                @endif
                >{{ $value->name }}</option>
            @endforeach

        </select>
    </div>
</div>
