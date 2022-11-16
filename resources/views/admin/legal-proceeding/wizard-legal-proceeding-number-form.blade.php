@csrf

<div class="row">
    <div class="form-group col-md-6">
        <label for="number_lawsuit">Número do processo<span class="required">*</span></label>
        <input type="text" id="number_lawsuit" name="number_lawsuit" class="form-control"
               value="{{old('number_lawsuit') ? old('number_lawsuit') : $legalProceeding->number_lawsuit}}" {{ $blocked ?? '' }}/>
    </div>
    <div class="form-group col-md-6">
        <label for="local_lawsuit">Vara<span class="required">*</span></label>
        <input type="text" id="local_lawsuit" name="local_lawsuit" class="form-control"
               value="{{old('local_lawsuit') ? old('local_lawsuit') : $legalProceeding->local_lawsuit}}" {{ $blocked ?? '' }}/>
    </div>
</div>
