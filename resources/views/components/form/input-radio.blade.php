<div class="form-check">
    <input class="form-check-input" type="radio" name="{{ $name }}" value="{{ $value }}"
        id="{{ $id }}" {{ $db == $value ? 'checked' : '' }} />
    <label class="form-check-label" for="{{ $id }}"> {{ $label }} </label>
    <div class="{{ isset($satuan) ? 'input-group' : '' }} d-none" id="{{ $id . '-wrapper' }}">
        <input type="number" class="form-control font-control-sm">
        @if (isset($satuan))
            <span class="input-group-text" id="basic-addon2">{{ $satuan }}</span>
        @endif
    </div>
    <div class="{{ isset($satuan) ? 'input-group' : '' }} d-none" id="{{ $id . '-wrapper-date' }}">
        <input type="date" class="form-control font-control-sm">
        @if (isset($satuan))
            <span class="input-group-text" id="basic-addon2">{{ $satuan }}</span>
        @endif
    </div>
    <div class="{{ isset($satuan) ? 'input-group' : '' }} d-none" id="{{ $id . '-wrapper-text' }}">
        <input type="text" class="form-control font-control-sm">
        @if (isset($satuan))
            <span class="input-group-text" id="basic-addon2">{{ $satuan }}</span>
        @endif
    </div>
</div>
