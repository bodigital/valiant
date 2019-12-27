<div class="custom-file">
    <input
        type="file"
        name="{{ $field->name }}[]"
        id="{{ $field->name }}"
        class="custom-file-input @error($field->name) is-invalid @enderror"
        multiple
    >

    <label for="{{ $field->name }}" class="custom-file-label">
        Choose Files
    </label>
</div>

@error($field->name . '*')
    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
@enderror

@include('valiant::inputs.files-list')
