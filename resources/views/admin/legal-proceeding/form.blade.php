@csrf

<div class="row">
    <div class="form-group col-md-6">
        <label for="uf">Processo<span class="required">*</span></label>
        <select class="form-control" id="lawsuit_id" {{ $disabled ?? '' }}>
            @if (isset($legalProceeding->lawsuit_id))
                <option value="">-- SELECIONE --</option>
            @else
                <option value="" selected="selected">-- SELECIONE --</option>
            @endif

            @foreach ($lawsuits as $value)
                <option value="{{ $value->id }}"
                @if ($value->id == old('lawsuit_id', $legalProceeding->lawsuit_id))
                    selected="selected"
                @endif
                >{{ $value->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-6">
        <label for="uf">Tipo da ação<span class="required">*</span></label>
        <select class="form-control" id="lawsuit_type_id" {{ $disabled ?? '' }}>
            @if (isset($legalProceeding->lawsuit_type_id))
                <option value="">-- SELECIONE --</option>
            @else
                <option value="" selected="selected">-- SELECIONE --</option>
            @endif

            @foreach ($lawsuitTypes as $value)
                <option value="{{ $value->id }}"
                        @if ($value->id == old('lawsuit_id', $legalProceeding->lawsuit_type_id))
                            selected="selected"
                    @endif
                >{{ $value->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        <label for="name">1º Endereçamento<span class="required">*</span></label>
        <input type="text" id="legal_address_1" name="legal_address_1" class="form-control"
               value="{{old('legal_address_1') ? old('legal_address_1') : $legalProceeding->legal_address_1}}" {{ $disabled ?? '' }}/>
    </div>
    <div class="form-group col-md-4">
        <label for="email">2º Endereçamento<span class="required">*</span></label>
        <input type="text" id="legal_address_2" name="legal_address_2" class="form-control"
               value="{{old('legal_address_2') ? old('legal_address_2') : $legalProceeding->legal_address_2}}" {{ $disabled ?? '' }}/>
    </div>
    <div class="form-group col-md-4">
        <label for="uf">Estado<span class="required">*</span></label>
        <select class="form-control" id="uf" {{ $disabled ?? '' }}>
            @if (isset($legalProceeding->uf_id))
                <option value="" selected="selected">-- SELECIONE --</option>
            @else
                <option value="" selected="selected">-- SELECIONE --</option>
            @endif

            @foreach ($uf as $value)
                <option value="{{ $value->code }}"
                        @if ($value->id == old('uf', $legalProceeding->uf_id))
                            selected="selected"
                    @endif
                >{{ $value->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4">
        <label for="email">Qualificação das partes<span class="required">*</span></label>
        <input type="text" id="legal_address_2" name="legal_address_2" class="form-control"
               value="{{old('legal_address_2') ? old('legal_address_2') : $legalProceeding->legal_address_2}}" {{ $disabled ?? '' }}/>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-12">
        <label for="email">Ação<span class="required">*</span></label>
        <textarea id="exampleFormControlTextarea1" rows="3" class="form-control" {{ $disabled ?? '' }}>
            {{old('legal_address_2') ? old('legal_address_2') : $legalProceeding->legal_address_2}}
        </textarea>
    </div>
</div>

