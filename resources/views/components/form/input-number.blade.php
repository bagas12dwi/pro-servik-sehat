@if (isset($satuan))
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <div class="{{ isset($satuan) ? 'input-group' : '' }} mb-3">
    @else
        <div class=" mb-3">
            <label for="{{ $id }}" class="form-label">{{ $label }}</label>
@endif

<input type="number" class="form-control" name="{{ $id }}" id="{{ $id }}" value="{{ old($id, $db) }}"
    placeholder="{{ $placeholder }}" {{ $readonly ?? '' }} />
@if (isset($satuan))
    <span class="input-group-text" id="basic-addon2">{{ $satuan }}</span>
@endif
<small id="error-message-{{ $id }}" class="form-text text-danger" hidden>{{ $errorMessage ?? '' }}</small>
</div>
