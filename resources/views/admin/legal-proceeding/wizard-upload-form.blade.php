<input type="hidden" id="id-lawsuit" value="{{$legalProceeding->id}}" />

<div class="row">
    <div class="form-group col-md-12">
        <form action="{{ route('admin.legal-proceeding.upload.store') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
            @csrf
        </form>
    </div>
</div>
