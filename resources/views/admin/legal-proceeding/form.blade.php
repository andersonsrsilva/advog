@csrf

<div class="row" id="processo-vara">
    <div class="form-group col-md-6">
        <label for="number_lawsuit">Número do processo<span class="required">*</span></label>
        <input type="text" id="number_lawsuit" name="number_lawsuit" class="form-control"
               value="{{old('number_lawsuit') ? old('number_lawsuit') : $legalProceeding->number_lawsuit}}" {{ $blocked ?? '' }}/>
    </div>
    <div class="form-group col-md-6">
        <label for="local_lawsuit">Vara<span class="required">*</span></label>
        <input type="text" id="local_lawsuit" name="local_lawsuit" class="form-control"
               value="{{old('local_lawsuit') ? old('local_lawsuit') : $legalProceeding->value_lawsuit}}" {{ $blocked ?? '' }}/>
    </div>
</div>
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
        <label for="legal_address_1">1º Endereçamento<span class="required">*</span></label>
        <input type="text" id="legal_address_1" name="legal_address_1" class="form-control"
               value="{{old('legal_address_1') ? old('legal_address_1') : $legalProceeding->legal_address_1}}" {{ $disabled ?? '' }}/>
    </div>
    <div class="form-group col-md-4">
        <label for="legal_address_2">2º Endereçamento<span class="required">*</span></label>
        <input type="text" id="legal_address_2" name="legal_address_2" class="form-control"
               value="{{old('legal_address_2') ? old('legal_address_2') : $legalProceeding->legal_address_2}}" {{ $disabled ?? '' }}/>
    </div>
    <div class="form-group col-md-4">
        <label for="uf_id">Estado<span class="required">*</span></label>
        <select class="form-uf_id" id="uf_id" {{ $disabled ?? '' }}>
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
<br>
<div class="row">
    <div class="form-group col-md-12">
        <label for="email">Ação<span class="required">*</span></label>
        <textarea id="lawsuit_description" name="lawsuit_description"></textarea>
    </div>
</div>
<br>
<div class="row">
    <div class="form-group col-md-12">
        <label for="email">Réu<span class="required">*</span></label>
        <textarea id="defendant_description" name="defendant_description"></textarea>
    </div>
</div>
<br>
<div class="row">
    <div class="form-group col-md-12">
        <label for="email">Preliminar<span class="required">*</span></label>
        <textarea id="preliminary_description" name="preliminary_description"></textarea>
    </div>
</div>
<br>
<div class="row">
    <div class="form-group col-md-12">
        <label for="fact_description">Do Fato<span class="required">*</span></label>
        <textarea id="fact_description" name="fact_description"></textarea>
    </div>
</div>
<br>
<div class="row">
    <div class="form-group col-md-12">
        <label for="right_description">Do Direito<span class="required">*</span></label>
        <textarea id="right_description" name="right_description"></textarea>
    </div>
</div>
<br>
<div class="row">
    <div class="form-group col-md-12">
        <label for="order_description">Dos Pedidos<span class="required">*</span></label>
        <textarea id="order_description" name="order_description"></textarea>
    </div>
</div>
<br>
<div class="row">
    <div class="form-group col-md-4">
        <label for="value_lawsuit">Valor da causa<span class="required">*</span></label>
        <input type="text" id="value_lawsuit" name="value_lawsuit" class="form-control"
               value="{{old('value_lawsuit') ? old('value_lawsuit') : $legalProceeding->value_lawsuit}}" {{ $disabled ?? '' }}/>
    </div>
</div>
