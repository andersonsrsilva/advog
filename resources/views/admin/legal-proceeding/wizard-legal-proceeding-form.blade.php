@csrf

<div class="row">
    <div class="form-group col-md-6">
        <label for="lawsuit_id">Processo<span class="required">*</span></label>
        <select class="form-control" id="lawsuit_id" name="lawsuit_id" {{ $disabled ?? '' }}>
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
        <label for="lawsuit_type_id">Tipo da ação<span class="required">*</span></label>
        <select class="form-control" id="lawsuit_type_id" name="lawsuit_type_id" {{ $disabled ?? '' }}>
            @if (isset($legalProceeding->lawsuit_type_id))
                <option value="">-- SELECIONE --</option>
            @else
                <option value="" selected="selected">-- SELECIONE --</option>
            @endif

            @foreach ($lawsuitTypes as $value)
                <option value="{{ $value->id }}"
                        @if ($value->id == old('lawsuit_type_id', $legalProceeding->lawsuit_type_id))
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
        <select class="form-control" id="uf_id" name="uf_id" {{ $disabled ?? '' }}>
            @if (isset($legalProceeding->uf_id))
                <option value="">-- SELECIONE --</option>
            @else
                <option value="" selected="selected">-- SELECIONE --</option>
            @endif

            @foreach ($uf as $value)
                <option value="{{ $value->id }}"
                        @if ($value->id == old('uf_id', $legalProceeding->uf_id))
                            selected="selected"
                    @endif
                >{{ $value->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
        <label for="names">Qualificação das partes<span class="required">*</span></label>

        <div class="input-group">
            <input type="text" id="cpf" class="form-control">
            <span class="input-group-btn">
                <a type="button" id="findCustomer" class="btn btn-success">Buscar</a>
            </span>
        </div>
        <span id="notFound" class="required"></span>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <div id="customers">
            @if(!is_null(old('customers')))
                @foreach(old('customers') as $value)
                    <div class="input-group customers-{{ $loop->index }}">
                        <input type="text" name="customers[{{ $loop->index }}]" class="form-control" value="{{ $value }}" readonly="">
                        <span class="input-group-btn">
                            <a type="button" class="btn btn-danger" onclick="removeCustomer({{ $loop->index }})">Remover</a>
                        </span>
                    </div>
                @endforeach
            @endif
            @if(!is_null($legalProceeding->customers))
                @foreach($legalProceeding->customers as $value)
                    <div class="input-group customers-{{ $loop->index }}">
                        <input type="text" name="customers[{{ $loop->index }}]" class="form-control" value="{{ $value->cpf }} - {{ $value->name }}" readonly="">
                        <span class="input-group-btn">
                        <a type="button" class="btn btn-danger" onclick="removeCustomer({{ $loop->index }})">Remover</a>
                    </span>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

<br>
<div class="row">
    <div class="form-group col-md-12">
        <label for="lawsuit_description">Ação<span class="required">*</span></label>
        <textarea id="lawsuit_description" name="lawsuit_description">
            {{old('lawsuit_description') ? old('lawsuit_description') : $legalProceeding->lawsuit_description}}
        </textarea>
    </div>
</div>
<br>
<div class="row">
    <div class="form-group col-md-12">
        <label for="defendant_description">Réu<span class="required">*</span></label>
        <textarea id="defendant_description" name="defendant_description">
            {{old('defendant_description') ? old('defendant_description') : $legalProceeding->defendant_description}}
        </textarea>
    </div>
</div>
<br>
<div class="row">
    <div class="form-group col-md-12">
        <label for="preliminary_description">Preliminar<span class="required">*</span></label>
        <textarea id="preliminary_description" name="preliminary_description">
            {{old('preliminary_description') ? old('preliminary_description') : $legalProceeding->preliminary_description}}
        </textarea>
    </div>
</div>
<br>
<div class="row">
    <div class="form-group col-md-12">
        <label for="fact_description">Do Fato<span class="required">*</span></label>
        <textarea id="fact_description" name="fact_description">
            {{old('fact_description') ? old('fact_description') : $legalProceeding->fact_description}}
        </textarea>
    </div>
</div>
<br>
<div class="row">
    <div class="form-group col-md-12">
        <label for="right_description">Do Direito<span class="required">*</span></label>
        <textarea id="right_description" name="right_description">
            {{old('right_description') ? old('right_description') : $legalProceeding->right_description}}
        </textarea>
    </div>
</div>
<br>
<div class="row">
    <div class="form-group col-md-12">
        <label for="order_description">Dos Pedidos<span class="required">*</span></label>
        <textarea id="order_description" name="order_description">
            {{old('order_description') ? old('order_description') : $legalProceeding->order_description}}
        </textarea>
    </div>
</div>
<br>
<div class="row">
    <div class="form-group col-md-3">
        <label for="value_lawsuit">Valor da causa<span class="required">*</span></label>
        <div class="input-group">
            <div class="input-group-addon">R$</div>
            <input type="text" id="value_lawsuit" name="value_lawsuit" class="form-control" maxlength="18"
                   value="{{old('value_lawsuit') ? old('value_lawsuit') :
                        number_format($legalProceeding->value_lawsuit, 2, ',', '.')}}" {{ $disabled ?? '' }}/>
        </div>
    </div>
</div>
